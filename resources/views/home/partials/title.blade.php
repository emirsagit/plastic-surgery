<div class="w-full flex flex-col gl z-30" id="who-is-doctor-hayati">
        <div class="flex flex-col lg:flex-row items-center bg-blue-pattern">
                <div class="lg:w-1/2 flex flex-col justify-center items-center text-white bg-blue-pattern w-full">
                        <h1 class="text-2xl lg:text-4xl uppercase font-extrabold pt-8 pb-4 text-orange">
                                {{ __('Op. Dr. Hayati Kale') }}</h1>
                        <p class="lg:px-20 px-8 lg:text-center text-sm lg:text-md text-left text-white pb-8">
                                {!! __('home.content') !!} <a class="text-blue-400 hover:text-blue-500 text-sm cursor-pointer" href="{{ '/' . app()->getLocale() . '/' .   trans('routes.about') }}">{{ __('Devamı için tıklayınız') }}-></a>
                        </p>
                </div>
                <div class="lg:w-1/2 w-full">
                        <div class="aspect-w-16 aspect-h-9">
                                <a  class="youtube" href="#">
                                        <img src="/img/efsane-video.jpg" alt="burun estetiği" width="1366" height="768" link="https://www.youtube.com/embed/dRtYqzYuUCI">
                                </a>
                        </div>
                </div>
        </div>

        <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 w-full">
                        <div class="aspect-w-16 aspect-h-9">
                                <a class="youtube" href="#">
                                        <img src="/img/video-2.jpg" alt="rinoplasti" width="1366" height="768" link="https://www.youtube.com/embed/8uBfQulwvK4">
                                </a>
                        </div>
                </div>
                <div class="lg:w-1/2 w-full">
                        <div class="aspect-w-16 aspect-h-9">
                                <a class="youtube" href="#">
                                        <img src="/img/video-1.jpg" alt="Burun Estetiği" width="1366" height="768" link="https://www.youtube.com/embed/Vh11xcWWc7c">
                                </a>
                        </div>
                </div>
        </div>
</div>

{{-- <iframe src="https://www.youtube.com/embed/dRtYqzYuUCI?autoplay=1&playsinline=1"
                                        srcdoc="<style>*{padding:0;margin:0;overflow:hidden}img{width:100%; height:auto}</style>
                                                <a href=https://www.youtube.com/embed/dRtYqzYuUCI?autoplay=1&playsinline=1>
                                                <img src=/img/efsane-video.jpg alt='Youtube Videosu' width='1366' height='768'></a>" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen
                                        title="Burun Estetiği ile ilgili sorulara uzman yanıtları"></iframe> --}}
{{-- 
                                <iframe data-src="https://www.youtube.com/embed/Vh11xcWWc7c" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen loading="lazy" class="lazyload"></iframe> --}}