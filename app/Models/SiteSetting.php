<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'icon'];

        //Accessor getImageUrlAttribute
        public function getImageIconAttribute()
        {
            if ($this->icon) {
                return Storage::disk('public')->url($this->icon);
            }
            return "https://th.bing.com/th/id/OIP.MH5pBsJR2Ru2ICs91HNtegHaHa?pid=ImgDet&rs=1";
        }
}
