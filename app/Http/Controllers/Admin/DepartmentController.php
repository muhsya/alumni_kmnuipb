<?php

namespace App\Http\Controllers\Admin;

use App\Model\Department;

class DepartmentController extends BaseResourceController
{
    protected $route = "departments";
    protected $views = "admins.departments";
    protected $url = "no-enter-allowed/departments/";

    public function __construct(Department $model)
    {
        parent::__construct($model);
    }
}
