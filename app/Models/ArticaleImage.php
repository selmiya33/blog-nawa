<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticaleImage extends Model
{
    use HasFactory;


    protected $fillable =['articale_id','image'];

    //Relations
    public function articale()
    {
        $this->belongsTo(Articale::class)->withDefault();
    }

    //Accessor getImageUrlAttribute
    public function getImageLinkAttribute()
    {
        if ($this->image) {
            return Storage::disk('public')->url($this->image);
        }
        return "https://images.pexels.com/photos/4288671/pexels-photo-4288671.jpeg";
    }
}
