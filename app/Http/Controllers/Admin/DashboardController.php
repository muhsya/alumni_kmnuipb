<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    protected $views = "admins";

    public function __construct()
    {
        view()->share(['route' => 'index']);
    }

    public function index()
    {
        return view($this->views . '.index');
    }
}
