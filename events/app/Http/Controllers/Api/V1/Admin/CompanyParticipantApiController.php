<?php

namespace App\Http\Controllers\Api\V1\Admin;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class CompanyParticipantApiController extends Controller
{
    Public function company_participants(){

     $company_id=Auth::user()->id;
     $participant=Participant::where('company_id',$company_id)->get();
     return $participant;
    }
}
