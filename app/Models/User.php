<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string|null $email
 * @property int $sso
 * @property string $avatar
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * 
 * @property Collection|BinhLuan[] $binh_luans
 * @property ChamDiem $cham_diem
 * @property Collection|DotXetDuyet[] $dot_xet_duyets
 * @property FileDinhKem $file_dinh_kem
 * @property NhanVien $nhan_vien
 * @property ThamGiaSk $tham_gia_sk
 * @property ThanhVienHoiDong $thanh_vien_hoi_dong
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'user';

	protected $casts = [
		'sso' => 'int',
		'status' => 'int',
		'created_at' => 'int',
		'updated_at' => 'int'
	];

	protected $hidden = [
		'password_reset_token'
	];

	protected $fillable = [
		'username',
		'auth_key',
		'password_hash',
		'password_reset_token',
		'email',
		'sso',
		'avatar',
		'status'
	];

	public function binh_luans()
	{
		return $this->hasMany(BinhLuan::class, 'id_user');
	}

	public function cham_diem()
	{
		return $this->hasOne(ChamDiem::class, 'id_user');
	}

	public function dot_xet_duyets()
	{
		return $this->hasMany(DotXetDuyet::class, 'created_by');
	}

	public function file_dinh_kem()
	{
		return $this->hasOne(FileDinhKem::class, 'created_by');
	}

	public function nhan_vien()
	{
		return $this->hasOne(NhanVien::class, 'nhanvien_username', 'username');
	}

	public function tham_gia_sk()
	{
		return $this->hasOne(ThamGiaSk::class, 'id_user');
	}

	public function thanh_vien_hoi_dong()
	{
		return $this->hasOne(ThanhVienHoiDong::class, 'id_user');
	}
}
