@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.attendy.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.attendies.update", [$attendy->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            @if (Auth::User()->roles[0]->title == 'Admin')
            <div class="form-group">
                <label class="required" for="participant_id">{{ trans('cruds.attendy.fields.participant') }}</label>
                <select class="form-control select2 {{ $errors->has('participant') ? 'is-invalid' : '' }}" name="participant_id" id="participant_id" required>
                    @foreach($all_participants as $id => $entry)
                        <option value="{{ $id }}" {{ (old('participant_id') ? old('participant_id') : $attendy->participant->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('participant'))
                    <span class="text-danger">{{ $errors->first('participant') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.attendy.fields.participant_helper') }}</span>
            </div>
            @endif
            @if (Auth::User()->roles[0]->title == 'company')
            <div class="form-group">
                <label class="required" for="participant_id">{{ trans('cruds.attendy.fields.participant') }}</label>
                <select class="form-control select2 {{ $errors->has('participant') ? 'is-invalid' : '' }}" name="participant_id" id="participant_id" required>
                    @foreach($participants as $id => $entry)
                        <option value="{{ $id }}" {{ (old('participant_id') ? old('participant_id') : $attendy->participant->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('participant'))
                    <span class="text-danger">{{ $errors->first('participant') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.attendy.fields.participant_helper') }}</span>
            </div>
            @endif
            @if (Auth::User()->roles[0]->title == 'company')
            <div class="form-group">
                <label class="required" for="events">{{ trans('cruds.attendy.fields.event') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('events') ? 'is-invalid' : '' }}" name="events[]" id="events" multiple required>
                    @foreach($events as $id => $event)
                        <option value="{{ $id }}" {{ (in_array($id, old('events', [])) || $attendy->events->contains($id)) ? 'selected' : '' }}>{{ $event }}</option>
                    @endforeach
                </select>
                @if($errors->has('events'))
                    <span class="text-danger">{{ $errors->first('events') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.attendy.fields.event_helper') }}</span>
            </div>
            @endif
            @if (Auth::User()->roles[0]->title == 'admin')
            <div class="form-group">
                <label class="required" for="events">{{ trans('cruds.attendy.fields.event') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('events') ? 'is-invalid' : '' }}" name="events[]" id="events" multiple required>
                    @foreach($all_events as $id => $event)
                        <option value="{{ $id }}" {{ (in_array($id, old('events', [])) || $attendy->events->contains($id)) ? 'selected' : '' }}>{{ $event }}</option>
                    @endforeach
                </select>
                @if($errors->has('events'))
                    <span class="text-danger">{{ $errors->first('events') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.attendy.fields.event_helper') }}</span>
            </div>
            @endif
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
