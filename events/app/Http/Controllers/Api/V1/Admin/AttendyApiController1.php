<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttendyRequest;
use App\Http\Requests\UpdateAttendyRequest;
use App\Http\Resources\Admin\AttendyResource;
use App\Models\Attendy;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AttendyApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('attendy_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AttendyResource(Attendy::with(['participant', 'events'])->get());
    }

    public function store(StoreAttendyRequest $request)
    {
        $attendy = Attendy::create($request->all());
        $attendy->events()->sync($request->input('events', []));

        return (new AttendyResource($attendy))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
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
