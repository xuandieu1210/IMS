<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ThamGiaSk
 * 
 * @property int $id_user
 * @property int $id_sk
 * @property int $dong_gop
 * @property int $vai_tro
 * 
 * @property SangKien $sang_kien
 * @property User $user
 *
 * @package App\Models
 */
class ThamGiaSk extends Model
{
	protected $table = 'tham_gia_sk';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int',
		'id_sk' => 'int',
		'dong_gop' => 'int',
		'vai_tro' => 'int'
	];

	protected $fillable = [
		'id_user',
		'id_sk',
		'dong_gop',
		'vai_tro'
	];

	public function sang_kien()
	{
		return $this->belongsTo(SangKien::class, 'id_sk');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
