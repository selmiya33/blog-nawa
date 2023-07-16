<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function department(){
        return $this->belongsTo(Department::class)->withDefault();
    }
}
