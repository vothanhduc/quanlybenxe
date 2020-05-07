<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\san_pham;

class TimkiemController extends Controller
{
    public function post_search(Request $rq)
    {
        
        $tukhoa = $rq->tukhoa;

        $sanpham = san_pham::where('ten_sp','like',"%$tukhoa%")->orwhere('ma_sanpham','like',"%$tukhoa%")->get();
        $sanpham2 = san_pham::where('ten_sp','like',"%$tukhoa%")->orwhere('ma_sanpham','like',"%$tukhoa%")->count();

        $collection = collect([$sanpham2]);
        $banhbao = $collection->sum();

        return view('page.tim-kiem.tim-kiem',['sanpham'=>$sanpham,'banhbao'=>$banhbao,'tukhoa'=>$tukhoa]);

    }
}
