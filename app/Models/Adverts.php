<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adverts extends Model
{
    use HasFactory;
        protected $table = 'Adverts';
        protected $fillable = [
        'img', 'text','img_image'
    ];
}
