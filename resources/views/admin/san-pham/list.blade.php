@extends('admin.layout')
@section('admin_content')

	<section id="main-content">
		<section class="wrapper">
			<div class="table-agile-info">

				<div class="panel panel-default">
					
				    <div class="panel-heading">
					    Sản phẩm

					<a style="float:right; margin-top: 13px" href="{{Route('sp2')}}" class="btn btn-primary">+ ADD</a>

					</div>
	    		<div>
	      <table class="table" ui-jq="footable" ui-options='{
		        "paging": {
		          "enabled": true
		        },
		        "filtering": {
		          "enabled": true
		        },
		        "sorting": {
		          "enabled": true
		        }}'>
	        <thead>
	          <tr>
	            <th>ID</th>
				        <th>Hình ảnh</th>   
						<th>Tên sản phẩm</th>
						<th>Mã sản phẩm</th>
						<th>Loại sản phẩm</th>
						<th>Chủ đề</th>
						<th>Họa sĩ</th>

						<th>Action</th>
	          </tr>
	        </thead>

	        <div style="width: 20%; margin-left: 78%; margin-top: 10px;">
	        	
	        	<div class="row">
					<input type="text" name="timkiem2" id="timkiem2" class="form-control" placeholder="ádsadsd" />
				</div>	

			</div>

	        <tbody>
	          	@foreach($sanpham as $tg)
				  <tr>
					<td style="padding-top: 40px;"> {{$tg->id}}</td>
					<!-- // lấy ra file hình ở thư mục upload -->
					
					<td>
						<img  width="80px" height="70px" src="{{asset('public/admin/upload/san-pham/')}}/{{$tg->ctsanpham->hinh_anh}}">
					</td>
                    
					<td style="padding-top: 40px;">{{$tg->ten_sp}}</td>
					<td style="padding-top: 40px;">{{$tg->ma_sanpham}}</td>
					<td style="padding-top: 40px;">{{$tg->loaisanpham->ten_loai}}</td>
					<td style="padding-top: 40px;">{{$tg->chude->ten_chu_de}}</td>
					<td style="padding-top: 40px;" >{{$tg->hoasi->ten_hoa_si}}</td>


					<td style="padding-top: 40px;" colspan="2">
						<a href="{{Route('sp4',['id' => $tg->id])}}" style="padding-right: 20px;"><i class="fa fa-pencil"></i></a>

						<a href="{{Route('sp6',['id' => $tg->id])}}"><i class="fa fa-trash-o fa-fw"></i></a>
					</td>

					
				
				  </tr>
				@endforeach
	        </tbody>

	      </table>
	    </div>
	  </div>
	</div>
</section>

<script src="{{asset('public/js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>

<script  type="text/javascript">

	$(document).ready(function(){

		fetch_customer_data();

		function fetch_customer_data(query = '')
		{
			$.ajax({
			   url:"",
			   method:'GET',
			   data:{query:query},
			   dataType:'json',
			   success:function(data)
			   {
			    $('#trichdoan').html(data.trichdoan);

			    $('#total_records').text(data.total_data);
			   }
			})
		}

		$(document).on('keyup', '#timkiem2', function(){
		  var query = $(this).val();
		  fetch_customer_data(query);
	 	});
	});
</script>

@endsection