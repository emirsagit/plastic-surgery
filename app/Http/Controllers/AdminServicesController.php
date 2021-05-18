<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ServicesAdminFormRequest;
use Illuminate\Http\Request;

class AdminServicesController extends Controller
{
    public function index()
    {
        return view('admin.services.index');
    }

    public function create()
    {
        return view('admin.services.create', [
            'parents' => Service::where('language', 'tr')->get()
        ]);
    }

    public function store(ServicesAdminFormRequest $request)
    {
        if ($request->file('image')) {
            $image       = $request->file('image');
            $filename    = $image->getClientOriginalName();
            $img = Image::make($image)->resize(1000, 562.5)->stream('jpg', 80); //manipulate image
            Storage::put("/public/services/$filename", $img->__toString());
        }   
        $filenameForSaving = $request->file('image') ? '/storage/services/' . $filename : '';
        if($request->parent) {
            $parent = Service::where('slug', $request->parent)->first();
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
            'language_parent' => $request->parent ? $parent->id : null
        ]);

        return view('admin.services.index')->with('success', 'Hizmet Kaydedildi');
    }
}
