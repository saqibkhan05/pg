<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pg extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'location',
        'pincode',
        'type',
    ];

    public function rooms()
    {
        return $this->hasMany(PgRoom::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(PgAmenity::class, 'pg_pg_amenity', 'pgs_id', 'pg_amenities_id');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

}
