<div class="lg:px-4 lg:w-8/12 text-justify">
    @if($service->image)
    <img src="{{ $service->image }}" alt="{{ $service->alt }}" width="1080" height="1080"
        class="shadow-lg rounded">
    @endif

    <div class="px-6 lg:px-0 ck-editor__editable mt-4" id="pharagraph">
        <a href="#galeri"
            class="text-underline text-blue-900 hover:text-blue-800 italic bg-gray-100 p-2 rounded text-lg">{{ ucwords($service->title) . ' ' . __('Fotoğraf Galerisi') }}
        </a>
        {!! $service->body !!}
    </div>
</div>