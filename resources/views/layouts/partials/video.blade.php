<div class="fixed top-0 left-0 right-0 bottom-0 z-50 hidden" id="video-section">
    <div
        class="absolute top-0 left-0 right-0 bottom-0 bg-gray-600 bg-opacity-90 flex flex-col justify-center items-center">
        <button class="text-white absolute top-5 right-5 hover:text-gray-300" id="video-close">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div id="video-wrapper" class="w-full h-1/3 lg:h-2/3 lg:w-3/4 z-30">
        </div>
        <div class="absolute left-auto top-auto z-20 text-gray-100">
            {{ __("Yukleniyor...") }}
        </div>
        <button class="text-white uppercase underline hover:text-gray-300 mt-4" id="video-back">
            {{ __("Geri") }}
        </button>
    </div>
</div>