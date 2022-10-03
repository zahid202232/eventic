<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\ExcelImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input as input;



class ExcelUploadController extends Controller
{
    public function uploadexcel(Request $request)
    {
		Excel::import(new ExcelImport, request()->file('excel'));
		return redirect()->back();
    //     if($request->hasfile('excel')){
	// 		$path = $request->file('excel')->getRealPath();
	// 		$data = Excel::import($path, function($reader) {
	// 		})->get();
	// 		if(!empty($data) && $data->count()){
	// 			foreach ($data as $key => $value) {
	// 				$insert[] = ['name' => $value->name, 'email' => $value->email,
    //                 'profile_image' => $value->profile_image, 'phone' => $value->phone];
	// 			}
	// 			if(!empty($insert)){
	// 				DB::table('participants')->insert($insert);
	// 				dd('Insert Record successfully.');
	// 			}
	// 		}
	// 	}
	// 	return back();
	// }

   }}
