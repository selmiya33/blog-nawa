<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Authore extends User
{
    use HasFactory;

    protected $fillable = [
        'name',
        'department_id',
        'email',
        'password',
    ];

    public function articales()
    {
        return $this->hasMany(Articale::class);
    }

    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
