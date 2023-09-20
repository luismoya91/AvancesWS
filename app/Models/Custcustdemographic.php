<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Custcustdemographic
 * 
 * @property int $custId
 * @property int $customerTypeId
 * 
 * @property Customer $customer
 * @property Customerdemographic $customerdemographic
 *
 * @package App\Models
 */
class Custcustdemographic extends Model
{
	protected $table = 'custcustdemographics';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'custId' => 'int',
		'customerTypeId' => 'int'
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class, 'custId');
	}

	public function customerdemographic()
	{
		return $this->belongsTo(Customerdemographic::class, 'customerTypeId');
	}
}
