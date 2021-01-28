<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DmXepHang
 * 
 * @property int $id
 * @property string $ten_hang
 * @property int $tien_thuong
 * 
 * @property Collection|SangKien[] $sang_kiens
 *
 * @package App\Models
 */
class DmXepHang extends Model
{
	protected $table = 'dm_xep_hang';
	public $timestamps = false;

	protected $casts = [
		'tien_thuong' => 'int'
	];

	protected $fillable = [
		'ten_hang',
		'tien_thuong'
	];

	public function sang_kiens()
	{
		return $this->hasMany(SangKien::class, 'id_xep_hang');
	}
}
