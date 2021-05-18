<div x-data="{ open: false }" class="flex flex-col" :class="{ 'lg:bg-indigo-400': open }">
  <a class="lg:text-white text-gray-800 px-3 py-4 lg:py-2 flex items-center text-sm lg:text-lg uppercase font-bold cursor-pointer lg:hover:bg-indigo-400 rounded transition duration-500 ease-in-out"
    @click="open = true" @mouseover="open = true">{{ trans('routes.services') }}
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
    </svg>

  </a>
  <ul x-show.transition="open" @click.away="open = false" @mouseover.away="open = false" x-cloak
    class="flex flex-col lg:absolute top-0 lg:mt-16 lg:bg-indigo-400 pl-4 lg:pl-0">
    @foreach ($services as $service)
    <li class="flex items-center lg:hover:bg-indigo-500 rounded transition duration-200 ease-in-out">
      <a class="lg:text-white text-gray-800 px-3 py-2 lg:py-2 flex items-center text-sm font-bold" href="{{ $service->path() }}">{{ $service->title }}</a>
    </li>
    @endforeach
  </ul>
</div>