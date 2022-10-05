@extends('layouts.admin')
@section('content')
@can('attendy_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
           
        </div>
    </div>
@endcan
<div class="col-lg-9 mt-4 mt-lg-0">
  <div class="card">
    <div class="card-header">
      <h6 class="b mb-0 float-lg-left">Global payment settings</h6>
      <a
        href="/en/dashboard/administrator/settings/payment/manage-currencies"
        class="btn btn-primary ml-3 float-lg-right"
        ><i class="fas fa-coins"></i> Manage currencies</a
      >
    </div>
    <div class="card-body">
      <form name="payment_settings" method="post" novalidate="novalidate">
        <div id="form">
          <div class="form-group">
            <label class="required" for="form_currency">Currency</label>
            <div class="select2-container select2 form-control"
              id="s2id_form_currency">
              <a href="javascript:void(0)" class="select2-choice" tabindex="-1">
                <span class="select2-chosen" id="select2-chosen-1">USD
                    </span>
                <abbr class="select2-search-choice-close"></abbr>
                <span class="select2-arrow" role="presentation"
                  ><b role="presentation"></b></span></a
              ><label for="s2id_autogen1" class="select2-offscreen"
                >Currency</label>
              <input
                class="select2-focusser select2-offscreen"
                type="text"
                aria-haspopup="true"
                role="button"
                aria-labelledby="select2-chosen-1"
                id="s2id_autogen1"
                data-slug-id="currency"
                data-has-form="false"
                data-category="user-data"
              />
              <div
                class="select2-drop select2-display-none select2-with-searchbox"
              >
                <div class="select2-search">
                  <label for="s2id_autogen1_search" class="select2-offscreen"
                    >Currency</label
                  >
                  <input
                    type="text"
                    autocomplete="off"
                    autocorrect="off"
                    autocapitalize="off"
                    spellcheck="false"
                    class="select2-input"
                    role="combobox"
                    aria-expanded="true"
                    aria-autocomplete="list"
                    aria-owns="select2-results-1"
                    id="s2id_autogen1_search"
                    placeholder=""
                  />
                </div>
                <ul
                  class="select2-results"
                  role="listbox"
                  id="select2-results-1"
                ></ul>
              </div>
            </div>
            <select
              id="form_currency"
              name="form[currency]"
              class="select2 form-control select2-offscreen"
              tabindex="-1"
              title="Currency"
              data-slug-id="usd-currency-select-one"
              data-has-form="false"
              data-category="user-data"
            >
              <option value="1">AED</option>
              <option value="2">AFN</option>
              <option value="3">ALL</option>
              <option value="4">AMD</option>
              <option value="5">AOA</option>
              <option value="6">ARS</option>
              <option value="7">AUD</option>
              <option value="8">AWG</option>
              <option value="9">AZN</option>
              <option value="10">BAM</option>
              <option value="11">BBD</option>
              <option value="12">BDT</option>
              <option value="13">BGN</option>
              <option value="14">BHD</option>
              <option value="15">BIF</option>
              <option value="16">BMD</option>
              <option value="17">BND</option>
              <option value="18">BOB</option>
              <option value="19">BRL</option>
              <option value="20">BSD</option>
              <option value="21">BTN</option>
              <option value="22">BWP</option>
              <option value="23">BYN</option>
              <option value="24">BZD</option>
              <option value="25">CAD</option>
              <option value="26">CDF</option>
              <option value="27">CHF</option>
              <option value="28">CLP</option>
              <option value="29">CNY</option>
              <option value="30">COP</option>
              <option value="31">CRC</option>
              <option value="32">CUP</option>
              <option value="33">CVE</option>
              <option value="34">CZK</option>
              <option value="35">DJF</option>
              <option value="36">DKK</option>
              <option value="37">DOP</option>
              <option value="38">DZD</option>
              <option value="39">EGP</option>
              <option value="40">ERN</option>
              <option value="41">ETB</option>
              <option value="42">EUR</option>
              <option value="43">FJD</option>
              <option value="44">FKP</option>
              <option value="45">GBP</option>
              <option value="46">GEL</option>
              <option value="47">GHS</option>
              <option value="48">GIP</option>
              <option value="49">GMD</option>
              <option value="50">GNF</option>
              <option value="51">GTQ</option>
              <option value="52">GYD</option>
              <option value="53">HKD</option>
              <option value="54">HNL</option>
              <option value="55">HRK</option>
              <option value="56">HTG</option>
              <option value="57">HUF</option>
              <option value="58">IDR</option>
              <option value="59">ILS</option>
              <option value="60">INR</option>
              <option value="61">IQD</option>
              <option value="62">IRR</option>
              <option value="63">ISK</option>
              <option value="64">JMD</option>
              <option value="65">JOD</option>
              <option value="66">JPY</option>
              <option value="67">KES</option>
              <option value="68">KGS</option>
              <option value="69">KHR</option>
              <option value="70">KPW</option>
              <option value="71">KRW</option>
              <option value="72">KWD</option>
              <option value="73">KYD</option>
              <option value="74">KZT</option>
              <option value="75">LAK</option>
              <option value="76">LBP</option>
              <option value="77">LKR</option>
              <option value="78">LRD</option>
              <option value="79">LSL</option>
              <option value="80">LYD</option>
              <option value="81">MAD</option>
              <option value="82">MDL</option>
              <option value="83">MGA</option>
              <option value="84">MKD</option>
              <option value="85">MMK</option>
              <option value="86">MNT</option>
              <option value="87">MOP</option>
              <option value="88">MRU</option>
              <option value="89">MUR</option>
              <option value="90">MVR</option>
              <option value="91">MWK</option>
              <option value="92">MXN</option>
              <option value="93">MYR</option>
              <option value="94">MZN</option>
              <option value="95">NAD</option>
              <option value="96">NGN</option>
              <option value="97">NIO</option>
              <option value="98">NOK</option>
              <option value="99">NPR</option>
              <option value="100">NZD</option>
              <option value="101">OMR</option>
              <option value="102">PAB</option>
              <option value="103">PEN</option>
              <option value="104">PGK</option>
              <option value="105">PHP</option>
              <option value="106">PKR</option>
              <option value="107">PLN</option>
              <option value="108">PYG</option>
              <option value="109">QAR</option>
              <option value="110">RON</option>
              <option value="111">RSD</option>
              <option value="112">RUB</option>
              <option value="113">RWF</option>
              <option value="114">SAR</option>
              <option value="115">SBD</option>
              <option value="116">SCR</option>
              <option value="117">SDG</option>
              <option value="118">SEK</option>
              <option value="119">SGD</option>
              <option value="120">SHP</option>
              <option value="121">SLL</option>
              <option value="122">SOS</option>
              <option value="123">SRD</option>
              <option value="124">STN</option>
              <option value="125">SYP</option>
              <option value="126">SZL</option>
              <option value="127">THB</option>
              <option value="128">TJS</option>
              <option value="129">TMT</option>
              <option value="130">TND</option>
              <option value="131">TOP</option>
              <option value="132">TRY</option>
              <option value="133">TTD</option>
              <option value="134">TWD</option>
              <option value="135">TZS</option>
              <option value="136">UAH</option>
              <option value="137">UGX</option>
              <option value="138" selected="selected">USD</option>
              <option value="139">UYU</option>
              <option value="140">UZS</option>
              <option value="141">VEF</option>
              <option value="142">VND</option>
              <option value="143">VUV</option>
              <option value="144">WST</option>
              <option value="145">XAF</option>
              <option value="146">XCD</option>
              <option value="147">XPF</option>
              <option value="148">YER</option>
              <option value="149">ZAR</option>
              <option value="150">ZMW</option>
              <option value="151">ZWL</option>
              <option value="152">Sol</option>
              <option value="153">XOF</option>
              <option value="154">tsh</option>
            </select>
          </div>
          <fieldset class="form-group">
            <legend class="col-form-label required">
              Currency symbol position
            </legend>
            <div id="form_position">
              <div class="custom-control custom-radio custom-control-inline">
                <input
                  type="radio"
                  id="form_position_0"
                  name="form[position]"
                  required="required"
                  class="custom-control-input"
                  value="left"
                  data-slug-id="usd-left-radio"
                  data-has-form="false"
                  data-category="user-data"
                />
                <label
                  class="custom-control-label "
                  for="form_position_0"
                  >Left</label
                >
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input
                  type="radio"
                  id="form_position_1"
                  name="form[position]"
                  required="required"
                  class="custom-control-input"
                  value="right"
                  checked="checked"
                  data-slug-id="usd-right-radio"
                  data-has-form="false"
                  data-category="user-data"
                />
                <label
                  class="custom-control-label "
                  for="form_position_1"
                  >Right</label
                >
              </div>
            </div>
          </fieldset>
          <div class="form-group">
            <label for="form_ticket_fee_online" class="required"
              >Ticket fee (Online)</label
            ><small
              id="form_ticket_fee_online_help"
              class="form-text text-muted mb-3"
            >
              <i class="fas fa-info-circle text-primary mr-1"></i>This fee will
              be added to the ticket sale price which are bought online, put 0
              to disable additional fees for tickets which are bought online,
              does not apply for free tickets, will be applied to future
              orders</small
            >
            <div
              class="input-group bootstrap-touchspin bootstrap-touchspin-injected"
            >
              <span
                class="input-group-addon input-group-prepend bootstrap-touchspin-prefix"
                ></span
              >  <div class="form-group">
                        <div class="input-group  bootstrap-touchspin bootstrap-touchspin-injected">
                        
                        <div class="btn">
    <!-- <input type="number" id="incrementText" > -->
    <input id="incrementText12" >
    
    <button  type ="button" onclick="IncrementButton()">+</button>
    <button type="button" onclick="decrmentButton()">-</button>
  </div>
            </div>
          </div>
          <div class="form-group" style="display: none">
            <label for="form_ticket_fee_pos" class="required"
              >Ticket fee (Point Of Sale)</label
            ><small
              id="form_ticket_fee_pos_help"
              class="form-text text-muted mb-3"
            >
              <i class="fas fa-info-circle text-primary mr-1"></i>This fee will
              be added to the ticket sale price which are bought from a point of
              sale, put 0 to disable additional fees for tickets which are
              bought from a point of sale, does not apply for free tickets, will
              be applied to future orders</small
            >
            <div
              class="input-group bootstrap-touchspin bootstrap-touchspin-injected"
            >
              <span
                class="input-group-addon input-group-prepend bootstrap-touchspin-prefix"
                ><span class="input-group-text">$</span></span
              > 
              <input
                type="text"
                id="form_ticket_fee_pos"
                name="form[ticket_fee_pos]"
                required="required"
                class="touchspin-decimal form-control"
                data-min="0"
                data-max="1000000"
                aria-describedby="form_ticket_fee_pos_help"
                value="0.00"
              /><span class="input-group-btn-vertical"
                ><button
                  class="btn btn-primary bootstrap-touchspin-up"
                  type="button" onclick="Increment()"
                >
                  +</button
                ><button
                  class="btn btn-primary bootstrap-touchspin-down"
                  type="button"
                >
                  -
                </button></span
              >
            </div>
          </div>
          <div class="form-group">
            <label
              for="form_online_ticket_price_percentage_cut"
              class="required"
              >Ticket price percentage cut (Online)</label
            ><small
              id="form_online_ticket_price_percentage_cut_help"
              class="form-text text-muted mb-3"
            >
              <i class="fas fa-info-circle text-primary mr-1"></i>This
              percentage will be deducted from each ticket sold online, upon
              organizer payout request, this percentage will be taken from each
              ticket sold online, will be applied to future orders</small
            >
            <div
              class="input-group bootstrap-touchspin bootstrap-touchspin-injected"
            >
            <div class="btn">
    <!-- <input type="number" id="incrementText" > -->
    <input id="incrementText13">
    <button type="button" onclick="IncremenButton()">+</button>
    <button type="button" onclick="decrmenButton()">-</button>
  </div>
            </div>
          </div>
          <div class="form-group" style="display: none">
            <label for="form_pos_ticket_price_percentage_cut" class="required"
              >Ticket price percentage cut (Point of sale)</label
            ><small
              id="form_pos_ticket_price_percentage_cut_help"
              class="form-text text-muted mb-3"
            >
              <i class="fas fa-info-circle text-primary mr-1"></i>This
              percentage will be deducted from each ticket sold on a point of
              sale, upon organizer payout request, this percentage will be taken
              from each ticket sold on a point of sale, will be applied to
              future orders</small
            >
            <div
              class="input-group bootstrap-touchspin bootstrap-touchspin-injected"
            >
              <input
                type="text"
                id="form_pos_ticket_price_percentage_cut"
                name="form[pos_ticket_price_percentage_cut]"
                required="required"
                class="touchspin-integer form-control"
                data-min="0"
                data-max="100"
                aria-describedby="form_pos_ticket_price_percentage_cut_help"
                value="0"
              /><span class="input-group-btn-vertical"
                ><button
                  class="btn btn-primary bootstrap-touchspin-up"
                  type="button"
                >
                  +</button
                ><button
                  class="btn btn-primary bootstrap-touchspin-down"
                  type="button"
                >
                  -
                </button></span
              >
            </div>
          </div>
          <fieldset class="form-group">
            <legend class="col-form-label required">
              Allow Paypal as a payout method for the organizers to receive
              their revenue
            </legend>
            <div id="form_organizer_payout_paypal_enabled">
              <div class="custom-control custom-radio custom-control-inline">
                <input
                  type="radio"
                  id="form_organizer_payout_paypal_enabled_0"
                  name="form[organizer_payout_paypal_enabled]"
                  required="required"
                  class="custom-control-input"
                  value="yes"
                  checked="checked"
                  data-slug-id="allow-paypal-as-a-payout-method-for-the-organizers-to-receive-their-revenue-yes-radio"
                  data-has-form="false"
                  data-category="user-data"
                />
                <label
                  class="custom-control-label "
                  for="form_organizer_payout_paypal_enabled_0"
                  >Yes</label
                >
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input
                  type="radio"
                  id="form_organizer_payout_paypal_enabled_1"
                  name="form[organizer_payout_paypal_enabled]"
                  required="required"
                  class="custom-control-input"
                  value="no"
                  data-slug-id="allow-paypal-as-a-payout-method-for-the-organizers-to-receive-their-revenue-no-radio"
                  data-has-form="false"
                  data-category="user-data"
                />
                <label
                  class="custom-control-label "
                  for="form_organizer_payout_paypal_enabled_1"
                  >No</label
                >
              </div>
            </div>
          </fieldset>
          <fieldset class="form-group">
            <legend class="col-form-label required">
              Allow Stripe as a payout method for the organizers to receive
              their revenue
            </legend>
            <div id="form_organizer_payout_stripe_enabled">
              <div class="custom-control custom-radio custom-control-inline">
                <input
                  type="radio"
                  id="form_organizer_payout_stripe_enabled_0"
                  name="form[organizer_payout_stripe_enabled]"
                  required="required"
                  class="custom-control-input"
                  value="yes"
                  checked="checked"
                  data-slug-id="allow-stripe-as-a-payout-method-for-the-organizers-to-receive-their-revenue-yes-radio"
                  data-has-form="false"
                  data-category="user-data"
                />
                <label
                  class="custom-control-label "
                  for="form_organizer_payout_stripe_enabled_0"
                  >Yes</label
                >
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input
                  type="radio"
                  id="form_organizer_payout_stripe_enabled_1"
                  name="form[organizer_payout_stripe_enabled]"
                  required="required"
                  class="custom-control-input"
                  value="no"
                  data-slug-id="allow-stripe-as-a-payout-method-for-the-organizers-to-receive-their-revenue-no-radio"
                  data-has-form="false"
                  data-category="user-data"
                />
                <label
                  class="custom-control-label "
                  for="form_organizer_payout_stripe_enabled_1"
                  >No</label
                >
              </div>
            </div>
            <br>
            <br>
            <br>
            <div class="form-save">
                        <button type="button" id="app_layout_settings_save" name="app_layout_settings[save]"
                            class="btn btn-primary btn">Save</button>
                    </div>
          </fieldset>
          
          <input
            type="hidden"
            id="form__token"
            name="form[_token]"
            value="9EPfM-wHC3gsFdB4G_7IU4WTNPdoN6RvJgJh-Z28ELk"
          />
        </div>
      </form>
    </div>
  </div>
  <div class="card mt-5">
    <div class="card-header">
      <h6 class="b mb-0 float-lg-left">Payment gateways</h6>
      <a
        href="/en/dashboard/administrator/settings/payment/gateways/add"
        class="btn btn-primary ml-3 float-lg-right"
        data-toggle="tooltip"
        title=""
        data-original-title="Add a new payment gateway"
        ><i class="fas fa-plus"></i
      ></a>
    </div>
    <div class="card-body">
      <table class="table table-hover table-vcenter text-nowrap">
        <thead>
          <tr>
            <th>Name</th>
            <th>Logo</th>
            <th>Status</th>
            <th>Order of appearance</th>
            <th class="text-center"><i class="fas fa-cog"></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Paypal Express Checkout</td>
            <td>
              <a
                class="fancybox"
                href="{{asset('images/p1.png')}}"
                data-toggle="tooltip"
                title=""
                data-original-title="Enlarge"
              >
                <img
                  src="{{asset('images/paypal.png')}}" id="img1"
                  class="img-thumbnail img-50-50"
                />
              </a>
            </td>
            <td>
              <span class="badge badge-success"
                ><i class="fas fa-eye fa-fw"></i> Enabled</span
              >
            </td>
            <td>1</td>
            <td class="text-center">
              <div class="item-action dropdown">
                <a
                  href="javascript:void(0)"
                  data-toggle="dropdown"
                  data-boundary="window"
                  class="icon"
                  ><i class="fas fa-ellipsis-v"></i
                ></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a
                    href="/en/dashboard/administrator/settings/payment/gateways/paypal-express-checkout/edit"
                    class="dropdown-item"
                    ><i class="dropdown-icon fas fa-edit fa-fw text-muted"></i>
                    Edit</a
                  >
                </div>
              </div>
            </td>
          </tr>

          <tr>
            <td>Stripe Checkout</td>
            <td>
              <a
                class="fancybox"
                href="/uploads/payment/gateways/5e96df683fa91912933591.png"
                data-toggle="tooltip"
                title=""
                data-original-title="Enlarge"
              >
                <img src="{{asset('images/stripe.png')}}" id="img1"
                  class="img-thumbnail img-50-50"
                />
              </a>
            </td>
            <td>
              <span class="badge badge-success"
                ><i class="fas fa-eye fa-fw"></i> Enabled</span
              >
            </td>
            <td>2</td>
            <td class="text-center">
              <div class="item-action dropdown">
                <a
                  href="javascript:void(0)"
                  data-toggle="dropdown"
                  data-boundary="window"
                  class="icon"
                  ><i class="fas fa-ellipsis-v"></i
                ></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a
                    href="/en/dashboard/administrator/settings/payment/gateways/stripe-checkout/edit"
                    class="dropdown-item"
                    ><i class="dropdown-icon fas fa-edit fa-fw text-muted"></i>
                    Edit</a
                  >
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection

@section('scripts')
<script>

function IncrementButton(){
    var element = document.getElementById('incrementText12');
    var v = element.value;
    ++v;
    console.log(v);
    document.getElementById('incrementText12').value=v;

}
function decrmentButton(){
    var element = document.getElementById('incrementText12');
    var v= element.value;
    --v;
   document.getElementById('incrementText12').value=v;
}
// +++++++++++++++++++++
// 

function IncremenButton(){
    var element = document.getElementById('incrementText13');
    var v = element.value;
    ++v;
    console.log(v);
    document.getElementById('incrementText13').value=v;
}
function decrmenButton(){
    var element = document.getElementById('incrementText13');
    var v= element.value;
    --v;
   document.getElementById('incrementText13').value=v;
}

// _____________________

function IncrementButton3(){
    var element = document.getElementById('incrementText3');
    var v = element.value;
    ++v;
    console.log(v);
    document.getElementById('incrementText3').value=v;
}
function decrmentButton3(){
    var element = document.getElementById('incrementText3');
    var v= element.value;
    --v;
   document.getElementById('incrementText3').value=v;

}

// 
</script>

@endsection



