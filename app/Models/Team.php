<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasSlug;

    protected $table = 'teams';

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
}
