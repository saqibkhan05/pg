<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    use HasFactory;
    protected $fillable = [
        'pgroom_id',
        'customer_id',
        'cost',
    ];

    public function pgroom()
    {
        return $this->belongsTo(PgRoom::class, 'pgroom_id');
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    public function booking_request()
    {
        return $this->hasMany(BookingRequest::class);
    }
}
