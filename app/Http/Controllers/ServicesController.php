<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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
        SEOTools::setTitle($service->seo_title);
        SEOTools::setDescription($service->seo_description);
        if (count($children = $service->childrenLanguages)) {
            foreach ($children as $child) {
                SEOMeta::addAlternateLanguage("{$child->language}", "https://evdesaglikacilbakim.com/{$child->slug}");
            }
            SEOMeta::addAlternateLanguage("{$service->language}", "https://evdesaglikacilbakim.com/{$service->slug}");
        } elseif ($parent = $service->parentLanguage) {
            SEOMeta::addAlternateLanguage("{$parent->language}", "https://evdesaglikacilbakim.com/{$parent->slug}");
            foreach ($parent->childrenLanguages as $child) {
                SEOMeta::addAlternateLanguage("{$child->language}", "https://evdesaglikacilbakim.com/{$child->slug}");
            }
        }
        SEOTools::opengraph()->setUrl('https://evdesaglikacilbakim.com');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::jsonLd()->addImage('https://evdesaglikacilbakim.com/img/doktor_giris.jpg');
        return view('services.show', compact('service'));
    }
}
