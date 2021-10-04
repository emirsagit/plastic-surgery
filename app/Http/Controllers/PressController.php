<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;

class PressController extends Controller
{
    public function index()
    {
        $this->seo();

        return view('press.index');
    }

    protected function seo()
    {
        if (App::isLocale('tr')) {
            SEOTools::setTitle('Op. Dr. Hayati Kale | Basında Biz');
            SEOTools::setDescription("Op. Dr. Hayati Kale'nin KBB hastalıkları ile ilgili medyada yer alan demeçlerini ve kamuoyunu bilgilendirici mesajlarını görüntülemek için tıklayınız.");
        } elseif (App::isLocale('en')) {
            SEOTools::setTitle('Dr. Hayati Kale, M.D.  | In Newspapers');
            SEOTools::setDescription('Dr. Hayati Kale, M.D. - Rhinoplasty, Botox, Face-Lip Filling, ENT Diseases. Click for to see his messages in Turkish newspapers - Istanbul');
        }
        SEOTools::opengraph()->setUrl('https://www.hayatikale.com');
        SEOMeta::addAlternateLanguage("tr", 'https://www.hayatikale.com/tr/basinda-biz');
        SEOMeta::addAlternateLanguage("en", 'https://www.hayatikale.com/en/we-in-press');
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::jsonLd()->addImage('https://www.hayatikale.com/img/hayati-kale-profile.png');
    }
}
