<?php

namespace App\View\Composers;

use App\Models\Service;
use Illuminate\View\View;

class ServicesComposer
{
    protected $services;

    public function __construct()
    {
        if (! $this->services) {
            $this->services = Service::where('language', app()->getLocale())->get();
        }
    }

    public function compose(View $view)
    {
        return $view->with(['services' => $this->services]);
    }
}