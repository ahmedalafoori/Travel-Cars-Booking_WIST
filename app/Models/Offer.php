<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'discount_percentage', 'start_date', 'end_date'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
