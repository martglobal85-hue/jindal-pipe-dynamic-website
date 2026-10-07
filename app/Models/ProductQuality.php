<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class ProductQuality extends Model
{
    use HasSlug;

    protected $table = 'product_qualities';

    protected $fillable = [
        'title',
        'text',
        'image',
    ];
}
