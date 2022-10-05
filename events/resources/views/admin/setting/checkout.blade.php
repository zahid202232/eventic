@extends('layouts.admin')
@section('content')
@can('attendy_create')
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">

    </div>
</div>
@endcan
<div class="card">
    <div class="card-header">
        checkout
    </div>


    <div class="col-lg-8 pt-8 pt-lg-0 card-body">
        <!-- <div class="card box"> -->
        <form name="checkout_settings" method="post" novalidate="novalidate">
            <div id="form">
                <div class="form-group">
                    <label for="form_checkout_timeleft" class="required" id="timeleft">
                        Timeleft
                    </label>
                    <small id="form_checkout_timeleft_help" class="form-text text-muted mb-3">
                        <i class="fas fa-info-circle text-primary mr-1"></i>
                        Number of seconds before the reserved tickets are released if the order is still awaiting
                        payment
                    </small>
                    <div class="input-group  bootstrap-touchspin bootstrap-touchspin-injected">
                        
                        <span class="input-group-btn-vertical">
                        <div class="btn">
                    <!-- <input type="number" id="incrementText" > -->
                                                                        <input id="incrementText4" >
                                                                         <button onclick="IncrementsssButton()" type="button">+</button>
                                                                          <button onclick="decrmentsssButton()" type="button">-</button>

                                                                                 </div>
                            <!-- <button class="btn btn-primary bootstrap-touchspin-up " type="button">+</button> -->
                            <!-- <button class="btn btn-primary bootstrap-touchspin-up " type="button">-</button> -->
                        </span>
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
// 


function IncrementsssButton() {
    var element = document.getElementById('incrementText4');
    var v = element.value;
    ++v;
    console.log(v);
    document.getElementById('incrementText4').value = v;
}

function decrmentsssButton() {
    var element = document.getElementById('incrementText4');
    var v = element.value;
    --v;
    document.getElementById('incrementText4').value = v;
}
</script>
@endsection