<?php

namespace App\Http\Controllers;

use App\Models\Image;
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

        $this->seo();

        return view('home.index', [
            'images' => Image::with('services')->inRandomOrder()->take(15)->get()
        ]);
    }

    public function about()
    {
        $this->aboutSeo();

        return view('about.index');
    }

    public function contact()
    {
        $this->contactSeo();

        return view('contact.index');
    }

    protected function seo()
    {
        if (App::isLocale('tr')) {
            SEOTools::setTitle('Op. Dr. Hayati Kale | Burun estetiği, Botox, Yüz-Dudak Dolgusu');
            SEOTools::setDescription("Op. Dr. Hayati Kale - Burun estetiği (Rhinoplasty), Botox, Yüz-Dudak Dolgusu, KBB Hastalıkları. Daha iyi nefes alırken daha güzel görünmek ister misiniz?");
        } elseif (App::isLocale('en')) {
            SEOTools::setTitle('Hayati Kale, M.D. | Rhinoplasty, Botox, Face-Lip Filling');
            SEOTools::setDescription('Hayati Kale, M.D. - Rhinoplasty, Botox, Face-Lip Filling, ENT Diseases. Do you want to look more beautiful while breathing better? Location: Istanbul');
        }
        SEOTools::opengraph()->setUrl('https://www.hayatikale.com');
        SEOMeta::addAlternateLanguage("tr", 'https://www.hayatikale.com');
        SEOMeta::addAlternateLanguage("en", 'https://www.hayatikale.com/en');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::jsonLd()->addImage('https://www.hayatikale.com/img/hayati-kale-profile3.png');
    }

    protected function contactSeo()
    {
        if (App::isLocale('tr')) {
            SEOTools::setTitle('Dr. Hayati Kale, M.D. | İletişim Bilgileri');
            SEOTools::setDescription("Dr. Hayati Kale, M.D. - Burun estetiği (Rhinoplasty), Botox, Yüz-Dudak Dolgusu, KBB Hastalıkları. İletişim ve randevu bilgileri için tıklayınız");
        } elseif (App::isLocale('en')) {
            SEOTools::setTitle('Op. Dr. Hayati Kale  | Contact Information');
            SEOTools::setDescription('Op. Dr. Hayati Kale - Rhinoplasty, Botox, Face-Lip Filling, ENT Diseases. Click for contact and appointment information - Istanbul');
        }
        SEOTools::opengraph()->setUrl('https://www.hayatikale.com');
        SEOMeta::addAlternateLanguage("tr", 'https://www.hayatikale.com/tr/iletisim');
        SEOMeta::addAlternateLanguage("en", 'https://www.hayatikale.com/en/contact');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::jsonLd()->addImage('https://www.hayatikale.com/img/hayati-kale-profile.png');
    }

    protected function aboutSeo()
    {
        if (App::isLocale('tr')) {
            SEOTools::setTitle('Op.Dr. Hayati Kale Kimdir? | Burun ve Yüz Estetiği | KBB Hastalıkları');
            SEOTools::setDescription("Op. Dr. Hayati Kale - Burun estetiği (Rhinoplasty), Botox, Yüz-Dudak Dolgusu, KBB Hastalıkları. Dr. Kale Kimdir? Estetik ameliyatlarında hangi yöntemi kullanıyor?");
        } elseif (App::isLocale('en')) {
            SEOTools::setTitle("Who's Dr. Hayati Kale, M.D. | Rhinoplasty, Botox, Face-Lip Filling");
            SEOTools::setDescription('Dr. Hayati Kale, M.D. - Rhinoplasty, Botox, Face-Lip Filling, ENT Diseases. Who is Dr. Kale? Which method does he use in his aesthetic surgeries? Istanbul');
        }
        SEOTools::opengraph()->setUrl('https://www.hayatikale.com');
        SEOMeta::addAlternateLanguage("tr", 'https://www.hayatikale.com/tr/hakkimizda');
        SEOMeta::addAlternateLanguage("en", 'https://www.hayatikale.com/en/about');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::jsonLd()->addImage('https://www.hayatikale.com/img/hayati-kale-profile3.png');
    }
}
