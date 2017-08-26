<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Alumni;

class Business extends Model
{
    protected $fillable = [
        'alumni_id',
        'sector',
        'position',
        'address',
        'postal_code',
        'omzet'
    ];
    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'alumni_id');
    }
}
