<?php

namespace App\Http\Controllers\Admin;

use App\Model\Faculty;

class FacultyController extends BaseResourceController
{
    protected $route = "faculties";
    protected $views = "admins.faculties";
    protected $url = "no-enter-allowed/faculties/";

    public function __construct(Faculty $model)
    {
        parent::__construct($model);
    }
}
