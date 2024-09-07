<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use App\Models\Car;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;

class StatsOverview extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        $trendingUpIcon = 'heroicon-m-arrow-trending-up';
        $trendingDownIcon = 'heroicon-m-arrow-trending-down';

        return [
            Stat::make('Current Bookings', Booking::where('status', 'Confirmed')->count())
                ->description('Number of confirmed bookings')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success')
                ->chart($this->getBookingTrend())
                ->extraAttributes([
                    'class' => 'cursor-pointer hover:bg-gray-50 transition',
                ]),

            Stat::make('Total Revenue', '$' . number_format(Booking::sum('total_price'), 2))
                ->description($this->getRevenueChange() . '% from last month')
                ->descriptionIcon($this->getRevenueChange() > 0 ? $trendingUpIcon : $trendingDownIcon)
                ->color('warning')
                ->chart($this->getRevenueTrend()),

            Stat::make('Most Popular Car', Car::withCount('bookings')->orderByDesc('bookings_count')->first()->name)
                ->description('Most frequently booked vehicle')
                ->descriptionIcon('heroicon-m-fire')
                ->color('primary')
                ->extraAttributes([
                    'class' => 'ring-2 ring-primary-500',
                ]),

            Stat::make('Average Booking Value', '$' . number_format(Booking::avg('total_price'), 2))
                ->description('Average value per booking')
                ->descriptionIcon('heroicon-m-calculator')
                ->color('info')
                ->chart($this->getAverageBookingTrend()),
        ];
    }

    protected function getBookingTrend(): array
    {
        return Booking::select(DB::raw('COUNT(*) as count'))
            ->where('created_at', '>=', now()->subDays(7))
            ->groupBy(DB::raw('Date(created_at)'))
            ->pluck('count')
            ->toArray();
    }

    protected function getRevenueTrend(): array
    {
        return Booking::select(DB::raw('SUM(total_price) as total'))
            ->where('created_at', '>=', now()->subDays(7))
            ->groupBy(DB::raw('Date(created_at)'))
            ->pluck('total')
            ->toArray();
    }

    protected function getAverageBookingTrend(): array
    {
        return Booking::select(DB::raw('AVG(total_price) as average'))
            ->where('created_at', '>=', now()->subDays(7))
            ->groupBy(DB::raw('Date(created_at)'))
            ->pluck('average')
            ->toArray();
    }

    protected function getRevenueChange(): float
    {
        $lastMonth = Booking::whereMonth('created_at', '=', now()->subMonth()->month)->sum('total_price');
        $thisMonth = Booking::whereMonth('created_at', '=', now()->month)->sum('total_price');

        if ($lastMonth == 0) return 100;
        return round((($thisMonth - $lastMonth) / $lastMonth) * 100, 2);
    }
}
