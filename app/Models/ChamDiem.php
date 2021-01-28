<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ChamDiem
 * 
 * @property int $id_sk
 * @property int $id_dot_xet_duyet
 * @property int $id_user
 * @property int $so_diem
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property int $updated_by
 * 
 * @property DotXetDuyet $dot_xet_duyet
 * @property SangKien $sang_kien
 * @property User $user
 *
 * @package App\Models
 */
class ChamDiem extends Model
{
	protected $table = 'cham_diem';
	public $incrementing = false;

	protected $casts = [
		'id_sk' => 'int',
		'id_dot_xet_duyet' => 'int',
		'id_user' => 'int',
		'so_diem' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'id_sk',
		'id_dot_xet_duyet',
		'id_user',
		'so_diem',
		'updated_by'
	];

	public function dot_xet_duyet()
	{
		return $this->belongsTo(DotXetDuyet::class, 'id_dot_xet_duyet');
	}

	public function sang_kien()
	{
		return $this->belongsTo(SangKien::class, 'id_sk');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
