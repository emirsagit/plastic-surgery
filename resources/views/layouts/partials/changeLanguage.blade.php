<div class="fixed z-20 top-32 right-0" x-data="{changeLanguage : false}">
    <p class="bg-blue-600 text-white rounded-l-xl p-3 hover:bg-blue-800 cursor-pointer select-none flex flex-row items-center uppercase transition duration-500 ease-in-out"
        @click="changeLanguage = !changeLanguage">
        {{ app()->getLocale() }}
    </p>
    <div class="bg-gray-300 text-gray-800 rounded-l-xl p-3"
        x-show.duration.700ms.transition.origin.right.left="changeLanguage">
        @foreach (config('admin.languages') as $language)
        @if ($language !== app()->getLocale() )
        <a href="{{ '/' . $language }}" @click="changeLanguage = false"
            class="cursor-pointer select-none transition duration-500 ease-in-out flex flex-row items-center uppercase">{{ $language }}</a>
        {{-- arapça eklediğinde classa aşağıdakini ekle --}}
        {{-- @if ($loop->last) pb-0 @else pb-0 @endif --}}
        @endif
        @endforeach
    </div>
</div>