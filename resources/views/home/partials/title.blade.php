<div class="pt-8 bg-soft-gray w-full flex flex-col justify-end items-center md:h-screen z-10 text-soft-gray overflow-hidden">
        <img src="/img/logo/hayati-kale-logo.png" alt="hayati kale logo"
                class="z-10 absolute top-14 left-24 w-72 hidden lg:flex" height="286" width="933">
        <img src="/img/hayati-kale-profile.png" alt="Op. Dr. Hayati Kale profil fotoğrafı"
                class="md:h-screen cssanimation fadeInBottom z-10 md:pt-20 pt-12">
        <img src="/img/frame.png" alt="frame"
                class="absolute h-screen items-center text-center cssanimation fadeInBottomPen scale">
        <img src="/img/glass.png" alt="gozluk"
                class="hidden lg:flex lg:absolute cssanimation fadeInBottomPen initial-glass">
        <svg xmlns="http://www.w3.org/2000/svg"
                class="h-14 w-14 absolute m-auto bottom-8 left-12 md:bottom-24 md:left-24 right-0 z-20 animation-opacity hover:text-white cursor-pointer bounce" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" width="14" height="14" onClick="goto()">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7" />
        </svg>

</div>

<div class="w-full flex flex-col z-30" id="who-is-doctor-hayati">
        <div class="flex flex-col lg:flex-row">
                <div class="lg:w-1/2 flex flex-col justify-center items-center text-white bg-black-pattern">
                        <h1 class="text-2xl lg:text-4xl uppercase font-extrabold pt-8 pb-4">Op. Dr. Hayati Kale</h1>
                        <p class="lg:px-20 px-8 lg:text-center text-sm lg:text-md text-left pb-8">
                                {{ __('home.content') }}
                        </p>
                </div>
                <div class="lg:w-1/2">
                        <img src="/img/hayati-kale-a-haber.jpg" loading="lazy" alt="hayati kale a haber" width="1228"
                                height="597">
                </div>
        </div>

        <div class="flex flex-col lg:flex-row">
                <div class="lg:w-1/2 order-2 lg:order-1">
                        <div class="aspect-w-16 aspect-h-9">
                                <iframe data-src="https://www.youtube.com/embed/8uBfQulwvK4" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen loading="lazy" width="1920" height="1080" class="lazyload"></iframe>
                        </div>
                </div>
                <div
                        class="lg:w-1/2 flex flex-col justify-center items-center text-white bg-blue-pattern order-1 lg:order-2">
                        <h2 class="text-2xl lg:text-4xl uppercase font-extrabold pt-8 pb-4">Op. Dr. Hayati Kale</h2>
                        <p class="lg:px-20 px-8 lg:text-center text-sm lg:text-md text-left pb-2">
                                {{ __('home.resume') }}
                        </p>
                        <a
                                class="text-blue-400 hover:text-blue-500 text-sm cursor-pointer pb-8">{{ __('Devamı için tıklayınız') }}-></a>
                </div>
        </div>
</div>


