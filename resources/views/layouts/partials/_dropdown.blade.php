<div x-data="{ open: false }">
  {{-- :class="{ 'lg:bg-indigo-400': open }" --}}
  <div @mouseover="open = true" @click="open = true" @mouseover.away="open = false" class="flex flex-col justify-center lg:items-center">
    @if(! $service->parent)
    <li class="flex items-center rounded pl-4 lg:pl-0">
      <a class="text-white py-2 lg:py-3 flex items-center text-sm lg:text-md uppercase font-bold cursor-pointer rounded z-40 px-3" href="{{ route('services.show', app()->getLocale() == 'tr' ? 'burun-estetigi' : 'rhinoplasty-nose-job') }}" @click.prevent>{{ $service->title }}
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </a>
    </li>
    @endif
    <ul x-show.transition="open" @click.away="open = false" x-cloak class="flex flex-col bg-white">

      <li class="flex flex-row lg:my-1 items-center hover:bg-gray-600 hover:text-gray-100 text-gray-700 lg:mx-2 px-6 lg:px-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 lg:h-5 lg:w-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
        </svg>
        <a class="py-1 lg:w-full flex items-center text-sm font-bold uppercase hover:text-gray-100" href="{{ $service->path() }}">{{ $service->title }}</a>
      </li>

      @foreach ($service->children as $service)
      <li class="flex flex-row lg:my-1 items-center hover:bg-gray-600 hover:text-gray-100 text-gray-700 lg:mx-2 px-6 lg:px-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 lg:h-5 lg:w-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
        </svg>
        <a class="py-1 lg:w-full flex items-center text-sm font-bold uppercase hover:text-gray-100" href="{{ $service->path() }}">{{ $service->title }}</a>
      </li>
      @endforeach
    </ul>
  </div>
</div>