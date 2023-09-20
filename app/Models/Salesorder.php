<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Salesorder
 *
 * @property int $orderId
 * @property int $custId
 * @property int|null $employeeId
 * @property Carbon|null $orderDate
 * @property Carbon|null $requiredDate
 * @property Carbon|null $shippedDate
 * @property int $shipperid
 * @property float|null $freight
 * @property string|null $shipName
 * @property string|null $shipAddress
 * @property string|null $shipCity
 * @property string|null $shipRegion
 * @property string|null $shipPostalCode
 * @property string|null $shipCountry
 *
 * @property Shipper $shipper
 * @property Customer $customer
 * @property Collection|Orderdetail[] $orderdetails
 *
 * @package App\Models
 */
class Salesorder extends Model
{
	protected $table = 'salesorder';
	public $timestamps = false;

	protected $casts = [
		'custId' => 'int',
		'employeeId' => 'int',
		'orderDate' => 'datetime',
		'requiredDate' => 'datetime',
		'shippedDate' => 'datetime',
		'shipperid' => 'int',
		'freight' => 'float'
	];

	protected $fillable = [
		'employeeId',
		'orderDate',
		'requiredDate',
		'shippedDate',
		'shipperid',
		'freight',
		'shipName',
		'shipAddress',
		'shipCity',
		'shipRegion',
		'shipPostalCode',
		'shipCountry'
	];

	public function shipper()
	{
		return $this->belongsTo(Shipper::class, 'shipperid');
	}

	public function customer()
	{
		return $this->belongsTo(Customer::class, 'custId');
	}

	public function orderdetails()
	{
		return $this->hasMany(Orderdetail::class, 'orderId', 'orderId');
	}
}
