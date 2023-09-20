<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Territory
 * 
 * @property string $territoryId
 * @property string $territorydescription
 * @property int $regionId
 * 
 * @property Region $region
 * @property Collection|Employee[] $employees
 *
 * @package App\Models
 */
class Territory extends Model
{
	protected $table = 'territory';
	protected $primaryKey = 'territoryId';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'regionId' => 'int'
	];

	protected $fillable = [
		'territorydescription',
		'regionId'
	];

	public function region()
	{
		return $this->belongsTo(Region::class, 'regionId');
	}

	public function employees()
	{
		return $this->belongsToMany(Employee::class, 'employeeterritory', 'territoryId', 'employeeId');
	}
}
