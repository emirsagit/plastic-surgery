<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->path() === 'tr') {
            return redirect('/');
        }
        if (App::isLocale('tr')) {
            SEOTools::setTitle('Op. Dr. Hayati Kale | Burun estetiği, Botox, Yüz-Dudak Dolgusu');
            SEOTools::setDescription("Op. Dr. Hayati Kale - Burun estetiği (Rhinoplasty), Botox, Yüz-Dudak Dolgusu, KBB Hastalıkları. Daha iyi nefes alırken daha güzel görünmek ister misiniz?");
        } elseif(App::isLocale('en')) {
            SEOTools::setTitle('Home Health Care - Online Doctor - Patient Care at Home');
            SEOTools::setDescription('Click for home health care service, home patient care service, online doctor examination. We gained the trust of thousands of patients with our specialist doctor and nurse in every branch.');
        }
        SEOTools::opengraph()->setUrl('https://evdesaglikacilbakim.com');
        SEOMeta::addAlternateLanguage("tr", 'https://evdesaglikacilbakim.com');
        SEOMeta::addAlternateLanguage("en", 'https://evdesaglikacilbakim.com/en');
        SEOTools::setCanonical('https://evdesaglikacilbakim.com');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::jsonLd()->addImage('https://evdesaglikacilbakim.com/img/doktor_giris.jpg');
        return view('home.index');
    }

    public function about()
    {
        return view('about.index');
    }

    public function contact()
    {
        return view('contact.index');
    }
}
