<form method="POST" @submit.prevent="submitData" x-data="contactForm()" class="z-20 bg-gray-800 bg-opacity-75 p-4">
    <p class="mb-2 mt-4 text-center mx-2 text-white">{{ __('İletişim Formu') }}</p>
    @csrf
    <input name="local" id="local" type="hidden" value={{ app()->getLocale() }}>
    <div class="mb-2">
        <label class="block text-white text-sm font-bold mb-2" for="name">
            {{ __('İsim') }}
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required :class="{ 'border-red-500': errors.name }" name="name" id="name" type="text" placeholder="{{ __('İsim') }}" x-model="formData.name"
            @keydown="errors.name = false">
        <template x-if="errors.name">
            <p class="text-red-600" x-text="errors.name[0]"></p>
        </template>
    </div>

    <div class="mb-2">
        <label class="block text-white text-sm font-bold mb-2" for="telefon">
            {{ __('Telefon') }}
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" :class="{ 'border-red-500': errors.tel }" name="tel" id="tel" type="tel" placeholder="{{ __('Telefon') }}" @keydown="errors.tel = false"
            x-model="formData.tel" required>
        <template x-if="errors.tel">
            <p class="text-red-600" x-text="errors.tel[0]"></p>
        </template>
    </div>

    <div class="mb-2">
        <label class="block text-white text-sm font-bold mb-2" for="Date">
            {{ __('E-Mail Address') }}
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" :class="{ 'border-red-500': errors.email }" name="email" id="email" type="email" placeholder="{{ __('E-Mail Address') }}" @click="errors.email = false"
            x-model="formData.email">
        <template x-if="errors.email">
            <p class="text-red-600" x-text="errors.email[0]"></p>
        </template>
    </div>

    <div class="mb-2">
        <label class="block text-white text-sm font-bold mb-2" for="body">
            {{ __('Konu') }}
        </label>
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required :class="{ 'border-red-500': errors.body }" name="body" id="body" type="text" placeholder="{{ __('Kısaca probleminizi yazınız.') }}"
            @keydown="errors.body = false" x-model="formData.body"></textarea>
        <template x-if="errors.body">
            <p class="text-red-600" x-text="errors.body[0]"></p>
        </template>
    </div>
    <template x-if="message">
        <p class="text-white bg-green-500 p-2 mb-4 font-bold text-lg rounded" x-text="message"></p>
    </template>
    <div class="flex items-center lg:pb-4 justify-center">
        <button id="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mt-4 px-4 rounded focus:outline-none focus:shadow-outline mb-4 disabled:opacity-50 mr-2" :disabled="loading" type="submit">
            <template x-if="!loading">
                <span>
                    {{ __('Gönder') }}
                </span>
            </template>
            <template x-if="loading">
                <span>
                    {{ __('İşleminiz Yapılıyor') }}
                </span>
            </template>
        </button>
    </div>
</form>

<script>
    function contactForm() {
return {
formData: {
  name: '',
  tel: '',
  body: '',
  email: '',
  local: ''
},
message: false,   
loading: false,
errors: "",
submitData() {
    this.formData.local = document.getElementById('local').value;
    this.message = false;
    this.loading = true;
    this.errors = "";
    axios.post('/appointment', this.formData)
    .then(({data}) => {
        this.message = "Randevu kaydınız başarıyla oluşturuldu. En kısa sürede sizinle iletişime geçeceğiz. Teşekkürler...";
        this.loading = false;
        this.formData = false;
        window.location.href = data.url;
    })
    .catch((error) => {
        this.loading = false;
        this.errors = error.response.data.errors;
    });
}
}
}
</script>