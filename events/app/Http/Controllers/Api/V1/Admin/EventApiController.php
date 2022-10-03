<?php

namespace App\Http\Controllers\Api\V1\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Http\Resources\Admin\EventResource;
use App\Models\Event;
use App\Models\Participant;
use Illuminate\Support\Facades\Validator;
use Gate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Milon\Barcode\BarcodeServiceProvider;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EventApiController extends Controller
{
    public function index()
    {
        // abort_if(Gate::denies('event_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return Event::with(['company', 'participants'])->get();
    }

    public function event_participants($id)
    {
        // abort_if(Gate::denies('event_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return Event::where('id',$id)->with(['company', 'participants'])->get();
    }

    public function company_event(){
        $event_id=Event::where('company_id',Auth::user()->id)->with('participants')->get();
        return $event_id;
    }
    public function store(Request $request)
    {
        $rules=array(
            'title'=>'required',
            'date' => 'required',
            'venue'=>'required',
          );
          $validators=Validator::make($request->all(),$rules);
          if($validators->fails()){
             return $validators->errors();
          }
          else{
            $e_token=rand(1000,10000);
            $company_id=Auth::user()->id;
            $event = Event::create($request->all());
            $event->participants()->sync(json_decode($request->input('participant')));
            if($request->hasfile('file')){
                $file= $request->file('file');
                $extenstion= $file->getClientOriginalExtension();
                $filename=time().'.'.$extenstion;
                $file->move('uploads/image/', $filename);
                $event->banner_image=$filename;
            }
            $event->token=$e_token;
            $event->company_id=$company_id;
            $event->save();
            $participant= $request->input('participant');
            $participant=(json_decode($participant));
            foreach((array) $participant as $record){
                $participant_token=Participant::where('id', $record)->first();
                $p_token = $participant_token->token;
                $details = $p_token.$e_token;
               
                Mail::to($participant_token->email)->send(new \App\Mail\EventMail($details,$participant_token));
            }
            return response()->json([
                'participient' => $event,
                'message' => 'Event Add Successfully'
            ]);
          }

    }

    public function show(Event $event)
    {
        abort_if(Gate::denies('event_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EventResource($event->load(['company', 'participants']));
    }

    public function update(Request $request,$id)
    {
        $event=Event::findOrfail($id);
        $rules=array(
            'title'=>'required',
            'date' => 'required',
            'venue'=>'required',
          );
          $validators=Validator::make($request->all(),$rules);
          if($validators->fails()){
             return $validators->errors();
          }else{
            $company_id=Auth::user()->id;
            $event->update($request->all());
            $event->participants()->sync(json_decode($request->input('participant')));
            $event->company_id=$company_id;
            if($request->hasfile('file')){
                $destination='uploads/image/'.$event->file;
               if(File::exists($destination)){
                  File::delete($destination);}
                  $file= $request->file('file');
                  $extenstion= $file->getClientOriginalExtension();
                  $filename=time().'.'.$extenstion;
                  $file->move('uploads/image/', $filename);
                  $event->banner_image=$filename;
             }
            $event->save();

        return response()->json([
            'participient' => $event,
            'message' => 'Event Update Successfully'
        ]);
          }
    }

    public function destroy($id)
    {
        $post=Event::where('id',$id);

        $post->delete();
		 if($post){
       //$post->delete();

	return ["message" => "Event Delete Successfully"];
		}
		else{
	return ["message" => "Event Not Delete "];
		}
    }
}
