<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Service;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->service && $request->service != 'all') {
            $service = Service::where('slug', $request->service)->first();
            $images = $service->images()->latest()->paginate(30);
            if (count($images) <= 5 && $service->parentService) {
                $images = $service->parentService->images()->latest()->paginate(30);
                $service = $service->parentService;
            }

            $images->load('services');

            $this->seo($service);

            return view('gallery.index', [
                'images' => $images,
                'selected_service' => $service
            ]);
        }
        $this->seo();

        $images = Image::with('services')->inRandomOrder()->paginate(30);

        return view('gallery.index', [
            'images' => $images
        ]);
    }

    public function seo($service = null)
    {
        if ($service) {
            SEOTools::setTitle(ucfirst($service->title) . __('gallery.title_with_service'));
            SEOTools::setDescription(ucfirst($service->title) . __('gallery.description_with_service'));
        } else {
            SEOTools::setTitle(__('gallery.title_without_service'));
            SEOTools::setDescription(__('gallery.description_without_service'));
        }

        foreach (config('admin.languages') as $language) {
            SEOMeta::addAlternateLanguage($language, "https://www.hayatikale.com/{$language}/galeri");
        }

        SEOTools::opengraph()->setUrl('https://www.hayatikale.com');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::jsonLd()->addImage('https://www.hayatikale.com/img/hayati-kale-profile.png');
    }
}
