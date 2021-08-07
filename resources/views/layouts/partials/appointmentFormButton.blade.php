<a class="fixed z-30 bottom-12 lg:bottom-24 right-0 bg-green-800 text-white rounded-l-lg p-1 hover:bg-green-900 cursor-pointer select-none transform hover:-translate-y-1 hover:scale-x-110 transition duration-500 ease-in-out flex flex-row items-center outline-none" @click.prevent="form = true"
    href="?randevu-formu">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 lg:mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
    </svg>
    <p class="lg:flex">
        {{ __('Randevu') }}
    </p>
</a>