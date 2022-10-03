<?php

namespace App\Imports;

use App\Models\Participant;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ExcelImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       
       $user= new Participant([

            'name'  => $row[2],
            'email'   => $row[3],
            'profile_image'   => $row[4],
            'phone'    => $row[5],
            'company_id'=> Auth::user()->id
        ]);
    DB::table('participants')->where('email',$user->email)->delete();
  return $user;
    }
}
