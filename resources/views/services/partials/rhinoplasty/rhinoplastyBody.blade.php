<article class="lg:px-4 lg:w-8/12 text-justify pb-10">
    <div class="px-6 lg:px-0 ck-editor__editable" id="pharagraph">
        <div class="flex flex-row justify-between mb-2">
            @if ($images->count())
            <a href="#galeri" class="faqs text-white hover:bg-blue-800 bg-navy-blue lg:px-6 lg:py-2 px-3 py-1 font-semibold rounded lg:text-lg text-md" aria-label="Galeri">{{ __('Galeri') }}
            </a>
            @endif
            <a href="#faqs" class="faqs text-white hover:bg-blue-800 bg-navy-blue lg:px-6 lg:py-2 px-2 py-1 font-semibold rounded lg:text-lg text-md" aria-label="Sık sorulan sorular">{{ __('Sık Sorulan Sorular') }}
            </a>
        </div>
        {!! $service->body !!}
    </div>
    @include("services.partials.rhinoplasty.rhinoplastyAccordion")
</article>