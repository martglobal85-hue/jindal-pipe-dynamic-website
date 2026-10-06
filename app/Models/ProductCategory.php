<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasSlug;

    protected $table = 'product_categories';

    protected $fillable = [
        'title',
        'text',
        'image',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
