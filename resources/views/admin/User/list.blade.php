@extends('admin.layout')
@section('admin_content')

	<section id="main-content">
		<section class="wrapper">
			<div class="table-agile-info">

				<div class="panel panel-default">
				    <div class="panel-heading">
					    Danh mục người dùng
					

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
<tr>
                            <td>ID</td>

                            <td>Tên User</td>

                            <td>Quyền</td>
                            <td>Action</td>
                            
                        </tr>
	          </tr>
	        </thead>

	        <tbody>
          		@foreach($loaisanpham as $tg)
				  <tr>
					<td>{{$tg->id}}</td>
					<!-- // lấy ra file hình ở thư mục upload -->

					<td>{{$tg->name}}</td>

					<td>{{$tg->vaitro->ten_vai_tro}}</td>

					<td colspan="2">
						<a href="{{Route('lsp4',['id' => $tg->id])}}" style="padding-right: 50px;"><i class="fa fa-pencil"></i></a>

						<a href="{{Route('lsp6',['id' => $tg->id])}}"><i class="fa fa-trash-o fa-fw"></i></a>
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