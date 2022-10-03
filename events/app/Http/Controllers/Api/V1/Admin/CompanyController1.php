<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    
    public function companyLogin(Request $request)
    {
         $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        // $data = Company::where('email','=',$request->email)->where('password','=',Hash::check($request->password))->first();
        $data = Auth::attempt($credentials);
        // $token = $user->createToken('events_app')->plainTextToken;
        if ($data) {
            return response([
                'status' => 200,
                // 'token' => $token
                'message' => 'Login Successfully'
            ]);
        }
  		else{
			return response([
                'status' => 404,
                'message' => 'could not found'
            ]);
    	}
}
    
}

           