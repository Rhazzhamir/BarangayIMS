<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LockScreenController extends BaseController
{
    public function create()
    {
        return view('lockscreen');
    }
}
