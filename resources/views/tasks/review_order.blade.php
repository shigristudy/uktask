@extends('tasks.layout')
@section('content')
<section class="x-mas-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12 christmas-offer">
            @if(Session('message'))
            <div class="alert alert-success">
                <p>{{ Session('message') }}</p>
            </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <div class="logo-sec">
            <a href="#"><img src="{{ asset('task/assets/img/logo.png') }}" class="img-fluid logo" alt=""></a>
            <div class="call-us">
              <span>CALL US</span>
              <p>(+973) 17 713000</p>
            </div>
          </div>
  
          <div class="col-md-12 text-center mb-5">
            <a href="#" class="btn festive-btn m-auto">DOWNLOAD FESTIVE BROCHURE</a>
          </div>
  
          <h2>Confirm Your Order</h2>
          <div id="accordion" class="christmas-accordian">
            <div class="card chris-card">
              
              <div>
                <div class="card-body chris-body">
                <div class="touch" style="padding: 10px;">
                <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                        <p>Item Name</p>
                    </div>
                    
                    <div class="col-md-3 col-lg-3 col-xl-2 caramel">
                        <p>Quantity</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 caramel">
                        <p>Price</p>
                    </div>
                </div>
                </div>
                @php
                    $order_list = Session::get('orderlist');
                @endphp
                @foreach ($order_list[0] as $item)
                  <div class="touch" style="padding: 10px;">
                    <div class="row">
                      <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                        <h4>{{ $item['name'] }}</h4>
                      </div>
                      
                      <div class="col-md-3 col-lg-3 col-xl-2 price">
                        <h4>{{ $item['qty'] }}</h4>
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 price">
                        <h4>{{ $item['price'] }}</h4>
                        </div>
                    </div>
                  </div>
                  @endforeach
                  
                </div>
              </div>
            </div>
        </div>
        @php
            $orderdetail = Session::get('orderdetails');
            $orderdetail = $orderdetail[0];
        @endphp
        <div class="col-md-5 bill-info float-right p-0">
          <div class="sub-total subtotal">
            <p>Subtotal</p>
            <span>BD {{ $orderdetail['subtotal_hidden'] }}</span>
          </div>
          <div class="sub-total subtotalevyTax">
            <p>10% Levy Tax</p>
            <span>BD {{ $orderdetail['subtotalevyTax_hidden'] }}</span>
          </div>
          <div class="sub-total subtotaGovtTax">
            <p>10% Govt Tax</p>
            <span>BD {{ $orderdetail['subtotaGovtTax_hidden'] }}</span>
          </div>
          <div class="net-total">
            <p>Net Total</p>
            <span>BD {{ $orderdetail['netotal'] }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<div class="x-mas-2">
  <div class="personal-detail">
    <form method="POST" action="{{ route('confirmorder') }}">
      @csrf
      <button type="submit" class="btn next-btn">Yes Order</button>
    </form>
  </div>
</div>
  
@endsection
