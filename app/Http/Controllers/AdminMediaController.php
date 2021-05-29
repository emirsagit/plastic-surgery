<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image as InterventionImage;
use App\Models\Image;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->service && $request->service != 'all') {
            $service = Service::where('slug', $request->service)->first();
            $images = $service->images()->paginate(5);
            $images->load('services');

            return view('admin.media.index', [
                'images' => $images,
                'selected_service' => $service
            ]);
        }

        $images = Image::with('services')->paginate(5);

        return view('admin.media.index', [
            'images' => $images
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filenameForSaving = null;

        foreach ($request->file('images') as $image) {
            $filename = $this->manipulateAndUploadImage($image);
            $filenameForSaving = "/storage/images/" . time() . $filename;

            $image = Image::create([
                'path' => $filenameForSaving,
                'alt' => $filename = pathinfo($filename, PATHINFO_FILENAME)
            ]);

            $image->services()->attach(
                explode(',', $request->services)
            );
        }

        return back()->with([
            'success' => 'Fotoğraf Galeriye Eklendi'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view('admin.media.edit', [
            'image' => $image->load('services')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $image->services()->sync(
            explode(',', $request->services)
        );

        return back()->with([
            'success' => 'Güncelleme Başarılı'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $image->delete_file();

        $image->delete();

        return back()->with([
            'success' => 'Fotoğraf silindi'
        ]);
    }

    protected function manipulateAndUploadImage($image)
    {
        $filename = $image->getClientOriginalName();
        $extension = $image->getClientOriginalExtension();
        $img = InterventionImage::make($image)->resize(1080, 1080)->stream($extension, 80); //manipulate image
        Storage::put("/public/images/" . time() . $filename, $img->__toString());
        return $filename;
    }
}
