<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\AdditionSupport\SlugTrait;
use App\Model\Education;

class EducationType extends Model
{
    use SlugTrait;

    protected $source = 'name';

    protected $fillable = [
        'name',
        'slug'
    ];

    public function educations()
    {
        return $this->hasMany(Education::class, 'education_type');
    }
}
