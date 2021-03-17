<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function mapage($home = 'home')
	{
		echo "david";
	}
	public function mapage2($home = 'home', $var = 3)
	{
		echo $var." - perasie - ".$home;
	}
}

