<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['file_path'];

    // Add an accessor to get the full URL of the image


    public function imageable()
    {
        return $this->morphTo();
    }

    public function getFilePathAttribute($value)
    {
        return url(Storage::url($value)); // 'path' is the column where the image file name or path is stored
    }
}
