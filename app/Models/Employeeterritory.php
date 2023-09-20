<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employeeterritory
 * 
 * @property int $employeeId
 * @property string $territoryId
 * 
 * @property Employee $employee
 * @property Territory $territory
 *
 * @package App\Models
 */
class Employeeterritory extends Model
{
	protected $table = 'employeeterritory';
	public $timestamps = false;

	public function employee()
	{
		return $this->belongsTo(Employee::class, 'employeeId');
	}

	public function territory()
	{
		return $this->belongsTo(Territory::class, 'territoryId');
	}
}
