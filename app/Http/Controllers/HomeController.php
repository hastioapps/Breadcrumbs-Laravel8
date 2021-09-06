<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {        
        parent::__construct();
    }

    public function home(Request $request)
    {
        $this->breadcrumb->add('Selamat Datang', '/');
	$this->breadcrumb->add('Home', '/home');
	$data['breadcrumbs'] = $this->breadcrumb->render();
        return view('home',$data);
    }
}
