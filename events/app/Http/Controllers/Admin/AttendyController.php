<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAttendyRequest;
use App\Http\Requests\StoreAttendyRequest;
use App\Http\Requests\UpdateAttendyRequest;
use App\Models\Attendy;
use App\Models\Event;
use App\Models\Participant;
use Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AttendyController extends Controller
{
    public function index()
    {

        $attendies = Attendy::with(['participant', 'events'])->get();

        return view('admin.attendies.index', compact('attendies'));
    }

    public function create()
    {
       // abort_if(Gate::denies('attendy_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       $id=Auth::user()->id;
       $participants = Participant::where('company_id',$id)->pluck('name','id');
        $events = Event::where('company_id',$id)->pluck('title','id');
        $all_participants = Participant::pluck('name','id');
        $all_events = Event::pluck('title','id');
        return view('admin.attendies.create', compact('events', 'participants','all_participants','all_events'));
    }

    public function store(Request $request)
    {
        //return $request->events[0];
        $attendy = Attendy::create($request->all());
        $event =Event::where('id',$request->events[0])->get();
        $attendy->event_id=$event[0]->id;
        //dd($event[0]->id);
        $attendy->events()->sync($request->input('events', []));
        $attendy->save();

        return redirect()->route('admin.attendies.index');
    }

    public function edit(Attendy $attendy)
    {
        //abort_if(Gate::denies('attendy_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $id=Auth::user()->id;
        $participants = Participant::where('company_id',$id)->pluck('name','id');
         $events = Event::where('company_id',$id)->pluck('title','id');
         $all_participants = Participant::pluck('name','id');
         $all_events = Event::pluck('title','id');
        $attendy->load('participant', 'events');

        return view('admin.attendies.edit', compact('attendy', 'events', 'participants','all_participants','all_events'));
    }

    public function update(Request $request, Attendy $attendy)
    {
        $attendy->update($request->all());
        $attendy->events()->sync($request->input('events', []));

        return redirect()->route('admin.attendies.index');
    }

    public function show(Attendy $attendy)
    {
        //abort_if(Gate::denies('attendy_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $attendy->load('participant', 'events');

        return view('admin.attendies.show', compact('attendy'));
    }

    public function destroy(Attendy $attendy)
    {
       // abort_if(Gate::denies('attendy_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $attendy->delete();

        return back();
    }

    public function massDestroy(MassDestroyAttendyRequest $request)
    {
        Attendy::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
