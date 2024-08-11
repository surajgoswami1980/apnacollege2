<?php

namespace App\Controllers\courses;

use CodeIgniter\RESTful\ResourceController;

class courses extends ResourceController
{
    public function delta()
    {
        return view('delta');
    }
    public function sigma()
    {
        return view('sigma');
    }
    public function cppdsa()
    {
        return view('cpp-dsa');
    }

}