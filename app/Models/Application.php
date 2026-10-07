<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasSlug;

    protected $table = 'applications';

    protected $fillable = [
        'title',
        'text',
        'image',
    ];
}
