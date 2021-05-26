<div class="w-full flex flex-col gl z-30" id="who-is-doctor-hayati">
        <div class="flex flex-col lg:flex-row items-center bg-blue-pattern">
                <div class="lg:w-1/2 flex flex-col justify-center items-center text-white bg-blue-pattern w-full">
                        <h1 class="text-2xl lg:text-4xl uppercase font-extrabold pt-8 pb-4 text-orange">Op. Dr. Hayati
                                Kale</h1>
                        <p
                                class="lg:px-20 px-8 lg:text-center text-sm lg:text-md text-left pb-8 text-white">
                                {!! __('home.content') !!}
                        </p>
                </div>
                <div class="lg:w-1/2 w-full">
                        <div class="aspect-w-16 aspect-h-9">

                                <iframe src="https://www.youtube.com/embed/Vh11xcWWc?7cautoplay=1&playsinline=1"
                                        srcdoc="<style>*{padding:0;margin:0;overflow:hidden}img{width:100%; height:auto}</style>
                                                <a href=https://www.youtube.com/embed/Vh11xcWWc7c?autoplay=1&playsinline=1>
                                                <img src=/img/video-1.jpg alt='Youtube Videosu' width='1366' height='768'></a>" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen
                                        title="Burun Estetiği ile ilgili sorulara uzman yanıtları"></iframe>
                                {{-- 
                                <iframe data-src="https://www.youtube.com/embed/Vh11xcWWc7c" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen loading="lazy" class="lazyload"></iframe> --}}
                        </div>
                </div>
        </div>

        <div class="flex flex-col lg:flex-row items-center bg-red-pattern ">
                <div class="lg:w-1/2 order-2 lg:order-1 w-full">
                        <div class="aspect-w-16 aspect-h-9">
                                <iframe src="https://www.youtube.com/embed/8uBfQulwvK4" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}img{width:100%;height:auto;margin:auto}</style>
                                        <a href=https://www.youtube.com/embed/8uBfQulwvK4?autoplay=1>
                                        <img src=/img/video-2.jpg alt='Youtube Videosu' width='750' height='422'></a>"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen
                                        title="Burun Estetiği ile ilgili sorulara uzman yanıtları"></iframe>
                                {{-- <iframe data-src="https://www.youtube.com/embed/8uBfQulwvK4" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen loading="lazy" class="lazyload"></iframe> --}}
                        </div>
                </div>
                <div class="lg:w-1/2 flex flex-col justify-center items-center text-white order-1 lg:order-2">
                        <h2 class="text-2xl lg:text-4xl uppercase font-extrabold pt-8 pb-4">Op. Dr. Hayati Kale</h2>
                        <p class="lg:px-20 px-8 lg:text-center text-sm lg:text-md text-left pb-8">
                                {!! __('home.resume') !!}
                                <a class="text-blue-400 hover:text-blue-500 text-sm cursor-pointer"
                                        href="{{ '/' . app()->getLocale() . '/' .   trans('routes.about') }}">{{ __('Devamı için tıklayınız') }}-></a>
                        </p>
                </div>
        </div>
</div>