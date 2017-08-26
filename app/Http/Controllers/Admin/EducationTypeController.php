<?php

namespace App\Http\Controllers\Admin;

use App\Model\EducationType;

class EducationTypeController extends BaseResourceController
{
    protected $route = "education-types";
    protected $views = "admins.education-types";
    protected $url = "no-enter-allowed/education-types/";

    public function __construct(EducationType $model)
    {
        parent::__construct($model);
    }
}
