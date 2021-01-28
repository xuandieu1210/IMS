<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NhanVien
 * 
 * @property int $nhanvien_id
 * @property string $nhanvien_ma
 * @property string $nhanvien_ten
 * @property string $nhanvien_sdt
 * @property int $nhanvien_donvi
 * @property string $nhanvien_username
 * 
 * @property DonVi $don_vi
 * @property User $user
 *
 * @package App\Models
 */
class NhanVien extends Model
{
	protected $table = 'nhan_vien';
	protected $primaryKey = 'nhanvien_id';
	public $timestamps = false;

	protected $casts = [
		'nhanvien_donvi' => 'int'
	];

	protected $fillable = [
		'nhanvien_ma',
		'nhanvien_ten',
		'nhanvien_sdt',
		'nhanvien_donvi',
		'nhanvien_username'
	];

	public function don_vi()
	{
		return $this->belongsTo(DonVi::class, 'nhanvien_donvi');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'nhanvien_username', 'username');
	}
}
