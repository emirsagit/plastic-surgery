<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services.index');
    }

    public function show(Service $service, Request $request)
    {
        app()->setLocale($service->language);
        
        $kbb = Service::where('slug', 'kbb-hastaliklari')->first();
        $parent_slug = $service->parent ? $service->parent->slug : null;

        if ($service->slug == $kbb->slug || $parent_slug == $kbb->slug) {
            SEOTools::setTitle($service->seo_title . " | " . config('admin.name'));
        } else {
            SEOTools::setTitle($service->seo_title . " - " . now()->year . " Fiyatı" . " | " . config('admin.name'));
        }
        SEOTools::setDescription($service->seo_description);
        if (count($children = $service->childrenLanguages)) {
            foreach ($children as $child) {
                SEOMeta::addAlternateLanguage("{$child->language}", "https://www.hayatikale.com/{$child->slug}");
            }
            SEOMeta::addAlternateLanguage("{$service->language}", "https://www.hayatikale.com/{$service->slug}");
        } elseif ($parent = $service->parentLanguage) {
            SEOMeta::addAlternateLanguage("{$parent->language}", "https://www.hayatikale.com/{$parent->slug}");
            foreach ($parent->childrenLanguages as $child) {
                SEOMeta::addAlternateLanguage("{$child->language}", "https://www.hayatikale.com/{$child->slug}");
            }
        }
        SEOTools::opengraph()->setUrl('https://www.hayatikale.com');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::jsonLd()->addImage('https://www.hayatikale.com/img/hayati-kale-profile.png');
        return view('services.show', compact('service'));
    }
}
