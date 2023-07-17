<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articale extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'user_id',
        'image',
        'title',
        'description',
        'conclusion',
    ];

    //Relation
    public function department()
    {
        return $this->belongsTo(Department::class)->withDefault();
    }

    public function user(){
        return $this->belongsTo(User::class)->withDefault();
    }

    //Accessor getImageUrlAttribute
    public function getImageLinkAttribute()
    {
        if ($this->image) {
            return Storage::disk('public')->url($this->image);
        }
        return "https://www.pexels.com/photo/concentrated-ethnic-man-reading-newspaper-at-home-4288671/";
    }
}
