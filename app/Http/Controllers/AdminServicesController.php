<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ServicesAdminFormRequest;
use App\Http\Requests\ServiceAdminUpdateRequest;

class AdminServicesController extends Controller
{
    public function index()
    {
        return view('admin.services.index', [
            'servicess' => Service::get()
        ]);
    }

    public function create()
    {
        return view('admin.services.create', [
            'parents' => Service::where('language', 'tr')->get(),
            'servicess' => Service::with('parentService')->get()
        ]);
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', [
            'parents' => Service::where('language', 'tr')->get(),
            'servicess' => Service::with('parentService')->get(),
            'service' => $service
        ]);
    }

    public function store(ServicesAdminFormRequest $request)
    {
        $filenameForSaving = null;

        if ($image = $request->file('image')) {
            $filename = $this->manipulateAndUploadImage($image, $id = (Service::latest()->first()->id) + 1);
            $filenameForSaving = "/storage/services/$id-$filename";
        }

        Service::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'video' => $request->video,
            'alt' => $request->alt,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'language' => $request->language,
            'seo_description' => $request->seo_description,
            'seo_title' => $request->seo_title,
            'image' => $filenameForSaving,
            'language_parent' => $request->parent,
            'parent' => $request->main_service
        ]);

        return view('admin.services.index', [
            'servicess' => Service::get()
        ])->with('success', 'Hizmet Kaydedildi');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return view('admin.services.index', [
            'servicess' => Service::get()
        ])->with('success', 'Hizmet Silindi');
    }

    public function update(ServiceAdminUpdateRequest $request, Service $service)
    {
        $filenameForSaving = null;

        if ($image = $request->file('image')) {
            $filename = $this->manipulateAndUploadImage($image, $id = $service->id);
            $filenameForSaving = "/storage/services/$id-$filename";
        }

        $service->update([
            'title' => $request->title,
            'video' => $request->video,
            'alt' => $request->alt,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'language' => $request->language,
            'seo_description' => $request->seo_description,
            'seo_title' => $request->seo_title,
            'image' => $filenameForSaving ? $filenameForSaving : $service->image,
            'language_parent' => $request->parent,
            'parent' => $request->main_service
        ]);

        return view('admin.services.index', [
            'servicess' => Service::get()
        ])->with('success', 'Hizmet Kaydedildi');
    }

    protected function manipulateAndUploadImage($image, $id)
    {
        $filename = $image->getClientOriginalName();
        $img = Image::make($image)->resize(1080, 1080)->stream('jpg', 80); //manipulate image
        Storage::put("/public/services/$id-$filename", $img->__toString());
        return $filename;
    }
}
