<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Home');
    }
    public function test()
    {
        return view('test');
    }
    public function error404()
    {
        return view('error404');
    }
    
}
