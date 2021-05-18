@extends('layouts.app')

@section('content')
<main class="min-h-screen mb-32">
    <div class="bg-gradient-to-b from-blue-500 bg-contain bg-no-repeat">
        <div class="pt-24">
            <div class="flex flex-row justify-evenly mb-8 mt-4">
                @include('layouts.shared.telephoneAndOnlineLinks')
            </div>
            <h1 class="text-4xl text-gray-800 font-extrabold text-center">
                {{ $service->title }}
            </h1>
        </div>
    </div>
    <div class="mt-8 border-t border-b border-blue-200 text-sm text-gray-700 font-light lg:pl-32">
        <p class="px-4"><a href="{{ '/' . app()->getLocale() }}" class="hover:text-gray-900">{{ __('Anasayfa') }} /</a>
            {{ $service->title }}</p>
    </div>
    <div class="relative mb-32 lg:px-32 flex lg:flex-row flex-col">
        <div class="lg:px-4 lg:w-8/12 text-justify">
            <img src="{{ $service->image }}" alt="{{ $service->alt }}" width="1000" height="562.5"
                class="shadow-lg rounded">
            <div class="px-4 lg:px-0 mt-4 ck-editor__editable">
                {!! $service->body !!}
            </div>
        </div>
        <div class="mx-4 lg:w-4/12">
            <div class="sticky top-0 flex items-center justify-center">

                <form id="form" class="bg-white rounded px-8 pt-6 pb-8 mb-4">
                    <p class="block text-gray-700 font-bold mb-2 text-xl text-center">Hangi Hizmetimiz Hakkında Görüşmek İstersiniz?</p>
                    <br>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            İsim
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="name" id="name" type="text" placeholder="Adınız Soyadınız" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="telefon">
                            Telefon
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="tel" id="tel" type="tel" placeholder="Telefon Numaranız" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            E-Posta
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="email" id="email" type="email" placeholder="E-Posta Adresiniz" required>
                    </div>

                    {{-- <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="Date">
                            Fecha
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="date" id="date" type="date" placeholder="Ingresa tu Fecha de Nacimiento" required>
                    </div> --}}

                    <div class="mb-4">

                        <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
                            Mesajınız
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="body" id="body" type="text" placeholder="Kısaca Mesajınız"
                            required></textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <button id="submit"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            İletişime Geçin
                        </button>
                    </div>
                    <div class="mb-4">
                </form>
            </div>
        </div>
    </div>
</main>
@endsection