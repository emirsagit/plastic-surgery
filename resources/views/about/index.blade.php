@extends('layouts.app')

@section('content')
<main class="min-h-screen mb-32">
    <div class="bg-gradient-to-b from-blue-500 bg-contain bg-no-repeat">
        <div class="pt-24">
            <div class="flex flex-row justify-evenly mb-8 mt-4">
                @include('layouts.shared.telephoneAndOnlineLinks')
            </div>
            <h1 class="text-4xl text-gray-800 font-extrabold text-center">
               Sayfamız Yapım Aşamasındadır. Lütfen daha sonra ziyaret ediniz...
            </h1>
        </div>
    </div>
</main>
@endsection