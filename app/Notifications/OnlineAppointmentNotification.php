<?php

namespace App\Notifications;


use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OnlineAppointmentNotification extends Notification
{
    protected $request;
    protected $date;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line($this->request->name . ' online muayene randevusu talep ediyor.')
            ->line('Telefonu: ' . $this->request->tel)
            ->line('Talep Ettiği Tarih: ' . $this->request->date)
            ->line('Mesajı: ' . $this->request->body);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'name' => $this->request->name,
            'tel' => $this->request->tel,
            'date' => $this->request->date,
            'body' => $this->request->body,
        ];
    }
}
