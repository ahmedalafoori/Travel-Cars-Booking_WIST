<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class BookingReminder extends Notification
{
    use Queueable;

    protected $booking;

    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('تذكير بحجز السيارة')
            ->line('موعد الاستلام: ' . $this->booking->start_date)
            ->line('موعد التسليم: ' . $this->booking->end_date)
            ->action('عرض تفاصيل الحجز', url('/bookings/' . $this->booking->id))
            ->line('شكراً لاستخدامك خدمتنا!');
    }
}
