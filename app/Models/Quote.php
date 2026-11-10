<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'quote_number',
        'vehicle_type',
        'trip_type',
        'number_of_passengers',
        'trip_date',
        'trip_time',
        'pickup_address',
        'dropoff_address',
        'full_name',
        'email',
        'message',
    ];

    protected static function booted(): void
    {
        static::creating(function (Quote $quote) {
            if (! empty($quote->quote_number)) {
                return;
            }

            $nextId = (int) static::query()->max('id') + 1;
            $quote->quote_number = 'GAQ-' . (41100 + $nextId);
        });
    }
}
