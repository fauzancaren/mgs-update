<?php

namespace App\Controllers;

class Client extends BaseController
{
    public function index(): string
    { 
        return view('client/home');
    }

    public function project(): string
    {
        return view('client/project');
    }

    public function contact(): string
    {
        return view('client/contact');
    }
}
