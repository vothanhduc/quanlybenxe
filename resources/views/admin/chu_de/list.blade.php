@extends('admin.layout')
@section('admin_content')

	<section id="main-content">
		<section class="wrapper">
			<div class="table-agile-info">

				<div class="panel panel-default">
				    <div class="panel-heading">
					    Chủ Đề 
					<a style="float:right; margin-top: 13px" href="{{Route('cd2')}}" class="btn btn-primary">+ ADD</a>

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
					<th>Tên chủ đề</th>
					<th>Action</th>
	          </tr>
	        </thead>

	        <tbody>
          		@foreach($chude as $tg)
				  <tr>
					<td>{{$tg->id}}</td>
					<!-- // lấy ra file hình ở thư mục upload -->

					<td>{{$tg->ten_chu_de}}</td>
					<td colspan="2">
						<a href="{{Route('cd4',['id' => $tg->id])}}" style="padding-right: 50px;"><i class="fa fa-pencil"></i></a>

						<a href="{{Route('cd6',['id' => $tg->id])}}"><i class="fa fa-trash-o fa-fw"></i></a>
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