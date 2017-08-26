<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Alumni;
use App\Model\ContactType;

class Contact extends Model
{
    protected $fillable = [
        'alumni_id',
        'contact_type',
        'value'
    ];

    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'alumni_id');
    }

    public function type()
    {
        return $this->belongsTo(ContactType::class, 'contact_type');
    }
}
