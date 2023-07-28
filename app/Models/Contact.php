<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'department_id',
        'name',
        'email',
        'message',
        'phone',
    ];

    //Relation
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class)->withDefault();
    }
}
