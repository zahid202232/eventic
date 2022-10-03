<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreParticipantRequest;
use App\Http\Requests\UpdateParticipantRequest;
use App\Http\Resources\Admin\ParticipantResource;
use App\Models\Participant;
use Gate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Symfony\Component\HttpFoundation\Response;

class ParticipantApiController extends Controller
{
    public function index()
    {
        // abort_if(Gate::denies('participant_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return Participant::all();
    }

    public function store(Request $request)
    {

        $rules=array(
          'name'=>'required',
          'email' => 'required|email|unique:users,email',
          'phone'=>'required',
        );
        $validators=Validator::make($request->all(),$rules);
        if($validators->fails()){
           return $validators->errors();
        }
        else{
            $participant = Participant::create($request->all());
            $company_id=Auth::user()->id;
            $participant->token= rand(1000,10000);
            $participant->company_id=$company_id;
            if($request->hasfile('file')){
                $file= $request->file('file');
                $extenstion= $file->getClientOriginalExtension();
                $filename=time().'.'.$extenstion;
                $file->move('uploads/image/', $filename);
                $participant->profile_image=$filename;
            }
            $participant->save();
            return response()->json([
                'participient' => $participant,
                'message' => 'Participant Add Successfully'
            ]);
        }

    }

    public function show($id)
    {

        // abort_if(Gate::denies('participant_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $participant=Participant::findOrfail($id);
        return $participant;
    }

    public function update(Request $request,$id)
    {
        $participant=Participant::findOrfail($id);
        $rules=array(
            'name'=>'required',
            'email' => 'required|email|unique:users,email',
            'phone'=>'required',
          );
          $validators=Validator::make($request->all(),$rules);
          if($validators->fails()){
             return $validators->errors();
          }
          else{
            $participant->update($request->all());
            if($request->hasfile('file')){
                $destination='uploads/image/'.$participant->file;
               if(File::exists($destination)){
                  File::delete($destination);}
                  $file= $request->file('file');
                  $extenstion= $file->getClientOriginalExtension();
                  $filename=time().'.'.$extenstion;
                  $file->move('uploads/image/', $filename);
                  $participant->profile_image=$filename;
             }
             $participant->save();
            return response()->json([
                'participient' => $participant,
                'message' => 'Participant Update Successfully'
            ]);
          }

    }

    public function destroy($id)
    {

		$post=Participant::where('id',$id);

        $post->delete();
		 if($post){
       //$post->delete();

	return ["message" => "Participant Delete Successfully"];
		}
		else{
	return ["message" => "Participant Not Delete "];
		}

    }
}
