<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
   public function logindata(Request $request){
      
	   $validator = Validator($request->all(), [
            'email' => 'required',
            'password' => 'required|min:6',
            ]);
            if ($validator->fails()) {
               return response([
                    'status' => 400,
                    'errors' => $validator->errors()->all()
                ],400);
            }
         $credentials = request(['email', 'password']);

         $user = Company::where('email', $request->email)->first();
	   if($user)
	   {
if (Hash::check($request->password, $user->password)) {
             $token = $user->createToken('auth-token')->plainTextToken;
         return response()->json([
             'access_token' => $token,
             'user' => $user,
             'message' => 'Login Successfully'
         ]);
        }
	   else {
            $response = ["message" => "Password mismatch"];
            return response($response, 422);
        }
   } else {
        $response = ["message" =>'User does not exist'];
        return response($response, 422);
    }

   }

    //User Login
     function companyLogin(Request $request)
     {
        $validator = Validator($request->all(), [
            'email' => 'required',
            'password' => 'required|min:6',
            ]);
            if ($validator->fails()) {
               return response([
                    'status' => 400,
                    'errors' => $validator->errors()->all()
                ],400);
            }
         $credentials = request(['email', 'password']);
         if (!auth()->attempt($credentials)) {
             return response()->json([
                 'message' => 'The given data was invalid.',
                 'errors' => [
                     'password' => [
                         'Invalid credentials'
                     ],
                 ]
             ], 422);
         }
         $user = Company::where('email', $request->email)->first();

         $token = $user->createToken('auth-token')->plainTextToken;
         return response()->json([
             'access_token' => $token,
             'user' => $user,
             'message' => 'Login Successfully'
         ]);
     }
//     public function companyLogin(Request $request)
//     {
//          $request->validate([
//             'email' => 'required',
//             'password' => 'required',
//         ]);

//         $credentials = $request->only('email', 'password');
//         // $data = Company::where('email','=',$request->email)->where('password','=',Hash::check($request->password))->first();
//         $data = Auth::attempt($credentials);
//         // $token = $data->createToken('events_app')->plainTextToken;
//         if ($data) {
//             return response([
//                 'status' => 200,
//                 // 'token' => $token
//                 'message' => 'Login Successfully'
//             ]);
//         }
//   		else{
// 			return response([
//                 'status' => 404,
//                 'message' => 'could not found'
//             ]);
//     	}
// }

}

