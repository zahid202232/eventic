@extends('layouts.admin')
@section('content')
<div class="content"style="padding-top: 20px;margin-left: 15px;">
  <div class="main-dash-board">
  <div class="dash-bord mb-3">
  <i class="fas fa-home"></i>
      </div>
      <p>Dashboard</p>
      </div>
	<div class="row">
         <div class="col-md-4 ">
                <div class="card o-hidden border-0">
                  <div class="cir1">

                  </div>
                  <div class="cir2">

                  </div>
                  <div class="bg-gradiant gradient-1 b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i class="fas fa-building"></i> </div>
                      <div class="media-body"><span class="m-0">Total Registered Companies</span>
                        <h4 class="mb-0 counter">{{ $company ? $company:'' }}</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="card o-hidden border-0">
                <div class="cir1">

                    </div>
                    <div class="cir2">

                    </div>
                  <div class="bg-gradiant b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i class="fa-solid fas fa-calendar-check"></i></i></div>
                      <div class="media-body"><span class="m-0">Events</span>
                        <h4 class="mb-0 counter">{{ $event ? $event:''  }}</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="card o-hidden border-0">
                <div class="cir1">

                    </div>
                    <div class="cir2">

                    </div>
                  <div class="bg-gradiant gradient-3 b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i class="fa-solid fas fa-user-check"></i></div>
                      <div class="media-body"><span class="m-0">Total participant</span>
                        <h4 class="mb-0 counter">{{ $participant ?  $participant:''  }}</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
