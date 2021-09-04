@extends('layouts.app')

@section('content')
<main class="min-h-screen" class="relative">
    <div class="bg-press shadow-lg flex h-96"></div>
    <div class="flex flex-col shadow-md">
        <p class="text-center py-4 un"><a href="{{ '/' . app()->getLocale() }}" class="hover:text-gray-700 underline">{{ __('Anasayfa') }}</a>
            /<span class="text-xl"> {{ __('Basında Biz') }}</span></p>
    </div>
    <div class="mt-10 grid lg:gap-8 gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 lg:px-32 p-4 justify-center" x-data="popup()">
        <a class="justify-center cursor-pointer border-gray-300 border-4 flex hover:scale-105 transform ease-in-out duration-300 h-24" href="https://www.cnnturk.com/saglik/sosyal-medya-estetik-operasyonlara-talebi-artiriyor" rel="nofollow">
            <img src="/img/press/cnn.png" alt="cnnturk" class="p-1 m-auto h-20">
        </a>
        <a class="justify-center cursor-pointer border-gray-300 border-4 flex hover:scale-105 transform ease-in-out duration-300 h-24" href="https://www.hurriyet.com.tr/yerel-haberler/izmir/op-dr-hayati-kale-burun-estetiginde-piezo-donemi-41835903" rel="nofollow">
            <img src="/img/press/hurriyet.png" alt="hurriyet gazetesi" class="p-1 m-auto h-20">
        </a>
        <a class="justify-center cursor-pointer border-gray-300 border-4 flex hover:scale-105 transform ease-in-out duration-300 h-24" href="/img/press/fox-tam.jpg" rel="nofollow" x-on:click.prevent="handleClick">
            <img src="/img/press/fox.png" alt="fox tv" class="p-2 m-auto h-20">
        </a>
        <a class="justify-center cursor-pointer border-gray-300 border-4 flex hover:scale-105 transform ease-in-out duration-300 h-24" href="https://www.cumhuriyet.com.tr/haber/ses-kisikligi-girtlak-larenks-kanseri-habercisi-olabilir-1477909" rel="nofollow">
            <img src="/img/press/cumhuriyet.png" alt="cumhuriyet gazetesi" class="p-1 m-auto h-20">
        </a>
        <a class="justify-center cursor-pointer border-gray-300 border-4 flex hover:scale-105 transform ease-in-out duration-300 h-24" href="https://www.sabah.com.tr/saglik/2021/06/25/op-dr-hayati-kale-kepce-kulak-ozguveni-etkiliyor" rel="nofollow">
            <img src="/img/press/sabah.png" alt="sabah gazetesi" class="p-1 m-auto h-20">
        </a>
        <a class="justify-center cursor-pointer border-gray-300 border-4 flex hover:scale-105 transform ease-in-out duration-300 h-24" href="https://www.ahaber.com.tr/saglik/2021/06/28/op-dr-hayati-kale-ameliyat-olmadan-da-burnu-sekillendirmek-mumkun" rel="nofollow">
            <img src="/img/press/ahaber.png" alt="ahaber" class="p-1 m-auto h-20">
        </a>
        <a class="justify-center cursor-pointer border-gray-300 border-4 flex hover:scale-105 transform ease-in-out duration-300 h-24" href="/img/press/show-haber-tam.jpg" rel="nofollow" x-on:click.prevent="handleClick">
            <img src="/img/press/show.png" alt="show tv" class="p-1 m-auto h-20">
        </a>
        <a class="justify-center cursor-pointer border-gray-300 border-4 flex hover:scale-105 transform ease-in-out duration-300 h-24" href="https://www.posta.com.tr/sosyal-medya-burun-estetigi-operasyonlarini-artirdi-haber-fotograf-2265583" rel="nofollow">
            <img src="/img/press/posta.png" alt="posta gazetesi" class="p-1 m-auto h-20">
        </a>
        <a class="justify-center cursor-pointer border-gray-300 border-4 flex hover:scale-105 transform ease-in-out duration-300 h-24" href="https://www.haberler.com/op-dr-hayati-kale-uyardi-geniz-eti-dis-ve-14230058-haberi/" rel="nofollow">
            <img src="/img/press/haberlercom.png" alt="haberlercom" class="p-1 m-auto h-20">
        </a>
        <a class="justify-center cursor-pointer border-gray-300 border-4 flex hover:scale-105 transform ease-in-out duration-300 h-24" href="/img/press/kanal7-tam.jpg" rel="nofollow" x-on:click.prevent="handleClick">
            <img src="/img/press/kanal7.png" alt="kanal7" class="p-1 m-auto h-20">
        </a>
        <a class="justify-center cursor-pointer border-gray-300 border-4 flex hover:scale-105 transform ease-in-out duration-300 h-24" href="https://www.mynet.com/cocuklarda-horlama-geniz-eti-ve-bademcikte-buyume-habercisi-olabilir-1230794-mykadin" rel="nofollow">
            <img src="/img/press/mynet.png" alt="mynet" class="p-1 m-auto h-20">
        </a>
        <a class="justify-center cursor-pointer border-gray-300 border-4 flex hover:scale-105 transform ease-in-out duration-300 h-24"
            href="https://www.medimagazin.com.tr/medilife/estetik-plastik/tr-dr-hayati-kale-burun-dolgusu-ile-burun-sekil-bozukluklarinin-bircogu-tedavi-edilebilir-10-89-84868.html" rel="nofollow">
            <img src="/img/press/medimagazin.png" alt="medimagazin" class="p-1 m-auto h-20">
        </a>
        <a class="justify-center cursor-pointer border-gray-300 border-4 flex hover:scale-105 transform ease-in-out duration-300 h-24" href="/img/press/vatan-tam.jpg" rel="nofollow" x-on:click.prevent="handleClick">
            <img src="/img/press/vatan.png" alt="vatan" class="p-1 m-auto h-20">
        </a>
        <a class="justify-center cursor-pointer border-gray-300 border-4 flex hover:scale-105 transform ease-in-out duration-300 h-24" href="https://www.yeniasir.com.tr/saglik/2021/06/28/op-dr-hayati-kale-ameliyat-olmadan-da-burnu-sekillendirmek-mumkun" rel="nofollow">
            <img src="/img/press/yeni-asir.png" alt="yeni-asir" class="p-1 m-auto h-20">
        </a>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <aside x-show="imgPopup" x-transition class="fixed top-0 bottom-0 left-0 right-0 z-50 bg-gray-700 bg-opacity-90 flex" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-cloak>
            <button class="fixed top-0 right-0 lg:top-2 lg:right-2 text-white" x-on:click="{imgPopup= false}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 lg:h-12 lg:w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="flex items-center justify-center text-center m-auto">
                <img src="" class="max-h-screen py-8 rounded-lg" id="popupImageEl" />
                <button class="text-white absolute bottom-1 underline font-bold lg:font-lg" x-on:click="{imgPopup= false}">
                    {{ __('Geri') }}
                </button>
            </div>
        </aside>
    </div>
</main>


<script>
    function popup() {
        const imgEl = document.getElementById("popupImageEl")
        return {
            imgPopup: false,
            handleClick(e) {
                imgEl.src = e.currentTarget.href;  
                this.imgPopup = !this.imgPopup;
            }
        }
    } 
</script>
@endsection