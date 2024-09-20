<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PgAmenity extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cost',
    ];

    public function pgs()
    {
        return $this->belongsToMany(Pg::class, 'pg_pg_amenity', 'pgs_id', 'pg_amenities_id');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
