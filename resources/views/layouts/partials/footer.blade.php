<footer class="relative bg-red-pattern text-white pt-16 pb-6 lg:mt-20 mt-10">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap">
      <div class="w-full lg:w-6/12 px-4 flex flex-col items-center">
        <h4 class="text-3xl font-semibold">{{ __('Op. Dr. Hayati KALE') }}</h4>
        <div class="mt-6 flex flex-row">
          @include('layouts.shared.social')
        </div>
      </div>
      <div class="w-full lg:w-6/12 mt-8 lg:mt-0">
        <div class="flex w-full items-top mb-6">
          <div class="w-full px-4 flex flex-col items-center">
            <span class="block uppercase text-white text-sm font-semibold mb-2">{{ __('YARARLI SAYFALAR') }}</span>
            <ul class="list-unstyled">
              <li>
                <a class="text-gray-100 hover:text-gray-200 font-semibold block pb-2 text-sm"
                  href="{{ '/' . app()->getLocale() }}">{{ __('Anasayfa') }}</a>
              </li>
              <li>
                <a class="text-gray-100 hover:text-gray-200 font-semibold block pb-2 text-sm"
                  href="{{ '/' . app()->getLocale() . '/' .   trans('routes.about') }}">{{ __('Hakkımızda') }}</a>
              </li>
              <li>
                <a class="text-gray-100 hover:text-gray-200 font-semibold block pb-2 text-sm"
                  href="{{ '/' . app()->getLocale() . '/' .   trans('routes.blog') }}">{{ __('Blog') }}</a>
              </li>
              <li>
                <a class="text-gray-100 hover:text-gray-200 font-semibold block pb-2 text-sm"
                  href="{{ '/' . app()->getLocale() . '/' .   trans('routes.contact') }}">{{ __('İletişim') }}</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <hr class="my-6 border-gray-100" />
    <div class="flex flex-wrap items-center md:justify-between justify-center">
      <div class="w-full lg:w-4/12 px-4 mx-auto text-center">
        <div class="text-sm font-semibold pb-8 lg:py-1 lg:pb-1">
          Copyright © 2021. {{ __('Tüm hakları saklıdır') }}
        </div>
      </div>
    </div>
  </div>
</footer>