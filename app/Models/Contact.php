<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'email',
        'mobile',
        'address',
        'map',
        'link1',
        'link2',
        'link3',
        'link4',
        'image',
        'footertext',
    ];
}
