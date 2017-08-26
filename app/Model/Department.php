<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\AdditionSupport\SlugTrait;
use App\Model\Faculty;
use App\Model\Alumni;

class Department extends Model
{
    use SlugTrait;

    protected $source = 'name';

    protected $fillable = [
        'faculty_id',
        'name',
        'code',
        'slug'
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id');
    }

    public function students()
    {
        return $this->hasMany(Alumni::class, 'department_id');
    }

    public function getFaculties($ipb = true)
    {
        $faculties = Faculty::where('ipb', $ipb)->pluck('name', 'id');
        return $faculties;
    }
}
