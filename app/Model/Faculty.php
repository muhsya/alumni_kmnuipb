<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\AdditionSupport\SlugTrait;

class Faculty extends Model
{
    use SlugTrait;

    protected $source = 'name';

    protected $fillable = [
        'name',
        'code',
        'slug',
        'ipb'
    ];

    public function departments()
    {
        return $this->hasMany(Department::class, 'faculty_id');
    }
}
