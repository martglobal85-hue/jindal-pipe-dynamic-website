<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class WhyUs extends Model
{
    use HasSlug;

    protected $table = 'why_uses';

    protected $fillable = [
        'title',
        'subtitle',
        'text',
        'image',
    ];
}
