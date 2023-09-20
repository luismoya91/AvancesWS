<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Orderdetail
 * 
 * @property int $orderDetailId
 * @property int $orderId
 * @property int $productId
 * @property float $unitPrice
 * @property int $quantity
 * @property float $discount
 * 
 * @property Salesorder $salesorder
 * @property Product $product
 *
 * @package App\Models
 */
class Orderdetail extends Model
{
	protected $table = 'orderdetail';
	protected $primaryKey = 'orderDetailId';
	public $timestamps = false;

	protected $casts = [
		'orderId' => 'int',
		'productId' => 'int',
		'unitPrice' => 'float',
		'quantity' => 'int',
		'discount' => 'float'
	];

	protected $fillable = [
		'orderId',
		'productId',
		'unitPrice',
		'quantity',
		'discount'
	];

	public function salesorder()
	{
		return $this->belongsTo(Salesorder::class, 'orderId');
	}

	public function product()
	{
		return $this->belongsTo(Product::class, 'productId');
	}
}
