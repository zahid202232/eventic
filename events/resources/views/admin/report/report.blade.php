@extends('layouts.admin')
@section('content')

<div class="card" style="margin-top: 30px;">
    <div class="card-header">
        Events Select
    </div>
{{--  @dd($events);  --}}
    <div class="card-body">
        <form method="POST" action="{{ route("admin.event.participant") }}" >
            @csrf
            <div class="form-group">
                <label class="required" for="title">Events</label>
                <select class="form-control"  data-placeholder="Выберите теги" name="event_id" >
                        @foreach($events as $event)
                            <option value="{{ $event->id }}">{{ $event->title }}</option>
                        @endforeach
                  </select>
            </div>
            {{--  <div class="form-group">
                <label class="required" for="title">Events</label>
                <select class="form-control select2 {{ $errors->has('title') ? 'is-invalid' : '' }}" name="participant_id" id="participant_id" required>
                    @foreach($events as $event)
                        <option value="{{ $event->id }}">{{ $event->title  }}</option>
                    @endforeach
                </select>
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif

            </div>  --}}

            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('Report') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
