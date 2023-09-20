<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property int $employeeId
 * @property string $lastname
 * @property string $firstname
 * @property string|null $title
 * @property string|null $titleOfCourtesy
 * @property Carbon|null $birthDate
 * @property Carbon|null $hireDate
 * @property string|null $address
 * @property string|null $city
 * @property string|null $region
 * @property string|null $postalCode
 * @property string|null $country
 * @property string|null $phone
 * @property string|null $extension
 * @property string|null $mobile
 * @property string|null $email
 * @property string|null $photo
 * @property string|null $notes
 * @property int|null $mgrId
 * @property string|null $photoPath
 *
 * @property Collection|Territory[] $territories
 *
 * @package App\Models
 */
class Employee extends Model
{
	protected $table = 'employee';
	protected $primaryKey = 'employeeId';
	public $timestamps = false;

	protected $casts = [
		'birthDate' => 'datetime',
		'hireDate' => 'datetime',
		'mgrId' => 'int'
	];

	protected $fillable = [
		'lastname',
		'firstname',
		'title',
		'titleOfCourtesy',
		'birthDate',
		'hireDate',
		'address',
		'city',
		'region',
		'postalCode',
		'country',
		'phone',
		'extension',
		'mobile',
		'email',
		'photo',
		'notes',
		'mgrId',
		'photoPath'
	];

	public function territories()
	{
		return $this->belongsToMany(Territory::class, 'employeeterritory', 'employeeId', 'territoryId');
	}
}
