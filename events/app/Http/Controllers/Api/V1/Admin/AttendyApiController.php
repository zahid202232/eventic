<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttendyRequest;
use App\Http\Requests\UpdateAttendyRequest;
use App\Http\Resources\Admin\AttendyResource;
use App\Models\Attendy;
use App\Models\Participant;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AttendyApiController extends Controller
{
    public function index()
    {
        // abort_if(Gate::denies('attendy_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AttendyResource(Attendy::with(['participant', 'events'])->get());
    }
  public function attendies_event($id){
    $event = $event_id=Event::where('id',$id)->first();
    $attend = Attendy::where('event_id',$id)->get();

    $participant =[];
    foreach($attend as $item)
    {
        $particip = Participant::where('id',$item->participant_id)->first();
        $participant[] = $particip;
    }


    return response()->json([
    'event'=> $event,
      'participant' => $participant
    ]) ;
  }
    public function store(Request $request)
    {   $rules=array(
                 'code'=>'required|max:8|',

               );
               $validators=Validator::make($request->all(),$rules);
               if($validators->fails()){
                 return $validators->errors();
              }else{

        $attendy=new Attendy;
        $code = $request->code;
        $p_code=substr($code,0,4);
        $e_code=substr($code,4,8);
        $participant=Participant::where('token',$p_code)->first();
        $event=Event::where('token',$e_code)->first();
         $mergecode=$p_code.$e_code;
        $participant=Participant::where('token',$p_code)->first();
         $participant_token=$participant->token;
         $event_token=$event->token;
         $p_e_token=$participant_token.$event_token;
        if($mergecode == $p_e_token){
       // $attendy=new Attendy();
        $attendy->participant_id=$participant->id;
        $attendy->event_id=$event->id;
        $attendy->status=1;
        $attendy ->save();

            return response()->json([
                'participient' => $attendy,
                'message' => 'Attendy Add Successfully'
            ]);
        }else{
            return response()->json([
                'message' => 'Attendy Not Added Because Your Code Does not matched'
            ]);
        }
    }


    //     $rules=array(
    //         'participant_id'=>'required',
    //         'events' => 'required',

    //       );
    //       $validators=Validator::make($request->all(),$rules);
    //       if($validators->fails()){
    //          return $validators->errors();
    //       }else{

    //     $attendy = Attendy::create($request->all());
    //     $code = $request->code;
    //     $attendy->events()->sync($request->input('events', []));
    //     $participant=Participant::where('id',$attendy->participant_id)->first();
    //     $p_token=$participant->token;
    //     $events=$request->input('events');
    //     foreach((array) $events as $record){
    //         $event_token=Event::where('id', $record)->first();
    //         $e_token = $event_token->token;
    //         $details = $p_token.$e_token;
    //         if($details == $code){
    //             return response()->json([
    //                 'participient' => $attendy,
    //                 'message' => 'Attendy Add Successfully'
    //             ]);
    //         }else{
    //             return response()->json([
    //                 'message' => 'Attendy Not Added Because Your Code Does not matched'
    //             ]);
    //         }

    //     }


    //       }
    }

    public function show(Attendy $attendy)
    {
        abort_if(Gate::denies('attendy_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AttendyResource($attendy->load(['participant', 'events']));
    }

    public function update(UpdateAttendyRequest $request, Attendy $attendy)
    {
        $attendy->update($request->all());
        $attendy->events()->sync($request->input('events', []));

        return (new AttendyResource($attendy))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Attendy $attendy)
    {
        abort_if(Gate::denies('attendy_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $attendy->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
