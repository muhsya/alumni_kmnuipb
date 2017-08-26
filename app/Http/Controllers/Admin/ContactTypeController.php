<?php

namespace App\Http\Controllers\Admin;
use App\Model\ContactType;

class ContactTypeController extends BaseResourceController
{
    protected $route = "contact-types";
    protected $views = "admins.contact-types";
    protected $url = "no-enter-allowed/contact-types/";

    public function __construct(ContactType $model)
    {
        parent::__construct($model);
    }
}
