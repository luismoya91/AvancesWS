<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Shipper
 * 
 * @property int $shipperId
 * @property string $companyName
 * @property string|null $phone
 * 
 * @property Collection|Salesorder[] $salesorders
 *
 * @package App\Models
 */
class Shipper extends Model
{
	protected $table = 'shipper';
	protected $primaryKey = 'shipperId';
	public $timestamps = false;

	protected $fillable = [
		'companyName',
		'phone'
	];

	public function salesorders()
	{
		return $this->hasMany(Salesorder::class, 'shipperid');
	}
}
