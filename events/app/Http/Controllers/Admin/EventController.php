<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEventRequest;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Company;
use App\Models\Event;
use App\Models\Attendy;
use App\Models\Participant;
use Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EventController extends Controller
{
    public function index()
    {
        //abort_if(Gate::denies('event_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
       $all_events=Event::all();
        $id=Auth::user()->id;
        $events = Event::where('company_id',$id)->get();

        return view('admin.events.index', compact('events','all_events'));
    }

    public function create()
    {
       // abort_if(Gate::denies('event_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $companies = Company::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $id=Auth::user()->id;
        $participants = Participant::where('company_id',$id)->pluck('name','id');
        $all_participants = Participant::pluck('name','id');
        return view('admin.events.create', compact('companies', 'participants','all_participants'));
    }

    public function store(Request $request)
    {
        $e_token=rand(1000,10000);
        $company_id=Auth::user()->id;
        $event = Event::create($request->all());
        $event->company_id=$company_id;
        $event->token=$e_token;
        $event->save();
        $event->participants()->sync($request->input('participants', []));
        return redirect()->route('admin.events.index');
    }

    public function edit(Event $event)
    {
       // abort_if(Gate::denies('event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $companies = Company::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $all_participants = Participant::pluck('name', 'id');
        $id=Auth::user()->id;
        $participants = Participant::where('company_id',$id)->pluck('name','id');
        $event->load('company', 'participants');

        return view('admin.events.edit', compact('companies', 'event', 'participants','all_participants'));
    }

    public function update(Request $request, Event $event)
    {
        $company_id=Auth::user()->id;
        $event->update($request->all());
        $event->company_id=$company_id;
        $event->participants()->sync($request->input('participants', []));
        $event->save();
        return redirect()->route('admin.events.index');
    }

    public function show(Event $event)
    {
       // abort_if(Gate::denies('event_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event->load('company', 'participants','attendies');
       // dd($event->id);
         $attendy=Attendy::where('event_id',$event->id)->get();
//  return $attendy;
    //  return  $attendy[0]->status;
        return view('admin.events.show', compact('event','attendy'));
    }

    public function destroy(Event $event)
    {
        //abort_if(Gate::denies('event_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event->delete();

        return back();
    }

    public function massDestroy(MassDestroyEventRequest $request)
    {
        Event::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
