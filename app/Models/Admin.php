<?php

namespace App\Models;

use App\Models\Contact;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends User
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'image',
        'email',
        'password',
    ];

    public function contacts(){
        return $this->hasMany(Contact::class);
    }
}
