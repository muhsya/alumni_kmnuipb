<?php

namespace App\Model;

use App\Model\AdditionSupport\SlugTrait;
use Illuminate\Database\Eloquent\Model;
use App\Model\Education;
use App\Model\Contact;
use App\Model\Department;
use App\Model\EducationPlan;
use App\Model\Suggestion;
use App\Model\Work;

class Alumni extends Model
{
    use SlugTrait;

    protected $source = "full_name";

    protected $fillable = [
            'department_id',
            'full_name',
            'nick_name',
            'slug',
            'born_place',
            'born_date',
            'sex',
            'married_status',
            'pesantren',
            'from_place',
            'now_place',
            'skill',
            'activity'
    ];

    public function contacts()
    {
        return $this->hasMany(Contact::class, 'alumni_id');
    }

    public function educations()
    {
        return $this->hasMany(Education::class, 'alumni_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function business()
    {
        return $this->hasOne(Business::class, 'alumni_id');
    }

    public function plan()
    {
        return $this->hasOne(EducationPlan::class, 'alumni_id');
    }

    public function work()
    {
        return $this->hasOne(Work::class, 'alumni_id');
    }

    public function suggestion()
    {
        return $this->hasOne(Suggestion::class, 'alumni_id');
    }
}
