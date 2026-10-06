<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class ProductContent extends Model
{
    use HasSlug;

    protected $table = 'product_contents';

    protected $fillable = [
        'title',
        'text',
        'image',
        'product_id',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
