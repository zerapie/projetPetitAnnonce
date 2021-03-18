<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
        echo view('common/Header');
        echo view('index');
        echo view('common/Footer');
	}
}

