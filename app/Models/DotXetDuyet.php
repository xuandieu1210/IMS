<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DotXetDuyet
 * 
 * @property int $id
 * @property string $ten_dot
 * @property int $trang_thai
 * @property int $thoi_gian_bat_dau
 * @property int $thoi_gian_ket_thuc
 * @property int $created_by
 * @property Carbon $created_at
 * @property int|null $updated_by
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property ChamDiem $cham_diem
 * @property Collection|SangKien[] $sang_kiens
 * @property ThanhVienHoiDong $thanh_vien_hoi_dong
 *
 * @package App\Models
 */
class DotXetDuyet extends Model
{
	protected $table = 'dot_xet_duyet';

	protected $casts = [
		'trang_thai' => 'int',
		'thoi_gian_bat_dau' => 'int',
		'thoi_gian_ket_thuc' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'ten_dot',
		'trang_thai',
		'thoi_gian_bat_dau',
		'thoi_gian_ket_thuc',
		'created_by',
		'updated_by'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'created_by');
	}

	public function cham_diem()
	{
		return $this->hasOne(ChamDiem::class, 'id_dot_xet_duyet');
	}

	public function sang_kiens()
	{
		return $this->hasMany(SangKien::class, 'id_dot_xet_duyet');
	}

	public function thanh_vien_hoi_dong()
	{
		return $this->hasOne(ThanhVienHoiDong::class, 'id_dot_xet_duyet');
	}
}
