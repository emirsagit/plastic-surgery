<div class="h-screen w-screen flex justify-center items-center fixed top-0 z-50" x-show.transition.duration.300ms="form"
    x-cloak>
    <div class="w-screen h-full lg:w-4/5 bg-white rounded-lg p-4 lg:px-8 overflow-auto" x-data="contactForm()">
        <div class="flex justify-between flex-row">
            <p class="block text-gray-700 font-bold mb-1 text-xl text-center">{{ __('Randevu oluştur') }}
            </p>
            <p @click="$parent.form = false" class="text-red-700 hover:text-red-800 cursor-pointer text-lg font-bold">
                X
            </p>
        </div>
        <p class="block text-blue-700 font-bold mb-1 text-lg">{{ __('Sistem Nasıl Çalışır?') }}
        </p>
        <ul class="list-decimal list-inside mb-4">
            <li>
                {{ __('onlineAppointment.step1') }} <a href="{{ config('admin.tel') }}" class="text-blue-600 underline">
                    {{ config('admin.tel') }} </a>
            </li>
            <li>
                {{ __('onlineAppointment.step2') }}
            </li>
        </ul>
        <form method="POST" @submit.prevent="submitData">
            @csrf
            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    {{ __('İsim') }}
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required
                    :class="{ 'border-red-500': errors.name }" name="name" id="name" type="text"
                    placeholder="{{ __('İsim') }}" x-model="formData.name" @keydown="errors.name = false">
                <template x-if="errors.name">
                    <p class="text-red-600" x-text="errors.name[0]"></p>
                </template>
            </div>

            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="telefon">
                    {{ __('Telefon') }}
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required
                    :class="{ 'border-red-500': errors.tel }" name="tel" id="tel" type="tel"
                    placeholder="{{ __('Telefon') }}" @keydown="errors.tel = false" x-model="formData.tel">
                <template x-if="errors.tel">
                    <p class="text-red-600" x-text="errors.tel[0]"></p>
                </template>
            </div>

            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="Date">
                    {{ __('E-Mail Address') }}
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    :class="{ 'border-red-500': errors.email }" name="email" id="email" type="email"
                    placeholder="{{ __('E-Mail Address') }}" @click="errors.email = false" x-model="formData.email">
                <template x-if="errors.email">
                    <p class="text-red-600" x-text="errors.email[0]"></p>
                </template>
            </div>

            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="Date">
                    {{ __('Randevu Tarihi') }}
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    :class="{ 'border-red-500': errors.date }" name="date" id="date" type="date"
                    placeholder="{{ __('Randevu Tarihi') }}" @click="errors.date = false" x-model="formData.date">
                <template x-if="errors.date">
                    <p class="text-red-600" x-text="errors.date[0]"></p>
                </template>
            </div>

            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
                    {{ __('Konu') }}
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    :class="{ 'border-red-500': errors.body }" name="body" id="body" type="text" required
                    placeholder="{{ __('Kısaca probleminizi yazınız.') }}" @keydown="errors.body = false"
                    x-model="formData.body"></textarea>
                <template x-if="errors.body">
                    <p class="text-red-600" x-text="errors.body[0]"></p>
                </template>
            </div>
            <template x-if="message">
                <p class="text-white bg-green-500 p-2 mb-4 font-bold text-lg rounded" x-text="message"></p>
            </template>
            <div class="flex items-center pb-12 lg:pb-4">
                <button id="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-4 disabled:opacity-50 mr-2"
                    :disabled="loading" type="submit" >
                    <template x-if="!loading">
                        <span>
                            {{ __('Randevu oluştur') }}
                        </span>
                    </template>
                    <template x-if="loading">
                        <span>
                            {{ __('İşleminiz Yapılıyor') }}
                        </span>
                    </template>
                </button>
                <p @click="$parent.form = false"
                    class="bg-gray-100 mb-4 hover:bg-gray-200 text-gray-800 py-2 px-4 cursor-pointer rounded focus:outline-none focus:shadow-outline">
                    {{ __('Geri') }}
                </p>
            </div>
        </form>
    </div>
</div>
<script>
    function contactForm() {
      return {
        formData: {
          name: '',
          tel: '',
          body: '',
          date: '',
        },
        message: false,   
        loading: false,
        errors: "",
		submitData() {
			this.message = false;
            this.loading = true;
            this.errors = "";
            axios.post('/appointment', this.formData)
            .then((response) => {
                this.message = "Randevu kaydınız başarıyla oluşturuldu. En kısa sürede sizi arayacağız. Teşekkürler...";
                this.loading = false;
                this.formData = false;
            })
            .catch((error) => {
                this.loading = false;
                this.errors = error.response.data.errors;
            });
		}
      }
    }
</script>