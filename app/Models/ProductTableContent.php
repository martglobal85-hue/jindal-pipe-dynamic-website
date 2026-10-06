<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class ProductTableContent extends Model
{
    use HasSlug;

    protected $table = 'product_table_contents';

    protected $fillable = [
        'title',
        'text',
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
