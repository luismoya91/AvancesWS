<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Customerdemographic
 * 
 * @property int $customerTypeId
 * @property string|null $customerDesc
 * 
 * @property Collection|Custcustdemographic[] $custcustdemographics
 *
 * @package App\Models
 */
class Customerdemographic extends Model
{
	protected $table = 'customerdemographics';
	protected $primaryKey = 'customerTypeId';
	public $timestamps = false;

	protected $fillable = [
		'customerDesc'
	];

	public function custcustdemographics()
	{
		return $this->hasMany(Custcustdemographic::class, 'customerTypeId');
	}
}
