<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\san_pham;
use App\Models\loai_san_pham;
use App\Models\hoa_si;
use App\Models\chu_de;




class PageController extends Controller
{



    public function home(){


      return view('page.index');
    }

   
    


   
}
