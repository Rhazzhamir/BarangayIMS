<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login_RegisterController extends BaseController
{
    public function Login()
    {
        return view('LoginPage');
    }
    public function Register()
    {
        return view('RegisterPage');
    }
}
