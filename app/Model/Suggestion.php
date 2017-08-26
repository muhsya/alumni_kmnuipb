<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Alumni;

class Suggestion extends Model
{
    protected $fillable = [
        'alumni_id',
        'content'
    ];

    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'alumni_id');
    }
}
