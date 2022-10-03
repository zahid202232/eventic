@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.participant.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.participants.update", [$participant->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.participant.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $participant->name) }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.participant.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.participant.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $participant->email) }}" required>
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.participant.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="profile_image">{{ trans('cruds.participant.fields.profile_image') }}</label>
                <input class="form-control {{ $errors->has('profile_image') ? 'is-invalid' : '' }}" type="file" name="profile_image" id="profile_image" value="{{ old('profile_image', $participant->profile_image) }}">
                <img src="{{ asset('uploads/profile_image/' . $participant->profile_image) }}" alt="image"
                class="card-img">
                @if($errors->has('profile_image'))
                    <span class="text-danger">{{ $errors->first('profile_image') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.participant.fields.profile_image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.participant.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $participant->phone) }}">
                @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.participant.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
