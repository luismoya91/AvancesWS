<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property int $productId
 * @property string $productName
 * @property int|null $supplierId
 * @property int|null $categoryId
 * @property string|null $quantityPerUnit
 * @property float|null $unitPrice
 * @property int|null $unitsInStock
 * @property int|null $unitsOnOrder
 * @property int|null $reorderLevel
 * @property string $discontinued
 *
 * @property Supplier|null $supplier
 * @property Category|null $category
 * @property Collection|Orderdetail[] $orderdetails
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'product';
	protected $primaryKey = 'productId';
	public $timestamps = false;

	protected $casts = [
		'unitPrice' => 'float',
		'unitsInStock' => 'int',
		'unitsOnOrder' => 'int',
		'reorderLevel' => 'int'
	];

	protected $fillable = [
		'productName',
		'supplierId',
		'categoryId',
		'quantityPerUnit',
		'unitPrice',
		'unitsInStock',
		'unitsOnOrder',
		'reorderLevel',
		'discontinued'
	];

    // protected $appends = ['supplierId'];

	public function supplier()
	{
		return $this->belongsTo(Supplier::class, 'supplierId');
	}

	public function category()
	{
		return $this->belongsTo(Category::class, 'categoryId');
	}

	public function orderdetails()
	{
		return $this->hasMany(Orderdetail::class, 'productId');
	}

}
