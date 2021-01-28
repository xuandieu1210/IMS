<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SangKien
 * 
 * @property int $id
 * @property string $ten_sang_kien
 * @property string $mo_ta
 * @property int $id_linh_vuc
 * @property int $id_dot_xet_duyet
 * @property int $id_xep_hang
 * @property int $tien_thuong
 * @property int $chuyen_cap_tren
 * @property Carbon $created_at
 * @property int $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * 
 * @property DotXetDuyet $dot_xet_duyet
 * @property LinhVuc $linh_vuc
 * @property DmXepHang $dm_xep_hang
 * @property Collection|BinhLuan[] $binh_luans
 * @property ChamDiem $cham_diem
 * @property ThamGiaSk $tham_gia_sk
 *
 * @package App\Models
 */
class SangKien extends Model
{
	protected $table = 'sang_kien';

	protected $casts = [
		'id_linh_vuc' => 'int',
		'id_dot_xet_duyet' => 'int',
		'id_xep_hang' => 'int',
		'tien_thuong' => 'int',
		'chuyen_cap_tren' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'ten_sang_kien',
		'mo_ta',
		'id_linh_vuc',
		'id_dot_xet_duyet',
		'id_xep_hang',
		'tien_thuong',
		'chuyen_cap_tren',
		'created_by',
		'updated_by'
	];

	public function dot_xet_duyet()
	{
		return $this->belongsTo(DotXetDuyet::class, 'id_dot_xet_duyet');
	}

	public function linh_vuc()
	{
		return $this->belongsTo(LinhVuc::class, 'id_linh_vuc');
	}

	public function dm_xep_hang()
	{
		return $this->belongsTo(DmXepHang::class, 'id_xep_hang');
	}

	public function binh_luans()
	{
		return $this->hasMany(BinhLuan::class, 'id_sk');
	}

	public function cham_diem()
	{
		return $this->hasOne(ChamDiem::class, 'id_sk');
	}

	public function tham_gia_sk()
	{
		return $this->hasOne(ThamGiaSk::class, 'id_sk');
	}
}
