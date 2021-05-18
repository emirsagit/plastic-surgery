<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-2">
            {{ __('Yeni Hizmet Oluştur') }}
        </h2>
        <a href="{{ route('admin.services.index') }}" class="p-1 bg-gray-200 rounded">Geri</a>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data"
                    class="p-6 bg-white border-b border-gray-200">
                    @csrf
                    <div class="w-full">
                        <h2 class="text-blue-600 text-xl mb-4">Not: Önce Yazının Dilini Seçiniz. Dil değiştirildiğinde
                            içerik sıfırlanabilir.</h2>
                        <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Dil</label>
                        <select name="language" id="selectedLanguage" onchange="location.reload()"
                            class="bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring @error('language') border-red-500 @enderror"
                            value="{{ old('language') }}">
                            <option value="tr" @if (old('language')==="tr" ) selected @endif>Türkçe</option>
                            <option value="en" @if (old('language')==="en" ) selected @endif>İngilizce</option>
                            <option value="ar" @if (old('language')==="ar" ) selected @endif>Arapça</option>
                        </select>
                    </div>
                    @error('language')
                    <div class="text-red-600">{{ $message }}</div>
                    @enderror

                    <div class="w-full mt-4">
                        <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Başlık</label>
                        <input name="title"
                            class="bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring @error('title') border-red-500 @enderror"
                            type="text" value="{{ old('title') }}">
                    </div>
                    @error('title')
                    <div class="text-red-600">{{ $message }}</div>
                    @enderror

                    <div class="mt-4 w-full">
                        <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Kısa Özet</label>
                        <textarea name="excerpt"
                            class="bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full h-30 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring @error('excerpt') border-red-500 @enderror">{{ old('excerpt') }}</textarea>
                    </div>
                    @error('excerpt')
                    <div class="text-red-600">{{ $message }}</div>
                    @enderror

                    <div class="mt-4 w-full">
                        <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">İçerik</label>
                        <textarea name="body" id="editor"
                            class="bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full h-30 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring @error('body') border-red-500 @enderror">{{ old('body') }}</textarea>
                    </div>
                    @error('body')
                    <div class="text-red-600">{{ $message }}</div>
                    @enderror


                    <div class="w-full border mt-4">
                        <div class="w-full max-w-2xl p-8 mx-auto bg-white rounded-lg">
                            <div class="" x-data="imageData()">
                                <div x-show="previewUrl == ''">
                                    <p class="text-center uppercase text-bold">
                                        <label for="thumbnail" class="cursor-pointer">
                                            Fotoğraf Yükle (En Fazla 300kb, en iyi görüntü için 16/9)
                                        </label>
                                        <input type="file" name="image" id="thumbnail" class="hidden"
                                            @change="updatePreview()">
                                    </p>
                                </div>
                                <div x-show="previewUrl !== ''" class="flex flex-col items-center">
                                    <img :src="previewUrl" alt="" class="rounded w-32 h-32">
                                    <div>
                                        <button type="button" class="" @click="clearPreview()">Sil</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @error('image')
                    <div class="text-red-600">{{ $message }}</div>
                    @enderror

                    <div class="w-full mt-4">
                        <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Alt Etiketi (Foto
                            Adı)</label>
                        <input name="alt"
                            class="bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring @error('alt') border-red-500 @enderror"
                            type="text" value="{{ old('alt') }}">
                    </div>
                    @error('alt')
                    <div class="text-red-600">{{ $message }}</div>
                    @enderror

                    <div class="w-full mt-4">
                        <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Youtube Video
                            Linki (Paylaş->Kopyala)</label>
                        <input name="video"
                            class="bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring @error('video') border-red-500 @enderror"
                            type="text" value="{{ old('video') }}">
                    </div>
                    @error('video')
                    <div class="text-red-600">{{ $message }}</div>
                    @enderror

                    <div class="w-full mt-4">
                        <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Seo Title (60
                            Karakter Başlık)</label>
                        <input name="seo_title"
                            class="bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring @error('seo_title') border-red-500 @enderror"
                            type="text" value="{{ old('seo_title') }}">
                    </div>
                    @error('seo_title')
                    <div class="text-red-600">{{ $message }}</div>
                    @enderror

                    <div class="w-full mt-4">
                        <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Seo Description
                            (160 Karakter Tanım)</label>
                        <input name="seo_description"
                            class="bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring @error('seo_description') border-red-500 @enderror"
                            type="text" value="{{ old('seo_description') }}">
                    </div>
                    @error('seo_description')
                    <div class="text-red-600">{{ $message }}</div>
                    @enderror

                    <div class="w-full mt-4">
                        <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Yazı Türkçe
                            İçeriğin Tercümesi İse SEO ayarları için ilgili içeriği seçin</label>
                        <select name="parent"
                            class="bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring @error('language') border-red-500 @enderror"
                            value="{{ old('parent') }}">
                            <option value="" selected>Seçiniz</option>
                            @foreach ($parents as $parent)
                            <option value="{{ $parent->slug }}" @if (old('parent')=== $parent->slug ) selected @endif>{{ $parent->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('parent')
                    <div class="text-red-600">{{ $message }}</div>
                    @enderror

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
    previewUrl: "",
    updatePreview() {
      var reader,
        files = document.getElementById("thumbnail").files;

      reader = new FileReader();

      reader.onload = e => {
        this.previewUrl = e.target.result;
      };

      reader.readAsDataURL(files[0]);
    },
    clearPreview() {
      document.getElementById("thumbnail").value = null;
      this.previewUrl = "";
    }
  };
}
</script>
<script src="/js/ckeditor5-build-classic/ckeditor.js"></script>
<script>
    ClassicEditor
     .create( document.querySelector( '#editor' ), {
        language: document.getElementById("selectedLanguage").value
    } )
    .catch( error => {
        console.log( error );
    } );

</script>