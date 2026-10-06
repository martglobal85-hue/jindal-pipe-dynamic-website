<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class HomeAbout extends Model
{
    use HasSlug;

    protected $table = 'home_abouts';

    protected $fillable = [
        'title',
        'subtitle',
        'text',
        'image',
    ];
}
