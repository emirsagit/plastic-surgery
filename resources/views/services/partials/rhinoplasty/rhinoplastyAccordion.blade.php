<h2 class="text-2xl font-bold text-black mt-6 mb-2 border-b-2 border-indigo-700 px-6 text-left" id="faqs">
    Burun Ameliyatı Hakkında Merak Edilenler
</h2>
<ul class="list-none px-6 lg:px-0 pt-4" x-data="{selected:null}">
    @foreach ($faqs as $faq)
    <li>
        <button class="w-full p-4 font-semibold tracking-wide bg-navy-blue text-white flex flex-row justify-between rounded-sm cursor-pointer select-none" @click.prevent="selected !== {{ $faq->id }} ? selected = {{ $faq->id }} : selected = null">
            <h4 class="text-left">
                {{ $faq->question }}
            </h4>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" x-show="{{ $faq->id }} !== selected">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" /></svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" x-show="{{ $faq->id }} === selected">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7" /></svg>
        </button>
        <p class="relative overflow-hidden transition-all max-h-0 duration-500 my-1 mx-4" x-ref="container{{$faq->id}}" x-bind:style="selected === {{ $faq->id }} ? 'max-height: ' + $refs.container{{$faq->id}}.scrollHeight + 'px; margin: 1rem;' : ''">{{ $faq->answer }}</p>
    </li>
    @endforeach
</ul>