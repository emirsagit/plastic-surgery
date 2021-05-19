<div class="splide w-full h-full text-gray-800" id="splide">
    <div class="splide__track">
        <div class="splide__list">
            <div class="splide__slide m-auto flex justify-center items-end pb-12">
               <img src="/img/slider/slider3.jpg" alt="">
               <a class="p-2 bg-gray-700 bg-opacity-50 text-gray-200 rounded" href="#">
                   <p class="font-bold">Rinoplasti Sonrası 6. Ay <span class="bg-red-500 text-xs rounded px-2 py-1">Daha Fazla</span></p>
               </a>
            </div>
            <div class="splide__slide m-auto flex justify-center items-end pb-12">
                <img src="/img/slider/slider2.jpg" alt="">
                <a class="p-2 bg-gray-700 bg-opacity-50 text-gray-200 rounded" href="#">
                    <p class="font-bold">Dudak Dolgusu <span class="bg-red-500 text-xs rounded px-2 py-1">Daha Fazla</span></p>
                </a>
             </div>
             <div class="splide__slide m-auto flex justify-center items-end pb-12">
                <img src="/img/slider/slider1.jpg" alt="">
                <a class="p-2 bg-gray-700 bg-opacity-50 text-gray-200 rounded" href="#">
                    <p class="font-bold">Burun Dolgusu <span class="bg-red-500  text-xs rounded px-2 py-1">Daha Fazla</span></p>
                </a>
             </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener( 'DOMContentLoaded', function () {
		new Splide( '.splide', {
	type   : 'loop',
	perPage: 3,
    gap: '1em',
    cover  : true,
    heightRatio: 0.3,
    breakpoints: {
		1024: {
			perPage: 1,
            heightRatio: 1,
		},
	}
} 
         ).mount();
	});
</script>