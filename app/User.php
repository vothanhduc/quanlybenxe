<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable
{
    protected $table='nguoi_dungs';
    public $timestamps = false;

    public function vaitro() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\vai_tro','vai_tro','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    // protected $primaryKey = 'id_user'; 
    // để sử dụng bảng tbl_user của minh tạo ra, mặc định users của laravel nên phải đổi nó lại.
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

