<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * 
 * @property int $custId
 * @property string $companyName
 * @property string|null $contactName
 * @property string|null $contactTitle
 * @property string|null $address
 * @property string|null $city
 * @property string|null $region
 * @property string|null $postalCode
 * @property string|null $country
 * @property string|null $phone
 * @property string|null $mobile
 * @property string|null $email
 * @property string|null $fax
 * 
 * @property Collection|Custcustdemographic[] $custcustdemographics
 * @property Collection|Salesorder[] $salesorders
 *
 * @package App\Models
 */
class Customer extends Model
{
	protected $table = 'customer';
	protected $primaryKey = 'custId';
	public $timestamps = false;

	protected $fillable = [
		'companyName',
		'contactName',
		'contactTitle',
		'address',
		'city',
		'region',
		'postalCode',
		'country',
		'phone',
		'mobile',
		'email',
		'fax'
	];

	public function custcustdemographics()
	{
		return $this->hasMany(Custcustdemographic::class, 'custId');
	}

	public function salesorders()
	{
		return $this->hasMany(Salesorder::class, 'custId');
	}
}
