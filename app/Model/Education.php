<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Alumni;
use App\Model\EducationType;

class Education extends Model
{
    protected $table = 'education';

    protected $fillable = [
        'alumni_id',
        'education_type',
        'graduate'
    ];

    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'alumni_id');
    }

    public function type()
    {
        return $this->belongsTo(EducationType::class, 'education_type');
    }
}
