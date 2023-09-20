<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Region
 * 
 * @property int $regionId
 * @property string $regiondescription
 * 
 * @property Collection|Territory[] $territories
 *
 * @package App\Models
 */
class Region extends Model
{
	protected $table = 'region';
	protected $primaryKey = 'regionId';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'regionId' => 'int'
	];

	protected $fillable = [
		'regiondescription'
	];

	public function territories()
	{
		return $this->hasMany(Territory::class, 'regionId');
	}
}
