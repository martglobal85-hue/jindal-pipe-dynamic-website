<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasSlug;

    protected $table = 'galleries';

    protected $fillable = [
        'title',
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

    /** product_id = NULL means "General Website Gallery". */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function isGeneral(): bool
    {
        return $this->product_id === null;
    }
}
