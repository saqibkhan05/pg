<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PgRoom extends Model
{
    use HasFactory;
    protected $fillable = [
        "pg_id",
        "room_name",
        'occupancy',
        'catogory',
    ];
    public function pg()
    {
        return $this->belongsTo(Pg::class);
    }

    public function beds()
    {
        return $this->hasMany(Bed::class, 'pgroom_id');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
