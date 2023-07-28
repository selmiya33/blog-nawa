<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slide extends Model
{
    use HasFactory;


    public function getImageLinkAttribute()
    {
        if ($this->image)
        {
            return Storage::disk('public')->url($this->image);
        }
        return "https://www.pexels.com/photo/concentrated-ethnic-man-reading-newspaper-at-home-4288671/";
    }
}
