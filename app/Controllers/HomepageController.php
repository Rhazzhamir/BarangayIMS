<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class HomepageController extends BaseController
{
    public function Homepage()
    {
        return view('Homepage');
    }
}
