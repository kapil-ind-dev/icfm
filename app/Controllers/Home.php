<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct(){
    }
    public function index()
    {
        echo view('template/common/header');
        echo view('template/pages/index');
        echo view('template/common/footer');
    }
}
