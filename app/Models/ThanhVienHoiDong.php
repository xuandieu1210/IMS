<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ThanhVienHoiDong
 * 
 * @property int $id_user
 * @property int $id_linh_vuc
 * @property int $id_dot_xet_duyet
 * 
 * @property DotXetDuyet $dot_xet_duyet
 * @property LinhVuc $linh_vuc
 * @property User $user
 *
 * @package App\Models
 */
class ThanhVienHoiDong extends Model
{
	protected $table = 'thanh_vien_hoi_dong';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int',
		'id_linh_vuc' => 'int',
		'id_dot_xet_duyet' => 'int'
	];

	protected $fillable = [
		'id_user',
		'id_linh_vuc',
		'id_dot_xet_duyet'
	];

	public function dot_xet_duyet()
	{
		return $this->belongsTo(DotXetDuyet::class, 'id_dot_xet_duyet');
	}

	public function linh_vuc()
	{
		return $this->belongsTo(LinhVuc::class, 'id_linh_vuc');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
