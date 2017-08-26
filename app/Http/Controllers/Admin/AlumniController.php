<?php

namespace App\Http\Controllers\Admin;

use App\Model\Alumni;

class AlumniController extends BaseResourceController
{
    protected $route = "alumnis";
    protected $views = "admins.alumnis";
    protected $url = "no-enter-allowed/alumnis/";

    public function __construct(Alumni $model)
    {
        parent::__construct($model);
    }
}
