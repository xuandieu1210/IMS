<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LinhVuc
 * 
 * @property int $id
 * @property string $ten_linh_vuc
 * 
 * @property Collection|SangKien[] $sang_kiens
 * @property ThanhVienHoiDong $thanh_vien_hoi_dong
 *
 * @package App\Models
 */
class LinhVuc extends Model
{
	protected $table = 'linh_vuc';
	public $timestamps = false;

	protected $fillable = [
		'ten_linh_vuc'
	];

	public function sang_kiens()
	{
		return $this->hasMany(SangKien::class, 'id_linh_vuc');
	}

	public function thanh_vien_hoi_dong()
	{
		return $this->hasOne(ThanhVienHoiDong::class, 'id_linh_vuc');
	}
}
