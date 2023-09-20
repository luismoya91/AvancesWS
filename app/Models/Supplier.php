<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Supplier
 * 
 * @property int $supplierId
 * @property string $companyName
 * @property string|null $contactName
 * @property string|null $contactTitle
 * @property string|null $address
 * @property string|null $city
 * @property string|null $region
 * @property string|null $postalCode
 * @property string|null $country
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $fax
 * @property string|null $HomePage
 * 
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Supplier extends Model
{
	protected $table = 'supplier';
	protected $primaryKey = 'supplierId';
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
		'email',
		'fax',
		'HomePage'
	];

	public function products()
	{
		return $this->hasMany(Product::class, 'supplierId');
	}
}
