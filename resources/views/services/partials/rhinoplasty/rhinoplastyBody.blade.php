<div class="lg:px-4 lg:w-8/12 text-justify">
    <div class="px-6 lg:px-0 ck-editor__editable" id="pharagraph">

        @if ($images->count())
        <a href="#galeri"
            class="underline text-blue-900 hover:text-blue-800 italic bg-gray-100 p-2 rounded text-lg">{{ __('Fotoğraf Galerisi') }}
        </a>
        @endif
        {!! $service->body !!}
    </div>
</div>