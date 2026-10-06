<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class PageAbout extends Model
{
    use HasSlug;

    protected $table = 'page_abouts';

    protected $fillable = [
        'title',
        'subtitle',
        'text',
        'image',
    ];
}
