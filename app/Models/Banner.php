<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasSlug;

    protected $table = 'banners';

    protected $fillable = [
        'title',
        'subtitle',
        'text',
        'image',
    ];
}
