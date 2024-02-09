<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('user/home');
    }

    public function biaya()
    {
        return view('user/biaya');
    }
}
