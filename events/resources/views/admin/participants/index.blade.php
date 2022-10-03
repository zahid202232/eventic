@extends('layouts.admin')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.participants.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.participant.title_singular') }}
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        {{ trans('cruds.participant.title_singular') }} {{ trans('global.list') }}
    </div>
    <form action="{{ route('admin.excel') }}" method="Post" enctype="multipart/form-data">
        @csrf
        <label for="excel" >Excel</label>
    <input type="file" id="excel" name="excel" class="d-none">
    <input type="submit" value="upload Excel">
    </form>
    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Participant">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.participant.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.participant.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.participant.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.participant.fields.profile_image') }}
                        </th>
                        <th>
                            {{ trans('cruds.participant.fields.phone') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (Auth::User()->roles[0]->title == 'Admin')
                    @foreach($all_participants as $key => $participant)
                    <tr data-entry-id="{{ $participant->id }}">
                        <td>

                        </td>
                        <td>
                            {{ $participant->id ?? '' }}
                        </td>
                        <td>
                            {{ $participant->name ?? '' }}
                        </td>
                        <td>
                            {{ $participant->email ?? '' }}
                        </td>
                        <td>
                            {{ $participant->profile_image ?? '' }}
                        </td>
                        <td>
                            {{ $participant->phone ?? '' }}
                        </td>
                        <td>

                                <a class="btn btn-xs btn-primary" href="{{ route('admin.participants.show', $participant->id) }}">
                                    {{ trans('global.view') }}
                                </a>



                                <a class="btn btn-xs btn-info" href="{{ route('admin.participants.edit', $participant->id) }}">
                                    {{ trans('global.edit') }}
                                </a>



                                <form action="{{ route('admin.participants.destroy', $participant->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>


                        </td>

                    </tr>
                @endforeach
                    @endif
                    @if (Auth::User()->roles[0]->title == 'company')
                    @foreach($participants as $key => $participant)
                        <tr data-entry-id="{{ $participant->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $participant->id ?? '' }}
                            </td>
                            <td>
                                {{ $participant->name ?? '' }}
                            </td>
                            <td>
                                {{ $participant->email ?? '' }}
                            </td>
                            <td>
                                {{ $participant->profile_image ?? '' }}
                            </td>
                            <td>
                                {{ $participant->phone ?? '' }}
                            </td>
                            <td>

                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.participants.show', $participant->id) }}">
                                        {{ trans('global.view') }}
                                    </a>



                                    <a class="btn btn-xs btn-info" href="{{ route('admin.participants.edit', $participant->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>



                                    <form action="{{ route('admin.participants.destroy', $participant->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>


                            </td>

                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('participant_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.participants.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Participant:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection
