<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];


    //Relations
    public function articales(){
        return $this->hasMany(Articale::class);
    }

    public function authores()
    {
        return $this->hasMany(Authore::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }
    //Accessor getImageUrlAttribute
    public function getImageLinkAttribute()
    {
        if($this->image){
            return Storage::disk('public')->url($this->image);
        }
        return "https://www.pexels.com/photo/concentrated-ethnic-man-reading-newspaper-at-home-4288671/";

    }

}
