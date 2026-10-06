<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasSlug;

    protected $table = 'products';

    protected $fillable = [
        'title',
        'subtitle',
        'text',
        'image',
        'category_id',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function contents()
    {
        return $this->hasMany(ProductContent::class);
    }

    public function tableContents()
    {
        return $this->hasMany(ProductTableContent::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
