<?php

namespace App\Model\AdditionSupport;

use Cviebrock\EloquentSluggable\Sluggable;

trait SlugTrait
{
    use Sluggable;
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => $this->source
            ]
        ];
    }
}
