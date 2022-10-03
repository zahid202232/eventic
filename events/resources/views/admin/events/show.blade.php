@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.event.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.events.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.id') }}
                        </th>
                        <td>
                            {{ $event->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.title') }}
                        </th>
                        <td>
                            {{ $event->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.description') }}
                        </th>
                        <td>
                            {{ $event->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.time') }}
                        </th>
                        <td>
                            {{ $event->time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.date') }}
                        </th>
                        <td>
                            {{ $event->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.venue') }}
                        </th>
                        <td>
                            {{ $event->venue }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.duration') }}
                        </th>
                        <td>
                            {{ $event->duration }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.company') }}
                        </th>
                        <td>
                            {{ $event->company->name ?? '' }}
                        </td>
                    </tr>
                    <tr>  <td>Participants</td>
                        <th>

                            {{--  {{ trans('cruds.event.fields.participant') }}  --}}
                            @foreach($event->participants as $key => $participant)
                                <tr>
                                    <td><span class="label label-info">{{ $participant->name }}</span></td>
                                    <td>


                                        <div class="form-check form-switch">
                                            <input class="form-check-input toggle_button" name="status" type="checkbox" role="switch" {{ ($participant->status) == 1 ? 'checked' : '' }} value="{{ $participant->id }}" id="{{$event->id}}" />
                                            <label class="form-check-label" for="{{$event->id ?? '' }}"></label>
                                          </div>

                                    </td>
                                </tr>
                            @endforeach
                        </th>

                        <td>


                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.events.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".toggle_button").click(function(){
                var status = $(this).prop('checked') == true ? 1 : 0;
            var name = $(this).attr('name');
            var id = $(this).attr('id');
            var P_id = $(this).val();
            console.log(name);
            $.ajax({

                type: "POST",
                dataType: "json",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "{{ route('admin.event_status') }}",
                data: {'status': status, 'name': name, 'id': id,'P_id':P_id},
                success: function(data){
                Swal.fire(
                             'Congratulations!',
                             'Status Updated Sucessfully',
                             'success'
                             );
             }
          });
            });
          });

    </script>
