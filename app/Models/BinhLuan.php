<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BinhLuan
 * 
 * @property int $id
 * @property int $id_user
 * @property int $id_sk
 * @property string $noi_dung
 * @property int $rating
 * @property int $trang_thai
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * 
 * @property SangKien $sang_kien
 * @property User $user
 *
 * @package App\Models
 */
class BinhLuan extends Model
{
	protected $table = 'binh_luan';

	protected $casts = [
		'id_user' => 'int',
		'id_sk' => 'int',
		'rating' => 'int',
		'trang_thai' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'id_user',
		'id_sk',
		'noi_dung',
		'rating',
		'trang_thai',
		'updated_by'
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
