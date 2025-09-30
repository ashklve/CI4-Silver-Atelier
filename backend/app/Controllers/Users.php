<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index(): string
    {
        return view('user/landing');
    }

    public function login(): string
    {
        return view('user/login');
    }

    public function signup(): string
    {
        return view('user/signup');
    }

    public function terms(): string
    {
        return view('user/terms');
    }

    public function privacy(): string
    {
        return view('user/privacy');
    }
}
