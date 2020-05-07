@extends('admin.layout')
@section('admin_content')
<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">
            <!-- page start-->
            
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sữa sản phẩm : {{$sanpham->ma_sanpham}}
                            <span class="tools pull-right">
                                <a style="float:right; margin-top: 13px" href="{{Route('sp1')}}" class="btn btn-primary"> Quay lại</a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal "  method="POST"  action="{{Route('sp5',['id' => $sanpham->id])}}" enctype="multipart/form-data" novalidate="novalidate"> {{ csrf_field() }}

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Loại sản phẩm</label>
                                        <div class="col-lg-6">
                                            <select  name="loaisanpham"  class="form-control">

                                            @foreach($loaisanpham as $nhh)
                                                    <option 
                                                    @if($sanpham->id_loai_sp == $nhh->id)
                                                        {{"selected"}}
                                                    @endif

                                                    value="{{$nhh->id}}">{{$nhh->ten_loai}}</option>

                                                 @endforeach 

                                        </select>
                                        </div>
                                    </div>

                                      

                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">Chủ Đề</label>
                                        <div class="col-lg-6">
                                            <select name="chude"  class="form-control">

                                            @foreach($chude as $nhh)
                                                    <option
                                                    @if($sanpham->id_chude == $nhh->id)
                                                        {{"selected"}}
                                                    @endif

                                                    value="{{$nhh->id}}">{{$nhh->ten_chu_de}}</option>
                                                @endforeach 
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Họa Sĩ</label>

                                        <div class="col-lg-6">
                                            <select  name="hoasi"  class="form-control">

                                            @foreach($hoasi as $nhh)
                                                    <option
                                                    @if($sanpham->id_hoasi == $nhh->id)
                                                        {{"selected"}}
                                                    @endif

                                                    value="{{$nhh->id}}">{{$nhh->ten_hoa_si}}</option>
                                                @endforeach 
                                        </select>
                                        </div>

                                    </div>
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3">Tên sản phẩm</label>
                                        <div class="col-lg-6">
                                            <input type="text" name="ten" value="{{$sanpham->ten_sp}}" class="banhbao2 form-control">
                                        </div>
                                    </div>

                                    

                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3">Giá sản phẩm</label>
                                        <div class="col-lg-6">
                                            <input type="text" name="gia" value="{{$sanpham->ctsanpham->gia_sp}}" class="banhbao2 form-control">
                                        </div>
                                    </div>

                                    

                                    

                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3 ">Mô tả ngắn</label>
                                        <div class="col-lg-8">
                                            <textarea id="demo1" value="{{$sanpham->ctsanpham->mo_ta_ngan}}" name="motangan"  class="banhbao2 form-control ">{{$sanpham->ctsanpham->mo_ta_ngan}}</textarea>
                                        </div>
                                    </div>
                                    

                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3 ">Kích cỡ </label>
                                        <div class="col-lg-8">
                                            <textarea id="demo" value="{{$sanpham->ctsanpham->kich_co}}" name="kichco"  class="banhbao2 form-control ">{{$sanpham->ctsanpham->kich_co}}</textarea>
                                        </div>
                                    </div>

                                    
                                    

                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3	">Mô tả</label>
                                        <div class="col-lg-8">
                                            <textarea id="demo2" value="{{$sanpham->ctsanpham->mo_ta}}" name="mota"  class="banhbao2 form-control ">{{$sanpham->ctsanpham->mo_ta}}</textarea>
                                        </div>
                                    </div>


                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3">Hình bìa</label>
                                        <div class="col-lg-6">
                                        
                                        <input type="file" name="image"  class="banhbao2 form-control">   
                                      
                                        

                                        </div>
                                    </div>
                                           


                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Update</button>
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
            </div>

            
            <!-- page end-->
        </div>
</section>

@endsection