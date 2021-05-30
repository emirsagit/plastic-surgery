<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fotoğraf Galerisi') }}
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
                <a href="{{ route('admin.image.create') }}"
                    class="rounded-lg px-2 py-3 bg-blue-500 text-white hover:bg-blue-600">Yeni Fotoğraf Ekle</a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Fotoğraf Galerisi
                </div>
            </div>
        </div>
    </div>


    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col mx-auto sm:px-6 lg:px-8 mb-12 ">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                @include('layouts.shared.serviceSelect')
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mb-20">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Fotoğraf
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    İlgili Olduğu Hizmetler
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 w-full">
                            @foreach ($images as $image)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <img src="{{ $image->path }}" alt="" width="150" height="150">
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @foreach ($image->services as $service)
                                    <p class="text-sm text-gray-900 pr-2">{{ $service->title }}</p>
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 text-right text-sm font-medium">
                                    <div class="w-full flex flex-row justify-end items-center h-full">
                                        <a href="{{ route('admin.image.edit', $image) }}"
                                            class="text-indigo-600 hover:text-indigo-900 mr-4">Düzenle</a>
                                        <form action="{{ route('admin.image.destroy', $image) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="text-red-600 hover:text-red-900" type="submit"
                                                onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            <!-- More people... -->
                            {{ $images->appends(request()->query())->links() }}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

<script>
    function selected(event) {
        window.location.href = '/admin/image?service='+ event.target.value;
    }
</script>