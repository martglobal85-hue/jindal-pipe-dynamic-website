<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class Approach extends Model
{
    use HasSlug;

    protected $table = 'approaches';

    protected $fillable = [
        'visiontitle',
        'visiontext',
        'visionimage',
        'missiontitle',
        'missiontext',
        'missionimage',
        'ourcompanytitle',
        'ourcompanytext',
        'ourcompanyimage',
    ];

    public function getSlugSourceColumn(): string
    {
        return 'visiontitle';
    }
}
