<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Yönetim Paneli') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (count($unreadNotifications) != 0)
                    <div class="p-4">
                        <h3 class="text-red-600 text-xl font-bold">Okunmamış Bildirimler</h3>
                        @foreach ($unreadNotifications as $notification)
                        @if ($notification->type === 'App\Notifications\OnlineAppointmentNotification')
                        <div class="m-4 text-gray-800">
                            <h4 class="text-blue-800 font-bold text-lg">Online Muayene Talebi</h4>
                            <p>Gönderen: {{ $notification->data['name'] }}</p>
                            <p>Telefonu: {{ $notification->data['tel'] }}</p>
                            <p>Talep Tarihi: {{ $notification->data['date'] }}</p>
                            <p>Mesajı: {{ $notification->data['body'] }}</p>
                        </div>
                        <hr>
                        @endif
                        @endforeach
                    </div>
                    @endif
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (count($readedNotifications) != 0)
                    <div class="p-4">
                        <h3 class="text-red-600 text-xl font-bold">Daha Önce Görülen Son 50 Bildirim</h3>
                        @foreach ($readedNotifications as $notification)
                        @if ($notification->type === 'App\Notifications\OnlineAppointmentNotification')
                        <div class="m-4 text-gray-800">
                            @dd($notification)
                            <h4 class="text-blue-800 font-bold text-lg">Online Muayene Talebi</h4>
                            <p>Gönderen: {{ $notification->data['name'] }}</p>
                            <p>Telefonu: {{ $notification->data['tel'] }}</p>
                            <p>Talep Tarihi: {{ $notification->data['date'] }}</p>
                            <p>Mesajı: {{ $notification->data['body'] }}</p>
                        </div>
                        <hr>
                        @endif
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>