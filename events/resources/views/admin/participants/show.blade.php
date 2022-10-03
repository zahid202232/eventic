@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.participant.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.participants.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.participant.fields.id') }}
                        </th>
                        <td>
                            {{ $participant->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.participant.fields.name') }}
                        </th>
                        <td>
                            {{ $participant->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.participant.fields.email') }}
                        </th>
                        <td>
                            {{ $participant->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.participant.fields.profile_image') }}
                        </th>
                        <td>
                            {{ $participant->profile_image }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.participant.fields.phone') }}
                        </th>
                        <td>
                            {{ $participant->phone }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.participants.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection