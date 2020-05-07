<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
use App\User;

use Carbon\Carbon; // lấy ngày hiên tại

use App\Models\vai_tro;




// Route::get('/', function () {
// 	return view('welcome');
// });
 /* Route::get('/1', function () {
	Schema::create('hang_san_xuat', function ( $table) {
            $table->increments('id');
            
            $table->string('ten_hang');

           

        });
});
*/

Route::get('/2', function () {
	Schema::create('image_sps', function ( $table) {
            $table->increments('id');
            $table->string('hinh_anh');

            $table->integer('id_imagesp')->unsigned();

            $table->foreign('id_imagesp')
                    ->references('id')
                    ->on('ct_san_phams')
                    ->onDelete('cascade');


            
        });
});

// tài khoản
Route::post('/tim-kiem','TimkiemController@post_search');
 
Route::post('/dang-ky','TaikhoanController@post_reg')->name('reg1');
Route::get('/dang-ky','TaikhoanController@reg')->name('reg');


Route::get('/dang-nhap','TaikhoanController@login')->name('login');

Route::post('/dang-nhap','TaikhoanController@post_lg')->name('p.login');

	Route::get('/dang-xuat','TaikhoanController@logout')->name('logout');


Route::group(['prefix'=>'tai-khoan','middleware'=>'Page_login'],function(){

	Route::get('/','TaikhoanController@profile')->name('profile1');


	Route::get('/chinh-sua-thong-tin-{id}','TaikhoanController@edit')->name('edit1');
	Route::post('/chinh-sua-thong-tin-{id}','TaikhoanController@post_edit')->name('edit2');
	Route::get('/don-hang','DonhangController@page_donhang')->name('donhang');

	Route::post('/don-hang','DonhangController@post_donhang')->name('donhang32');
	
	Route::get('/chi-tiet-don-hang-{id}','DonhangController@page_ct_hoa_don')->name('ct_donhang');





});


// page


Route::get('/','PageController@home')->name('page1');
Route::get('/trang-chu','PageController@home')->name('home1');
Route::get('/checkout','GiohangController@checkout')->name('checkout');

Route::group(['prefix' => 'gio-hang'],function(){
	Route::get('/','GiohangController@showcart')->name('cart');

	Route::get('/them-san-pham-{id}','GiohangController@addCart')->name('addcart');
	Route::get('/cap-nhat-san-pham','GiohangController@update')->name('updatecart');
	Route::get('/xoa-san-pham-{id}','GiohangController@delCart')->name('delcart');

});

// Route::get('/san-pham','PageController@show_sanpham')->name('show_sp'); // show layout không xài group dc


Route::get('/san-pham-{id}','PageController@show_loaisanpham')->name('show_lsp'); // show layout không xài group dc
Route::get('/nha-cung-cap-{id}','PageController@show_hoasi')->name('show_hs'); // show layout không xài group dc
Route::get('/hang-san-xuat-{id}','PageController@show_chude')->name('show_cd'); // show layout không xài group dc

Route::get('/san-pham/chi-tiet-san-pham-{id}.html','PageController@ct_sp')->name('gg2');















Route::get('/admin@@','AdminController@ad_login')->name('login1');

Route::post('/admin@@','AdminController@post_ad_login')->name('login2');
/// admin

Route::group(['prefix'=>'admin','middleware'=>'Ad_login'],function(){
	Route::get('/','AdminController@home')->name('ad1');

Route::get('/admin/dang-xuat','AdminController@logout')->name('logout1');


	Route::group(['prefix'=>'user'],function(){
		Route::get('/','TaikhoanController@list')->name('us1');
		Route::get('them-user.html','TaikhoanController@get_add')->name('us2');

	});

	Route::group(['prefix'=>'san-pham'],function(){
		Route::get('/','SanphamController@list')->name('sp1');
		Route::get('them-hang-hoa','SanphamController@get_add')->name('sp2');
		Route::post('them-hang-hoa','SanphamController@post_add')->name('sp3'); 

		Route::get('sua-hang-hoa-{id}.html','SanphamController@get_edit')->name('sp4');
		Route::post('sua-hang-hoa-{id}.html','SanphamController@post_edit')->name('sp5');

		Route::get('xoa-hang-hoa-{id}.html','SanphamController@del')->name('sp6');

	});

	Route::group(['prefix'=>'loai-san-pham'],function(){
		Route::get('/','LoaisanphamController@list')->name('lsp1');
		Route::get('/add','LoaisanphamController@get_add')->name('lsp2');

		Route::post('/add','LoaisanphamController@post_add')->name('lsp3');

		Route::get('/edit-{id}','LoaisanphamController@get_edit')->name('lsp4');
		Route::post('/edit-{id}','LoaisanphamController@post_edit')->name('lsp5');

		Route::get('/del-{id}','LoaisanphamController@del')->name('lsp6');

	});

	Route::group(['prefix'=>'chu_de'],function(){
		Route::get('/','ChudeController@list')->name('cd1');
		Route::get('/add','ChudeController@get_add')->name('cd2');

		Route::post('/add','ChudeController@post_add')->name('cd3');

		Route::get('/edit-{id}','ChudeController@get_edit')->name('cd4');
		Route::post('/edit-{id}','ChudeController@post_edit')->name('cd5');

		Route::get('/del-{id}','ChudeController@del')->name('cd6');

	});


	Route::group(['prefix'=>'hoa_si'],function(){
		Route::get('/','HoasiController@list')->name('hh1');
		Route::get('/add','HoasiController@get_add')->name('hh2');

		Route::post('/add','HoasiController@post_add')->name('hh3');

		Route::get('/edit-{id}','HoasiController@get_edit')->name('hh4');

		Route::post('/edit-{id}','HoasiController@post_edit')->name('hh5');

		Route::get('/del-{id}','HoasiController@del')->name('hh6');

	});



	Route::group(['prefix'=>'don-hang'],function(){
		Route::get('/','DonhangController@list')->name('dh1');
		Route::get('/them-don-hang','DonhangController@add')->name('dh2');
		Route::get('/xu-ly-{id}','DonhangController@xu_ly')->name('dh3');

		Route::get('/van-chuyen-{id}','DonhangController@van_chuyen')->name('dh4');
		Route::get('/thanh-cong-{id}','DonhangController@thanh_cong')->name('dh5');
		Route::get('/huy-don-{id}','DonhangController@Cancle')->name('dh6');
	});


	Route::group(['prefix'=>'tin-tuc'],function(){
		Route::get('/','TintucController@list')->name('tt1');
		Route::get('them-tin-tuc.html','TintucController@get_add')->name('tt2');

	});

	Route::group(['prefix'=>'khuyen-mai'],function(){
		Route::get('/','KhuyenmaiController@list')->name('km1');
		Route::get('them-khuyen-mai.html','KhuyenmaiController@get_add')->name('km2');

		Route::group(['prefix'=>'voucher'],function(){
			Route::get('/','KhuyenmaiController@list')->name('vc1');
			Route::get('them-them-voucher.html','KhuyenmaiController@get_add')->name('vc2');
		});

	});




});


Route::get('/banhbao',function(){
	$user = new vai_tro;
	$user->ten_vai_tro = 'Admin';
	$user->save();
	$user = new vai_tro;
	$user->ten_vai_tro = 'Thành viên';
	$user->save();
	$user = new vai_tro;
	$user->ten_vai_tro = 'Khách hàng';
	$user->save();
	// add user admin
	$user = new User;
	$user->username='admin';
	$user->password=bcrypt('123123');
	$user->name='Thành Đức';
	$user->email = 'ntkd@gmail.com';
	$user->phone = '0762999994';
	$user->ngay_sinh = '1998-01-01';
	$user->trang_thai = '1';
	$user->dia_chi = 'Vĩnh Long';
	$user->vai_tro = '1';
	$user->create = Carbon::now('Asia/Ho_Chi_Minh');
	$user->save();
	


});










