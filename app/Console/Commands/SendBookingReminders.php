<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Booking;
use App\Notifications\BookingReminder;
use Carbon\Carbon;
use App\Models\NotificationLog;


class SendBookingReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-booking-reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reminders for upcoming bookings';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $upcomingBookings = Booking::where('start_date', '>', Carbon::now())
            ->where('start_date', '<=', Carbon::now()->addHour())
            ->get();

        foreach ($upcomingBookings as $booking) {
            $booking->user->notify(new BookingReminder($booking));

            // إضافة تسجيل الإشعار
            $notificationLog = new NotificationLog([
                'email' => $booking->user->email,
                'notification_type' => 'BookingReminder',
                'sent_at' => now(),
            ]);
            $notificationLog->save();
        }

        $this->info('تم إرسال تذكيرات الحجز بنجاح.');
    }
}
