<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreParticipantRequest;
use App\Http\Requests\UpdateParticipantRequest;
use App\Http\Resources\Admin\ParticipantResource;
use App\Models\Participant;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ParticipantApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('participant_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ParticipantResource(Participant::all());
    }

    public function store(StoreParticipantRequest $request)
    {
        $participant = Participant::create($request->all());

        return (new ParticipantResource($participant))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Participant $participant)
    {
        abort_if(Gate::denies('participant_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ParticipantResource($participant);
    }

    public function update(UpdateParticipantRequest $request, Participant $participant)
    {
        $participant->update($request->all());

        return (new ParticipantResource($participant))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Participant $participant)
    {
        abort_if(Gate::denies('participant_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $participant->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
