<select name="" id="serviceSelect"
    class="bg-white mb-2 py-1 w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline"
    placeholder="Seçiniz" onchange="selected(event)">
    <option value="all">Kategoriye Göre Flitrele</option>
    @foreach ($services as $service)
    <option value="{{ $service->slug }}" @isset($selected_service) @if ($service->slug ===
        $selected_service->slug) selected @endif
        @endisset
        >{{ ucwords($service->title) }}</option>
    @endforeach
</select>