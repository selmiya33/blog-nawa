<?php

namespace App\Models;

use App\Models\Authore;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = [
        'authore_id',
        'articale_id',
        'comment_id',
        'reply',
    ];

    public function comment(){
        return $this->belongsTo(Comment::class)->withDefault();
    }

    public function articale(){
        return $this->belongsTo(Articale::class)->withDefault();
    }

    public function authore()
    {
        return $this->belongsTo(Authore::class);
    }
}
