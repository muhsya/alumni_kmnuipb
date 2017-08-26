<?php

namespace App\Http\Controllers\Admin;

use App\Model\Background;

class BackgroundController extends BaseResourceController
{
    protected $route = "backgrounds";
    protected $views = "admins.backgrounds";
    protected $url = "no-enter-allowed/backgrounds/";

    public function __construct(Background $model)
    {
        parent::__construct($model);
    }
}
