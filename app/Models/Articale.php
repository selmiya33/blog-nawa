<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articale extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'authore_id',
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

    public function authore(){
        return $this->belongsTo(Authore::class)->withDefault();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    //Accessor getImageUrlAttribute
    public function getImageLinkAttribute()
    {
        if ($this->image) {
            return Storage::disk('public')->url($this->image);
        }
        return "https://www.pexels.com/photo/concentrated-ethnic-man-reading-newspaper-at-home-4288671/";
    }

    //locale scope

    public function scopeStatus(Builder $query, $status): void
    {
        $query->where('status','=', $status);
    }

}
