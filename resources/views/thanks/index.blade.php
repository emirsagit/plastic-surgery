<!-- Event snippet for Website lead conversion page -->

@extends('layouts.app')

@section('content')
<main class="w-full min-h-screen flex flex-col text-white justify-center items-center bg-blue-pattern lg:-mb-20 -mb-10">
    <section class="w-full text-white flex flex-col lg:justify-between overflow-hidden items-center">
        <div class="flex flex-col justify-center items-center pb-10 w-4/5 lg:w-1/3">
            <h1 class="text-2xl lg:text-4xl font-bold leading-relaxed mb-12">{{ __('Thank you title') }}🙏</h1>
            <p class="mb-8 text-center lg:text-2xl">{{ __('Thank you') }}👩‍⚕️</p>
            <a class="text-gray-900 rounded-lg flex mt-4 items-center bg-gray-100 hover:bg-gray-200 py-2 px-8 text-lg uppercase font-bold" href="{{ '/' . app()->getLocale() }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M7.828 11H20v2H7.828l5.364 5.364-1.414 1.414L4 12l7.778-7.778 1.414 1.414z" />
                </svg>{{ (__('Anasayfa')) }}</a>
        </div>
    </section>
</main>

@include('layouts.shared.tagThanks')

@endsection