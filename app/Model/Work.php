<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Alumni;

class Work extends Model
{
    protected $fillable = [
        'alumni_id',
        'work',
        'field',
        'place'
    ];

    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'alumni_id');
    }
}
