<a href="tel:{{ Config::get('admin.tel') }}"
    class="bg-blue-500 text-white active:bg-blue-100 text-lg font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md hover:bg-blue-700 outline-none focus:outline-none cursor-pointer flex flex-row select-none transform hover:-translate-y-1 hover:scale-110 transition duration-500 ease-in-out">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
    </svg>
    {{ Config::get('admin.tel') }}
</a>
<p
    class="hidden md:flex bg-green-500 text-white active:bg-green-100 text-lg font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md hover:bg-green-700 outline-none focus:outline-none cursor-pointer select-none transform hover:-translate-y-1 hover:scale-110 transition duration-500 ease-in-out text-uppercase" @click="form = true">
    {{ __('Online Muayene') }}
</p>