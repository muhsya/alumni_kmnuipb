<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Alumni;

class EducationPlan extends Model
{
    protected $fillable = [
        'alumni_id',
        'type',
        'level',
        'place',
        'country',
        'university',
        'field'
    ];
    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'alumni_id');
    }
}
