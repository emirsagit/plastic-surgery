<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-2">
            {{ __('Yeni Hizmet Oluştur') }}
        </h2>
        <a href="{{ url()->previous() }}" class="p-1 bg-gray-200 rounded">Geri</a>
        @if(Session::has('success'))
        <div class="bg-green-700">
            <p class="text-white font-bold text-lg mt-4 p-2">{{session::get('success')}}</p>
        </div>
        @endif
    </x-slot>

    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8 flex flex-col">

            <div class="w-full mt-4">
                <div class="w-full max-w-2xl mx-auto bg-white rounded-lg">
                    <img class="text-center uppercase text-bold w-full" src="{{ $image->path }}">
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('admin.image.update', $image) }}" method="POST" enctype="multipart/form-data"
                    class="p-6 bg-white border-b border-gray-200">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="mt-4">
                        <p class="text-center text-gray-600">Fotoğrafla ilişkili kategoriler:</p>
                        @include('admin.media.partials.multipleSelect')
                    </div>

                    <div class="flex justify-center mt-6">
                        <button
                            class="bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>