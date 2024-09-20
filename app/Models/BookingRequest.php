<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'bed_id',
        'status',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function bed()
    {
        return $this->belongsTo(Bed::class);
    }
}
