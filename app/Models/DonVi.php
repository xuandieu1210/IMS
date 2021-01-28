<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DonVi
 * 
 * @property int $donvi_id
 * @property string $donvi_ten
 * @property string|null $donvi_ma
 * @property string|null $donvi_diachi
 * @property int $donvi_cap
 * @property int $donvi_captren
 * 
 * @property DonVi $don_vi
 * @property Collection|DonVi[] $don_vis
 * @property Collection|NhanVien[] $nhan_viens
 *
 * @package App\Models
 */
class DonVi extends Model
{
	protected $table = 'don_vi';
	protected $primaryKey = 'donvi_id';
	public $timestamps = false;

	protected $casts = [
		'donvi_cap' => 'int',
		'donvi_captren' => 'int'
	];

	protected $fillable = [
		'donvi_ten',
		'donvi_ma',
		'donvi_diachi',
		'donvi_cap',
		'donvi_captren'
	];

	public function don_vi()
	{
		return $this->belongsTo(DonVi::class, 'donvi_captren');
	}

	public function don_vis()
	{
		return $this->hasMany(DonVi::class, 'donvi_captren');
	}

	public function nhan_viens()
	{
		return $this->hasMany(NhanVien::class, 'nhanvien_donvi');
	}
}
