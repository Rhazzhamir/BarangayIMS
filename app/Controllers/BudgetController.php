<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BudgetController extends BaseController
{
    public function create()
    {
        return view('budget');
    }
}
