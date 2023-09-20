<?php

namespace App\Http\Controllers;

use App\Models\Salesorder;
use Illuminate\Http\Request;

class SalesOrderController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{

        $requestAll = $request->all();
        if(             isset($requestAll['customer']) && !empty($requestAll['customer'])){
            $custId = $requestAll['customer'];
            $salesorders = Salesorder::whereHas('customer', function($q) use ($custId)
            {
                $q->where('custId', '=', $custId);

            })->with('shipper')->with('customer.custcustdemographics.customerdemographic')->with('orderdetails.product.supplier', 'orderdetails.product.category')->paginate(10);

            return response()->json(
                [
                    'status'=>'ok',
                    'data'=> $salesorders
                ], 200
            );
        }else{
            return response()->json(
                [
                    'status'=>'error',
                    'data'=> [
                        'message' => 'The customer is required.'
                    ]
                ], 200
            );
        }

	}
}
