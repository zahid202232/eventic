<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyParticipantRequest;
use App\Http\Requests\StoreParticipantRequest;
use App\Http\Requests\UpdateParticipantRequest;
use App\Models\Attendy;
use Illuminate\Support\Facades\Auth;
use App\Models\Participant;
use Illuminate\Support\Facades\File;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ParticipantController extends Controller
{
    public function index()
    {
        //abort_if(Gate::denies('participant_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         $all_participants=Participant::all();
        $id=Auth::user()->id;
        $participants = Participant::where('company_id',$id)->get();

        return view('admin.participants.index', compact('participants','all_participants'));
    }

    public function create()
    {
        //abort_if(Gate::denies('participant_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.participants.create');
    }
    public function participantstatus(Request $request){
    $Attendy= new Attendy;
    $Attendy->participant_id=$request->P_id;
    $Attendy->event_id=$request->id;
    $Attendy->save();
    $Attend=Participant::where('id',$request->P_id)->first();
    $Attend->status= $request->status;
   // dd($Attend);
    $Attend->save();
    return 1;

    }
    public function store(Request $request)
    {

        $participant = Participant::create($request->all());
        $company_id=Auth::user()->id;
        $e_token=rand(1000,10000);
        $participant->token=$e_token;
        $participant->company_id=$company_id;
        if($request->hasfile('profile_image')){
            $file= $request->file('profile_image');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('uploads/profile_image/', $filename);
            $participant->profile_image=$filename;
        }
        $participant->save();
        return redirect()->route('admin.participants.index');
    }

    public function edit(Participant $participant)
    {
       // abort_if(Gate::denies('participant_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.participants.edit', compact('participant'));
    }

    public function update(Request $request, $id)
    {
        $participant=Participant::find($id);
        $participant->update($request->all());
        if($request->hasfile('profile_image')){
            $destination='uploads/profile_image/'.$participant->file;
           if(File::exists($destination)){
              File::delete($destination);}
              $file= $request->file('profile_image');
              $extenstion= $file->getClientOriginalExtension();
              $filename=time().'.'.$extenstion;
              $file->move('uploads/profile_image/', $filename);
              $participant->profile_image=$filename;
         }
        $participant->save();
        return redirect()->route('admin.participants.index');
    }

    public function show(Participant $participant)
    {
        //abort_if(Gate::denies('participant_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.participants.show', compact('participant'));
    }

    public function destroy(Participant $participant)
    {
       // abort_if(Gate::denies('participant_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $participant->delete();

        return back();
    }

    public function massDestroy(MassDestroyParticipantRequest $request)
    {
        Participant::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

}
