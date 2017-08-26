<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\AdditionSupport\SlugTrait;
use App\Model\Contact;

class ContactType extends Model
{
    use SlugTrait;

    protected $source = 'name';

    protected $fillable = [
        'name',
        'slug'
    ];

    public function contacts()
    {
        return $this->hasMany(Contact::class, 'contact_type');
    }
}
