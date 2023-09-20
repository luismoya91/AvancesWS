<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
        $products = Product::with('supplier')->with('category')->paginate(10);
        $requestAll = $request->all();
        if(isset($requestAll['suppliers']) && !empty($requestAll['suppliers'])){
            $suppliers = $requestAll['suppliers'];
            $products = Product::whereHas('supplier', function($q) use ($suppliers)
            {
                $q->whereIn('supplierId', $suppliers);

            })->with('supplier')->with('category')->paginate(10);
        }
        if(isset($requestAll['categories']) && !empty($requestAll['categories'])){
            $categories = $requestAll['categories'];
            $products = Product::whereHas('category', function($q) use ($categories)
            {
                $q->whereIn('categoryId', $categories);

            })->with('supplier')->with('category')->paginate(10);
        }

        if((isset($requestAll['suppliers']) && !empty($requestAll['suppliers'])) && (isset($requestAll['categories']) && !empty($requestAll['categories']))){
            $suppliers = $requestAll['suppliers'];
            $categories = $requestAll['categories'];
            $products = Product::whereHas('supplier', function($q) use ($suppliers)
            {
                $q->whereIn('supplierId', $suppliers);

            })->whereHas('category', function($q) use ($categories)
            {
                $q->whereIn('categoryId', $categories);

            })->with('supplier')->with('category')->paginate(10);
        }


        return response()->json(
            [
                'status'=>'ok',
                'data'=> $products
            ], 200
        );
	}
}
