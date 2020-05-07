<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TintucController extends Controller
{
    public function list()
	{
		return view('admin.tin-tuc.list');
	}

	public function get_add()
	{
		return view('admin.tin-tuc.add');
	}	
}
