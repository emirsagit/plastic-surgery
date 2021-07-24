<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-2">
            {{ __('Yeni Hizmet Oluştur') }}
        </h2>
        <a href="{{ route('admin.image.index') }}" class="p-1 bg-gray-200 rounded">Geri</a>
        @if(Session::has('success'))
        <div class="bg-green-700">
            <p class="text-white font-bold text-lg mt-4 p-2">{{session::get('success')}}</p>
        </div>
        @endif
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('admin.image.store') }}" method="POST" enctype="multipart/form-data"
                    class="p-6 bg-white border-b border-gray-200">
                    @csrf
                    <div class="w-full border mt-4">
                        <div class="w-full max-w-2xl p-8 mx-auto bg-white rounded-lg">
                            <div class="" x-data="imageData()">

                                <p class="text-center uppercase text-bold w-full">
                                    <label for="thumbnail" class="cursor-pointer w-full">
                                        Fotoğraf Yükle (En Fazla 300kb, en iyi görüntü için 1080/1080, çoklu seçin için
                                        ctrl)
                                    </label>
                                    <input type="file" name="images[]" multiple id="thumbnail" class="hidden"
                                        @change="updatePreview">
                                </p>

                                <div x-show="files !== ''" class="flex flex-col items-center">
                                    <p x-text="files ? files.map(file => file.name).join(', ') : ''"
                                        class="mb-2 text-blue-800">
                                    </p>
                                    <button type="button" class="bg-red-700 px-2 py-1 rounded text-white"
                                        @click="clearPreview()">Sil</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @error('image')
                    <div class="text-red-600">{{ $message }}
                    </div>
                    @enderror

                    <div class="mt-4">
                        <p class="text-center text-gray-600">Fotoğrafla ilişkili kategorileri seçin.</p>
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

<script>
    function imageData() {
  return {
    files: '',

    updatePreview() {
      this.files = Object.values(document.getElementById("thumbnail").files);
      console.log(this.files);
    },

    clearPreview() {
      document.getElementById("thumbnail").value = null;
      this.files= '';
    }
  };
}
</script>