<div class="flex flex-col lg:flex-row w-full justify-center flex-wrap">
    <?php 
    $i = 0; 
    $colors = config("admin.colors")
    ?>
    @foreach ($services as $service)
    @if(! $service->parent)
    <div class="lg:w-1/4 md:w1/2 bg-{{ $colors[$i] }} pb-6">
        <a href="{{ route('services.show', $service) }}" class="cursor-pointer">
            @if($service->image)
            <img src="{{ $service->image }}" alt="{{ $service->alt }}" width="1080" height="1080" loading="lazy">
            @endif
            <div class="bg-{{ $colors[$i] }} h-5 w-full lg:-mt-8 -mt-5 opacity-40 transform z-10 
        @if($i % 2 == 0) rotate-3 @else -rotate-3 @endif"></div>
            <div
                class="bg-{{ $colors[$i] }} h-5 w-full transform z-10 @if($i % 2 == 0) rotate-3 @else -rotate-3 @endif">
            </div>
            <h3
                class="pl-3 py-2 pr-1 font-bold text-gray-100 capitalize hover:text-gray-800 transition duration-500 ease-in-out">
                {{ $service->title }}</h3>
        </a>
        <div class="flex flex-col divide-y divide-light-blue-400 px-3">
            @foreach ($service->children as $child)
            <a href="{{ route('services.show', $child) }}"
                class="py-1 text-sm text-gray-100 hover:text-gray-800 transition duration-500 ease-in-out">{{ $child->title }}</a>
            @endforeach
        </div>
    </div>
    @if ($i < (count($colors) - 1)) <?php $i++; ?> @else <?php $i=0; ?> @endif @endif @endforeach </div>