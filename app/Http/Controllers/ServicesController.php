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
        SEOTools::setTitle($service->seo_title);
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
