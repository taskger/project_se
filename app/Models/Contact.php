<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $fillable = ['prefix','firstname','lastname','phone','email',
                           'birthday','identification','status','career','address','road','province',
                           'amphoe','tambon','input_zipcode','coverstartdate','brand',
                           'carmodel','caryear','registrationnumber','registrationprovince',
                           'chassisnumber','carpaint'];

}
