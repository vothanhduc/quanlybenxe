@extends('admin.layout')
@section('admin_content')

	<section id="main-content">
		<section class="wrapper">
			<div class="table-agile-info">

				<div class="panel panel-default">
				    <div class="panel-heading">
					    Họa Sĩ
					<a style="float:right; margin-top: 13px" href="{{Route('hh2')}}" class="btn btn-primary">+ Thêm</a>

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
	            	<th>STT</th>
					<th>Tên Họa Sĩ</th>
					<th> Tùy chọn</th>
	          </tr>
	        </thead>

	        <tbody>
          		@foreach($hoasi as $tg)
				  <tr>
					<td>{{$tg->id}}</td>
					<!-- // lấy ra file hình ở thư mục upload -->

					<td>{{$tg->ten_hoa_si}}</td>
					<td colspan="2">
						<a href="{{Route('hh4',['id' => $tg->id])}}" style="padding-right: 50px;"><i class="fa fa-pencil"></i></a>

						<a href="{{Route('hh6',['id' => $tg->id])}}"><i class="fa fa-trash-o fa-fw"></i></a>
					</td>

					
				
				  </tr>
				@endforeach
	        </tbody>

	      </table>
	    </div>
	  </div>
	</div>
</section>

@endsection