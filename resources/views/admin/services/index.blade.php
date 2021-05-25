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
                <a href="{{ route('admin.services.create') }}"
                    class="rounded-lg px-2 py-3 bg-blue-500 text-white hover:bg-blue-600">Yeni Hizmet Oluştur</a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Hizmetlerimiz
                </div>
            </div>
        </div>
    </div>


    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col mx-auto sm:px-6 lg:px-8 mb-12 ">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Başlık
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Dil
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Ana Kategori Mi?
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($servicess as $service)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $service->title }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $service->language }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($service->parent)
                                    -
                                    @else
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Evet
                                    </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex flex-row justify-end">
                                    <a href="{{ route('admin.services.edit', $service) }}" class="text-indigo-600 hover:text-indigo-900 mr-4">Düzenle</a>
                                    <form action="{{ route('admin.services.destroy', $service) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="text-red-600 hover:text-red-900" type="submit">Sil</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>