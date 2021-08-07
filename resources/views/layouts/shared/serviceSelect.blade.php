<select name="" id="serviceSelect"
    class="bg-white mb-2 py-1 w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline"
    placeholder="Seçiniz" onchange="selected(event)">
    <option value="all">{{ __('Kategoriye Göre Flitrele (Tamamı)') }}</option>
    @foreach ($services as $service)
    @if(count($service->images) >= 5)
    <option value="{{ $service->slug }}" @isset($selected_service) @if ($service->slug ===
        $selected_service->slug) selected @endif
        @endisset
        >{{ ucwords($service->title) }}</option>
    @endif
    @endforeach
</select>