<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Attendy;
use App\Models\Company;
use App\Models\Participant;
use PDF;
class HomeController
{
    public function index()
    {
        $event=Event::count();
        $company=Company::count();
        $participant=Participant::count();
        return view('home',compact('event','company','participant'));
    }

	public function logoutuser(Request $request )
    {
         auth()->logout();
		 return redirect()->back();
    }
    public function report(){
        $events= DB::table('events')->select('title','id')->get();
        return view('admin.report.report',compact('events'));
    }
    public function event_participant(Request $request){

        $data = Event::where('id',$request->event_id)->with('participants','attendies')->get();


        if(!is_null($data)){
            foreach($data[0]->attendies as $item){

                $attendies[]=Participant::where('id',$item->participant_id)->first();

                $event_data =
                [
                    'data' => $data,
                    'attendies'=>$attendies
                ];
            }
            // dd($event_data);
            $pdf = PDF::loadView('admin.pdf.eventpdf', $event_data);
            return $pdf->download('eventdata.pdf');
        }else{
            return 'No record Found';
        }
    }
}
