<form id="form" class="bg-white rounded px-8 pt-6 pb-8 mb-4">
    <p class="block text-gray-700 font-bold mb-2 text-xl text-center">Hangi Hizmetimiz Hakkında Görüşmek
        İstersiniz?</p>
    <br>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            İsim
        </label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="name" id="name" type="text" placeholder="Adınız Soyadınız" required>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="telefon">
            Telefon
        </label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="tel" id="tel" type="tel" placeholder="Telefon Numaranız" required>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            E-Posta
        </label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="email" id="email" type="email" placeholder="E-Posta Adresiniz" required>
    </div>

    {{-- <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="Date">
            Fecha
        </label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="date" id="date" type="date" placeholder="Ingresa tu Fecha de Nacimiento" required>
    </div> --}}

    <div class="mb-4">

        <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
            Mesajınız
        </label>
        <textarea
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="body" id="body" type="text" placeholder="Kısaca Mesajınız" required></textarea>
    </div>
    <div class="flex items-center justify-between">
        <button id="submit"
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="submit">
            İletişime Geçin
        </button>
    </div>
</form>