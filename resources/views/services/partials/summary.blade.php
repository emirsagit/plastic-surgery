<div class="mx-4 lg:w-4/12" x-data="{ showSummary: '' }">

    <div class="flex-col items-center justify-center hidden lg:flex">
        @include('layouts.shared.contactForm')
    </div>

    <div class="fixed transform flex flex-row items-center -rotate-90 text-white left-0 bottom-60 z-20 -ml-12 font-bold px-1 bg-blue-800 tex-sm tracking-wider cursor-pointer select-none"
        x-on:click="showSummary = 'true'" @click.away="showSummary = ''">
        <p class="p-1">{{ __('İçindekiler') }}</p>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z"
                clip-rule="evenodd" />
        </svg>
    </div>

    <div class="z-20 px-3 fixed left-0 py-4 lg:flex flex-col lg:justify-center lg:sticky top-20 bg-blue-800 lg:bg-white lg:top-0 text-white h-screen w-2/3 lg:w-full text-sm lg:text-md lg:text-blue-900"
        x-show.transition.in.duration.200ms.out.duration.50ms="showSummary || $screen('lg')" x-cloak>
        <p class="text-right cursor-pointer font-bold" x-on:click="showSummary = ''" x-show="showSummary && ! $screen('lg')">X</p>
        <ul>
            <li class="font-bold pb-4 text-white lg:text-blue-900">
                {{ __('YAZI İÇERİĞİ') }}
            </li>
        </ul>
        <div class="table-of-contents" x-on:click="showSummary = ''">
        </div>
    </div>
</div>