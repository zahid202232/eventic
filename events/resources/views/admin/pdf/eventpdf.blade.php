<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Event Data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

@php
    $total_participant=$data[0]->participants->count();
    $total_attendies=$data[0]->attendies->count();
@endphp
    <div class="container">

    {{--  <div class="logo_image" style="width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 26px;">  --}}
{{--  <img src="{{ asset('images/logotip-identiks-en.png') }}" alt="logo">  --}}
    {{--  </div>  --}}
{{--  @dd($attendies[0]->participant);  --}}

<div class="m-4">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Event Name</th>
                <td>{{ $data[0]->title ? $data[0]->title:''}}</td>
            </tr>
            <tr>
                <th>ParticiPant</th>

                <td>{{ $total_participant ? $total_participant:'' }}</td>

            </tr>
            <tr>
                <th>Attendies</th>

                <td>{{  $total_attendies  ? $total_attendies:''}}</td>

            </tr>
        </thead>
    </table>
    <h3>Participant Data</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>

            </tr>
        </thead>
        <tbody>
            @if (  !is_null($data[0]->participants))
         @foreach ($data[0]->participants as $item)
            <tr>
                <td>{{ $item->name ? $item->name:''  }}</td>
                <td>{{ $item->email ?  $item->email:'' }}</td>
                <td>{{ $item->phone ? $item->phone:'' }}</td>
            </tr>
          @endforeach

        @else
            No Record Found
         @endif
        </tbody>
    </table>
</div>
<div class="m-4">
    <h3>Attendies Data</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @if ( !is_null($attendies))

         @foreach ($attendies as $items )
            <tr>
                <td>{{ $items->name ? $items->name:''}}</td>
                <td>{{ $items->email ?  $items->email:'' }}</td>
                <td>{{ $items->phone ? $items->phone:'' }}</td>
            </tr>
         @endforeach

       @else
            No Record Found
       @endif
      </tbody>
    </table>
</div>
</div>
</body>
</html>
