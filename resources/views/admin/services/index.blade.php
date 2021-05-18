<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hizmetlerimiz') }}
        </h2>
        @isset($success)
        <div class="bg-green-700">
            <p class="text-white font-bold text-lg mt-4 p-2">{{ $success }}</p>
        </div>
        @endisset
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col">
            <div class="flex flex-col items-end mb-4">
                <a href="{{ route('admin.services.create') }}" class="rounded-lg px-2 py-3 bg-blue-500 text-white hover:bg-blue-600">Yeni Hizmet Oluştur</a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Hizmetlerimiz
                </div>
            </div>
        </div>
    </div>
</x-app-layout>