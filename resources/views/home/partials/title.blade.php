<div class="container relative mx-auto lg:mt-12">
    <div class="items-center flex flex-wrap">
        <div class="w-full md:w-8/12 lg:w-6/12 px-4 ml-auto mr-auto text-center bg-gray-700 bg-opacity-50 rounded-lg py-4">
            <h1 class="text-white font-semibold text-4xl lg:text-5xl">
                {{ __('Evde Sağlık Hizmeti') }}
            </h1>
            <p class="mt-4 text-md lg:text-lg text-white">
                {{ __('home.content') }}
            </p>
            <div class="mt-4 mb-0 lg:mb-4 flex flex-row justify-evenly">
                @include('layouts.shared.telephoneAndOnlineLinks')
            </div>
        </div>
    </div>
</div>