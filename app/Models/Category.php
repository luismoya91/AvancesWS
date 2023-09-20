<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $categoryId
 * @property string $categoryName
 * @property string|null $description
 * @property string|null $picture
 * 
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'category';
	protected $primaryKey = 'categoryId';
	public $timestamps = false;

	protected $fillable = [
		'categoryName',
		'description',
		'picture'
	];

	public function products()
	{
		return $this->hasMany(Product::class, 'categoryId');
	}
}
