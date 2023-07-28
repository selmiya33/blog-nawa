<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;


    protected $table = "account_authores";
    protected $fillable= [
        'authore_id',
        'platform',
        'Link',
        'icon',
    ];


    // Assuming there's a "accounts" pivot table to store the many-to-many relationship.
    public function authors()
    {
        return $this->belongsTo(Author::class);
    }
}
