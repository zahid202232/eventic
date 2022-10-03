@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header main-heading">
        {{ trans('global.create') }} {{ trans('cruds.event.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.events.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label class="required" for="title">{{ trans('cruds.event.fields.title') }}</label>
                        <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                        @if($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.event.fields.title_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="description">{{ trans('cruds.event.fields.description') }}</label>
                        <textarea rows="4" cols="" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', '') }}"></textarea>
                        <!-- <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', '') }}"> -->
                        @if($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.event.fields.description_helper') }}</span>
                    </div>
                    <div class="row">
                    <div class="col-md-3">
                    <div class="form-group">
                        <label for="time">{{ trans('cruds.event.fields.time') }}</label>
                        <input class="form-control timepicker {{ $errors->has('time') ? 'is-invalid' : '' }}" type="text" name="time" id="time" value="{{ old('time') }}">
                        @if($errors->has('time'))
                            <span class="text-danger">{{ $errors->first('time') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.event.fields.time_helper') }}</span>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                        <label class="required" for="date">{{ trans('cruds.event.fields.date') }}</label>
                        <input class="form-control date {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date') }}" required>
                        @if($errors->has('date'))
                            <span class="text-danger">{{ $errors->first('date') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.event.fields.date_helper') }}</span>
                    </div>
                    </div>
                    </div>



                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label class="required" for="venue">{{ trans('cruds.event.fields.venue') }}</label>
                        <input class="form-control {{ $errors->has('venue') ? 'is-invalid' : '' }}" type="text" name="venue" id="venue" value="{{ old('venue', '') }}" required>
                        @if($errors->has('venue'))
                            <span class="text-danger">{{ $errors->first('venue') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.event.fields.venue_helper') }}</span>
                </div>
                <div class="form-group">
                        <label for="duration">{{ trans('cruds.event.fields.duration') }}</label>
                        <input class="form-control {{ $errors->has('duration') ? 'is-invalid' : '' }}" type="text" name="duration" id="duration" value="{{ old('duration', '') }}">
                        @if($errors->has('duration'))
                            <span class="text-danger">{{ $errors->first('duration') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.event.fields.duration_helper') }}</span>
                </div>
                @if (Auth::User()->roles[0]->title == 'Admin')
                <div class="form-group">
                        <label class="required" for="participants">{{ trans('cruds.event.fields.participant') }}</label>
                        <div style="padding-bottom: 4px">
                            <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                            <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                        </div>
                        <select class="form-control select2 {{ $errors->has('participants') ? 'is-invalid' : '' }}" name="participants[]" id="participants" multiple required>
                            @foreach($all_participants as $id => $participant)
                                <option value="{{ $id }}" {{ in_array($id, old('participants', [])) ? 'selected' : '' }}>{{ $participant }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('participants'))
                            <span class="text-danger">{{ $errors->first('participants') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.event.fields.participant_helper') }}</span>
                </div>
                @endif
                @if (Auth::User()->roles[0]->title == 'company')
                <div class="form-group">
                        <label class="required" for="participants">{{ trans('cruds.event.fields.participant') }}</label>
                        <div style="padding-bottom: 4px">
                            <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                            <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                        </div>
                        <select class="form-control select2 {{ $errors->has('participants') ? 'is-invalid' : '' }}" name="participants[]" id="participants" multiple required>
                            @foreach($participants as $id => $participant)
                                <option value="{{ $id }}" {{ in_array($id, old('participants', [])) ? 'selected' : '' }}>{{ $participant }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('participants'))
                            <span class="text-danger">{{ $errors->first('participants') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.event.fields.participant_helper') }}</span>
                </div>
                @endif
                <div class="form-group">
                        <button class="btn btn-danger" type="submit">
                            <!-- {{ trans('global.save') }} -->
                            Create Event
                        </button>
                </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
