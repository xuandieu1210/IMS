<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FileDinhKem
 * 
 * @property int $id_obj
 * @property int $loai
 * @property string $file_path
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property int $created_by
 * @property int|null $updated_by
 * 
 * @property User $user
 *
 * @package App\Models
 */
class FileDinhKem extends Model
{
	protected $table = 'file_dinh_kem';
	public $incrementing = false;

	protected $casts = [
		'id_obj' => 'int',
		'loai' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'id_obj',
		'loai',
		'file_path',
		'created_by',
		'updated_by'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'created_by');
	}
}
