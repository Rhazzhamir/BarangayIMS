<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserDashboardController extends BaseController
{
    public function index()
    {
        return view('UserDashboard');
    }
}
