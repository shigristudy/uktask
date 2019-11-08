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
  
          <h2>Christmas Offer</h2>
          <form class="detail-form" method="post" action="{{ route('store_order') }}">
            @csrf
          <div id="accordion" class="christmas-accordian">
            <div class="card chris-card">
              <div class="card-header chris-head" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Whole Roast Turkey<i class="fas fa-chevron-down"></i>
                  </button>
                </h5>
              </div>
  
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body chris-body">
                  <div class="touch">
                    <div class="row">
                      <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                        <label class="signa">Signature Roasts BD 9.000 Per KG</label>
                        <select class="form-control select custom-select" name="whole_roast">
                          <option>SELECT YOUR TURKEY OPTION</option>
                          <option value="Mustard Honey Glazed">Mustard Honey Glazed</option>
                          <option value="Apple And Honey Glazed">Apple And Honey Glazed</option>
                        </select>
                        <p class="include">(includes root vegetables, potatoes, cranberry sauce, gravy and traditional stuffing)</p>
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 price roast-price">
                        <p>BD <span class="item-price" data-price="9.00">9.000</span></p>
                        <input type="hidden" class="hidden_item-price" name="whole_roast_price">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2">
                        <div class="counter roast-count">
                          <span class="minus"><i class="fas fa-minus"></i></span>
                          <input type="text" value="0" class="form-control qty-input" name="whole_roast_price_qty">
                          <span class="plus"><i class="fas fa-plus"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card chris-card">
              <div class="card-header chris-head" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                   Christmas Confections<i class="fas fa-chevron-down"></i>
                 </button>
               </h5>
             </div>
             <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body chris-body">
                <div class="touch">
                  <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                      <h3>Pistachio Stollen</h3>
                      <p>Per 500 gms</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 price">
                      <input type="hidden" name="row_id_1" value="Pistachio Stollen">
                      <p>BD <span class="item-price" data-price="12.000">12.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="price_row_id_1">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input" name="qty_row_id_1">
                        <span class="plus"><i class="fas fa-plus"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="touch">
                  <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                      <h3>Christmas Stollen</h3>
                      <p>Per 500 gms</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 price">
                      <input type="hidden" name="row_id_2" value="Christmas Stollen">
                      <p>BD <span class="item-price" data-price="8.000">8.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="price_row_id_2">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input" name="qty_row_id_2">
                        <span class="plus"><i class="fas fa-plus"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="touch">
                  <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                      <h3>Gingerbread House</h3>
                      <p>Per 1.5 KG</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 price">
                      <input type="hidden" name="row_id_3" value="Gingerbread House">
                      <p>BD <span class="item-price" data-price="25.000">25.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="price_row_id_3">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input" name="qty_row_id_3">
                        <span class="plus"><i class="fas fa-plus"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="touch">
                  <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                      <h3>Gingerbread Christmas Cookies</h3>
                      <p>Per Piece</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 price">
                        <input type="hidden" name="row_id_4" value="Gingerbread House">
                      <p>BD <span class="item-price" data-price="1.000">1.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="price_row_id_4">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input" name="qty_row_id_4">
                        <span class="plus"><i class="fas fa-plus"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="touch">
                  <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                      <h3>Festive French Macarons</h3>
                      <p>Per 1 Dozen</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 price">
                        <input type="hidden" name="row_id_5" value="Festive French Macarons">
                      <p>BD <span class="item-price" data-price="6.000">6.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="price_row_id_5">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input" name="qty_row_id_5">
                        <span class="plus"><i class="fas fa-plus"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="touch">
                  <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                      <h3>Christmas Fruit Cake</h3>
                      <p>Per 1 KG</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 price">
                      <input type="hidden" name="row_id_6" value="Christmas Fruit Cake">
                      <p>BD <span class="item-price" data-price="20.000">20.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="price_row_id_6">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input" name="qty_row_id_6">
                        <span class="plus"><i class="fas fa-plus"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="touch">
                  <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                      <h3>Chocolate Tree With Nuts and Dry Fruits</h3>
                      <p></p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 price">
                      <input type="hidden" name="row_id_7" value="Chocolate Tree With Nuts and Dry Fruits">
                      <p>BD <span class="item-price" data-price="12.000">12.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="price_row_id_7">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input" name="qty_row_id_7">
                        <span class="plus"><i class="fas fa-plus"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="touch">
                  <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                      <h3>Cinnamon Apple Strudel</h3>
                      <p>Per 500 gms</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 price">
                      <input type="hidden" name="row_id_8" value="Cinnamon Apple Strudel">
                      <p>BD <span class="item-price" data-price="10.000">10.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="price_row_id_8">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input" name="qty_row_id_8">
                        <span class="plus"><i class="fas fa-plus"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="touch">
                  <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                      <h3>Mini Panettone</h3>
                      <p>Per 100 gms</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 price">
                      <input type="hidden" name="row_id_9" value="Mini Panettone">
                      <p>BD <span class="item-price" data-price="3.500">3.500</span></p>
                      <input type="hidden" class="hidden_item-price" name="price_row_id_9">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input" name="qty_row_id_9">
                        <span class="plus"><i class="fas fa-plus"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="touch">
                  <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                      <h3>Mini Panettone Amarena Cherry</h3>
                      <p>Per 100 gms</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 price">
                      <input type="hidden" name="row_id_10" value="Mini Panettone Amarena Cherry">
                      <p>BD <span class="item-price" data-price="3.500">3.500</span></p>
                      <input type="hidden" class="hidden_item-price" name="price_row_id_10">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input" name="qty_row_id_10">
                        <span class="plus"><i class="fas fa-plus"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="touch">
                  <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                      <h3>Panettone Rose Water</h3>
                      <p>Per 600 gms</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 price">
                      <input type="hidden" name="row_id_11" value="Panettone Rose Water">
                      <p>BD <span class="item-price" data-price="11.000">11.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="price_row_id_11">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input" name="qty_row_id_11">
                        <span class="plus"><i class="fas fa-plus"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="touch">
                  <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                      <h3>Panettone Classic</h3>
                      <p>Per 1 KG</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 price">
                      <input type="hidden" name="row_id_12" value="Panettone Classic">
                      <p>BD <span class="item-price" data-price="15.000">15.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="price_row_id_12">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input" name="qty_row_id_12">
                        <span class="plus"><i class="fas fa-plus"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="touch">
                  <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                      <h3>Panettone Pandoro Classic</h3>
                      <p>Per 1 KG</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 price">
                      <input type="hidden" name="row_id_13" value="Panettone Pandoro Classic">
                      <p>BD <span class="item-price" data-price="15.000">15.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="price_row_id_13">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input" name="qty_row_id_13">
                        <span class="plus"><i class="fas fa-plus"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="buche-de">
                  <h2>Buche De Noel:</h2>
                </div>
                <div class="touch">
                  <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                      <h3>Chocolate Buche De Noel <br class="d-none d-lg-block"> With Crunchy Zatar Tuile</h3>
                      <p>Per 1.5 KG</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 price">
                      <input type="hidden" name="row_id_14" value="Chocolate Buche De Noel With Crunchy Zatar Tuile">
                      <p>BD <span class="item-price" data-price="20.000">20.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="price_row_id_14">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input" name="qty_row_id_14">
                        <span class="plus"><i class="fas fa-plus"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="touch">
                  <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                      <h3>Classic Madagascar Vanilla</h3>
                      <p>Per 1.5 KG</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 price">
                      <input type="hidden" name="row_id_15" value="Classic Madagascar Vanilla">
                      <p>BD <span class="item-price" data-price="20.000">20.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="price_row_id_15">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input" name="qty_row_id_15">
                        <span class="plus"><i class="fas fa-plus"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="touch">
                  <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                      <h3>Red Velvet Cinnamon</h3>
                      <p>Per 1.5 KG</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 price">
                      <input type="hidden" name="row_id_16" value="Red Velvet Cinnamon">
                      <p>BD <span class="item-price" data-price="20.000">20.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="price_row_id_16">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input" name="qty_row_id_16">
                        <span class="plus"><i class="fas fa-plus"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="touch">
                  <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                      <h3>Saffran Pistachio</h3>
                      <p>Per 1.5 KG</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 price">
                      <input type="hidden" name="row_id_17" value="Saffran Pistachio">
                      <p>BD <span class="item-price" data-price="23.000">23.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="price_row_id_17">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input" name="qty_row_id_17">
                        <span class="plus"><i class="fas fa-plus"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="touch">
                  <div class="row">
                    <div class="col-md-6 col-lg-7 col-xl-8 caramel">
                      <h3>Chestnut Marron Glace With Pear</h3>
                      <p>Per 1.5 KG</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 price">
                      <input type="hidden" name="row_id_18" value="Chestnut Marron Glace With Pear">
                      <p>BD <span class="item-price" data-price="23.000">23.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="price_row_id_18">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input" name="qty_row_id_18">
                        <span class="plus"><i class="fas fa-plus"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-md-5 bill-info float-right p-0">
          <div class="sub-total subtotal">
            <p>Subtotal</p>
            <span>BD 0.000</span>
            <input type="hidden" class="subtotal_hidden" name="subtotal_hidden">
          </div>
          <div class="sub-total subtotalevyTax">
            <p>10% Levy Tax</p>
            <span>BD 0.000</span>
            <input type="hidden" class="subtotalevyTax_hidden" name="subtotalevyTax_hidden">
          </div>
          <div class="sub-total subtotaGovtTax">
            <p>10% Govt Tax</p>
            <span>BD 0.000</span>
            <input type="hidden" class="subtotaGovtTax_hidden" name="subtotaGovtTax_hidden">
          </div>
          <div class="net-total">
            <p>Net Total</p>
            <span>BD 0.000</span>
            <input type="hidden" class="net-total_hidden" name="netotal">
          </div>
        </div>
  
      </div>
  
      <div class="col-md-12 personal-detail">
  
        <div class="detail-form">
           
             <h2>personal details</h2>
            <div class="row">
              <div class="form-group col-md-6 textfield">
                <label>Full Name</label>
                <input type="text" class="form-control" name="full_name" placeholder="Enter Full Name" required>
              </div>
              <div class="form-group col-md-6 textfield">
                <label>Company</label>
                <input type="text" class="form-control" name="company" placeholder="Smith Corporation">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6 textfield">
                <label>Mobile No</label>
                <input type="tel" class="form-control" name="mobile_no" placeholder="+973" required>
              </div>
              <div class="form-group col-md-6 textfield">
                <label>Office No</label>
                <input type="tel" class="form-control" name="office_no" placeholder="+973" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6 textfield">
                <label>Fax No</label>
                <input type="tel" class="form-control" name="fax_no" placeholder="+973">
              </div>
              <div class="form-group col-md-6 textfield">
                <label>Email Address</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email Address" required>
              </div>
            </div>
       
            <h2>collection details</h2>
    
            <div class="row">
              <div class="form-group col-md-12 textfield">
                <label>collection from</label>
                <select class="form-control select custom-select" name="collect_from">
                  <option selected>Select Collection From</option>
                  <option>Al Waha Restaurant, Lobby Level</option>
                  <option>Cafe Delices</option>
                </select>
              </div>
              <div class="form-group col-md-6 textfield">
                <label>collection date</label>
                <input type="text" placeholder="" class="form-control date-picker-input" id="colldate" name="colldate">
                <img src="assets/img/date.png" class="img-fluid date-icon" alt="">
              </div>
              <div class="form-group col-md-6 textfield">
                <label>Collection Time</label>
                <select name="" id="" class="form-control select custom-select" name="collect_time">
                  <option value="0" selected="selected">Select Time</option>
                  <option value="1">8am  - 12pm</option>
                  <option value="2">12pm - 4pm</option>
                  <option value="3">4pm - 8pm</option>
                </select>
              </div>
  
          </div>  
  
  
        <div class="payment">
          <h2>PAYMENT METHOD</h2>
          <div class="form-check pay-radio">
            <input class="form-check-input" type="radio" name="pay" value="dcc" checked>
            <label class="form-check-label radio-label">
              <img src="assets/img/credit-card.png" class="img-fluid" alt="">Different Credit Card
            </label>
          </div>
          <div class="form-check pay-radio">
            <input class="form-check-input" type="radio" name="pay" value="dc">
            <label class="form-check-label radio-label">
              <img src="assets/img/debit-card.png" class="img-fluid" alt="">Debit Card
            </label>
          </div>
          <div class="form-check pay-radio">
            <input class="form-check-input" type="radio" name="pay" value="cod">
            <label class="form-check-label">
              <img src="assets/img/cash.png" class="img-fluid" alt="">Cash
            </label>
          </div>
        </div>
        <button type="submit" class="btn next-btn">NEXT</button>
        
    </div>
    </form>
        <div class="ticket-terms">
          <h2>Terms and conditions</h2>
          <ul class="terms-nav">
            <li>All prices are subject to 5% government levy and 5% VAT.</li>
            <li>Advance orders with full pre payment (non-refundable) are required at least 3 days prior to pick up.</li>
          </ul>
        </div>
  
        <div class="col-md-10 text-center m-auto">
          <div class="we-accept">
            <h2>WE ACCEPT</h2>
            <span></span>
  
            <ul class="nav cards">
              <li><img class="img-responsive" src="assets/img/visa.png" alt=""></li>
              <li><img class="img-responsive" src="assets/img/visa-debit.png" alt=""></li>
              <li><img class="img-responsive" src="assets/img/master.png" alt=""></li>
              <li><img class="img-responsive" src="assets/img/american-express.png" alt=""></li>
              <li><img class="img-responsive" src="assets/img/jcb.png" alt=""></li>
            </ul>
  
          </div>
        </div>
  
        <div class="col-md-12 text-center">
          <img class="img-responsive" src="assets/img/powered-by.png" alt="">
        </div>
  
      </div>
  
    </div>
  </div>
  </section>
  
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.minus').click(function () {
              var $input = $(this).parent().find('input');
              var count = parseInt($input.val()) - 1;
              count = count < 1 ? 1 : count;
              $input.val(count);
              $input.change();
              return false;
            });
            $('.plus').click(function () {
              var $input = $(this).parent().find('input');
              $input.val(parseInt($input.val()) + 1);
              $input.change();
              return false;
            });
            $('.qty-input').change(function(e){
              
              $(this).val($(this).val())
              var qty = parseInt($(this).val());
              var price_response = $(this).parents('.touch').find('.item-price');
              var hidden_price_response = $(this).parents('.touch').find('.hidden_item-price');
              var price = parseFloat(price_response.data('price'));
              $(price_response).html((qty*price).toFixed(3));
              $(hidden_price_response).val((qty*price).toFixed(3));
              

              calculateSubtotal();
            });

            function calculateSubtotal(){
              var sum = 0;
              $('.hidden_item-price').each(function() {
                  sum += Number($(this).val());
              });
              
              $('.subtotal').find('span').text(sum.toFixed(3));
              $('.subtotal_hidden').val(sum.toFixed(3));
              
              var subtotalevyTax = Number((sum *  0.05).toFixed(3));
              var subtotaGovtTax = Number((sum *  0.05).toFixed(3));
              $('.subtotalevyTax').find('span').text(subtotalevyTax.toFixed(3));
              $('.subtotalevyTax_hidden').val(subtotalevyTax.toFixed(3));
              $('.subtotaGovtTax').find('span').text(subtotaGovtTax.toFixed(3));
              $('.subtotaGovtTax_hidden').val(subtotalevyTax.toFixed(3));
              $('.net-total').find('span').text((sum + subtotalevyTax + subtotaGovtTax).toFixed(3));
              $('.net-total_hidden').val((sum + subtotalevyTax + subtotaGovtTax).toFixed(3));
            }
        });
    </script>
@endpush