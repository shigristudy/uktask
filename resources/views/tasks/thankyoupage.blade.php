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
            {{-- <a href="#" class="btn festive-btn m-auto">DOWNLOAD FESTIVE BROCHURE</a> --}}
          </div>
          <div class="col-md-12 text-center mb-5">
            {{-- <a href="#" class="btn festive-btn m-auto">DOWNLOAD FESTIVE BROCHURE</a> --}}
          </div>
  
          <h2>Thank You For Your Order</h2>
        
      </div>
    </div>
  </div>
</div>
</section>

  
@endsection
