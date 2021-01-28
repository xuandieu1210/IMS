<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HoiDongMau
 * 
 * @property int $id_user
 * @property int $id_linh_vuc
 *
 * @package App\Models
 */
class HoiDongMau extends Model
{
	protected $table = 'hoi_dong_mau';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int',
		'id_linh_vuc' => 'int'
	];

	protected $fillable = [
		'id_user',
		'id_linh_vuc'
	];
}
