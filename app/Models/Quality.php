<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class Quality extends Model
{
    use HasSlug;

    protected $table = 'qualities';

    protected $fillable = [
        'title',
        'text',
        'image',
    ];
}
