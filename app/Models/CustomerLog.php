<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'title',
        'description',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
