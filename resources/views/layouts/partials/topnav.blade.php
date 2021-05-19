<button
    class="fixed top-0 right-0 bg-gray-800 z-50 cursor-pointer text-xl leading-none px-3 py-1 lg:hidden outline-none focus:outline-none opacity-75"
    type="button" onclick="toggleNavbar('example-collapse-navbar')">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white" class="w-8 h-8">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
</button>

{{-- <div class="flex flex-row justify-center border-b border-primary">
    @include('layouts.shared.svgs')
</div> --}}

<img src="/img/nav-background1.png" alt="" class="max-h-sm absolute right-20 hidden lg:flex z-0" width="183"
    height="180">

<div class="flex flex-col lg:flex-row items-center lg:justify-between lg:content-between py-4 px-2 lg:px-32">
    <div class="max-w-md">
        <img src="/img/logo.png" class="px-10 lg:pl-0 lg:pr-5 py-5 lg:py-1 z-10" width="768" height="252">
        </img>
    </div>
    <div class="flex-row  w-full h-full text-end justify-end z-10 hidden lg:flex">
        <a href="tel:{{ Config::get('admin.tel') }}" class="flex flex-row items-center text-gray-600 text-lg">
            <img class="w-10 mr-1" src="/img/svg/phone.png" width="256" height="256" alt="telefon"></img>
            {{ config('admin.tel') }}
        </a>
    </div>

</div>