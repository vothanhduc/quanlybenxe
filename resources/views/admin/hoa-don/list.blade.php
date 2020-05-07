@extends('admin.layout')
@section('admin_content')

	<section id="main-content">
		<section class="wrapper">
			<div class="table-agile-info">

				<div class="panel panel-default">
				    <div class="panel-heading">
					    Đơn hàng
					

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
                    <th>Mã đơn hàng</th>
                    <th>Người đặt đơn</th>
                    <th>Trạng thái</th>

                    <th>Ngày đặt</th>
                    <th >Action</th>
                    <th></th>
	          </tr>
	        </thead>


	        <tbody>
	        	@foreach($donhang as $nhh)
                                            <tr class="tr-shadow">
                                                <td >
                                                    {{$nhh->id}}
                                                </td>

                                                <td class="desc">{{$nhh->ma_hoadon}}</td>


                                                <td >
                                                    {{$nhh->userdh->name}}
                                                </td>

                                                <td >
                                                    @if($nhh->trang_thai == 0)
                                    
                            <a  style="; margin-right: 20px;">{{'Đặt hàng thành công' }}</a>
                        
                        @elseif($nhh->trang_thai == 1)
                        
                            <a style="; margin-right: 20px;" >{{'Đang xử lý'}}</a>
                        
                        @elseif($nhh->trang_thai == 2)
                        
                            <a style="background-color: #7B68EE; color: #fff; ; margin-right: 20px;" >{{'Đang vận chuyển'}}</a>
                        
                        @elseif($nhh->trang_thai == 3)
                        
                            <a style="; margin-right: 20px;" >{{'Thành công'}}</a>

                        @elseif($nhh->trang_thai == 4)
                        
                            <a style="background-color: #F08080; color: #fff; ; margin-right: 20px;" >{{'Đã Hủy'}}</a>
                        @endif
                        
                                                </td>

                                                <td >
                                                    {{ date("d-m-Y || H:i A",strtotime($nhh->ngay_order)) }}
                                                </td>

                                                

                                                

                                                
                                                <td>

                                                    <div class="input-group-btn">
                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{Route('dh2',['id' => $nhh->id])}}">Đặt hàng </a></li>

                                        <li><a class="dropdown-item" href="{{Route('dh3',['id' => $nhh->id])}}">Xử lý</a></li>
                                        <li><a class="dropdown-item" href="{{Route('dh4',['id' => $nhh->id])}}">Vận chuyển</a></li>

                                        <li><a class="dropdown-item" href="{{Route('dh5',['id' => $nhh->id])}}">Thành công</a></li>
                                        <li><a class="dropdown-item" href="{{Route('dh6',['id' => $nhh->id])}}">Đơn hủy</a>
</li>
                                    </ul>
                                   
                                </div>

                                                        
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