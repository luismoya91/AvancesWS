<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class EmployeeController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $requestAll = $request->all();

        if(!empty($requestAll)){

            if(isset($requestAll['lastname']) && !empty($requestAll['lastname'])){
                $employee->lastname = $requestAll['lastname'];
            }
            if(isset($requestAll['firstname']) && !empty($requestAll['firstname'])){
                $employee->firstname = $requestAll['firstname'];
            }
            if(isset($requestAll['title']) && !empty($requestAll['title'])){
                $employee->title = $requestAll['title'];
            }
            if(isset($requestAll['titleOfCourtesy']) && !empty($requestAll['titleOfCourtesy'])){
                $employee->titleOfCourtesy = $requestAll['titleOfCourtesy'];
            }
            if(isset($requestAll['birthDate']) && !empty($requestAll['birthDate'])){
                $employee->birthDate = $requestAll['birthDate'];
            }
            if(isset($requestAll['hireDate']) && !empty($requestAll['hireDate'])){
                $employee->hireDate = $requestAll['hireDate'];
            }
            if(isset($requestAll['address']) && !empty($requestAll['address'])){
                $employee->address = $requestAll['address'];
            }
            if(isset($requestAll['city']) && !empty($requestAll['city'])){
                $employee->city = $requestAll['city'];
            }
            if(isset($requestAll['region']) && !empty($requestAll['region'])){
                $employee->region = $requestAll['region'];
            }
            if(isset($requestAll['postalCode']) && !empty($requestAll['postalCode'])){
                $employee->postalCode = $requestAll['postalCode'];
            }
            if(isset($requestAll['country']) && !empty($requestAll['country'])){
                $employee->country = $requestAll['country'];
            }
            if(isset($requestAll['phone']) && !empty($requestAll['phone'])){
                $employee->phone = $requestAll['phone'];
            }
            if(isset($requestAll['extension']) && !empty($requestAll['extension'])){
                $employee->extension = $requestAll['extension'];
            }
            if(isset($requestAll['mobile']) && !empty($requestAll['mobile'])){
                $employee->mobile = $requestAll['mobile'];
            }
            if(isset($requestAll['email']) && !empty($requestAll['email'])){
                $employee->email = $requestAll['email'];
            }
            if(isset($requestAll['photo']) && !empty($requestAll['photo'])){
                $employee->photo = $requestAll['photo'];
            }
            if(isset($requestAll['notes']) && !empty($requestAll['notes'])){
                $employee->notes = $requestAll['notes'];
            }
            if(isset($requestAll['mgrId']) && !empty($requestAll['mgrId'])){
                $employee->mgrId = $requestAll['mgrId'];
            }
            if(isset($requestAll['photoPath']) && !empty($requestAll['photoPath'])){
                $employee->photoPath = $requestAll['photoPath'];
            }


            $employee->save();
            return response()->json(
                [
                    'status'=>'ok',
                    'data'=> $employee
                ], 200
            );
        }else{
            return response()->json(
                [
                    'status'=>'false',
                    'data'=> [
                        'message' => 'Fields are required.'
                    ]
                ], 200
            );
        }

    }
}
