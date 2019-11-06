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
            <a href="#"><img src="assets/img/logo.png" class="img-fluid logo" alt=""></a>
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
                          <input type="text" value="0" class="form-control qty-input">
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
                      <p>BD <span class="item-price" data-price="12.000">12.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="pistachio_stollen">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input">
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
                      <p>BD <span class="item-price" data-price="8.000">8.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="christmas_stollen">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input">
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
                      <p>BD <span class="item-price" data-price="25.000">25.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="christmas_stollen">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input">
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
                      <p>BD <span class="item-price" data-price="1.000">1.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="gingerbread_christmas_cookies">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input">
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
                      <p>BD <span class="item-price" data-price="6.000">6.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="festive_french_macarons">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input">
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
                      <p>BD <span class="item-price" data-price="20.000">20.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="christmas_fruit_cake">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input">
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
                      <p>BD <span class="item-price" data-price="12.000">12.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="chocolate_tree">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input">
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
                      <p>BD <span class="item-price" data-price="10.000">10.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="cinnamon_apple_strudel">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input">
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
                      <p>BD <span class="item-price" data-price="3.500">3.500</span></p>
                      <input type="hidden" class="hidden_item-price" name="mini_panettone">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input">
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
                      <p>BD <span class="item-price" data-price="3.500">3.500</span></p>
                      <input type="hidden" class="hidden_item-price" name="mini_panettone_amarena">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input">
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
                      <p>BD <span class="item-price" data-price="11.000">11.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="panettone_rose_water">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input">
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
                      <p>BD <span class="item-price" data-price="15.000">15.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="panettone_classic">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input">
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
                      <p>BD <span class="item-price" data-price="15.000">15.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="panettone_pandoro_classic">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input">
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
                      <p>BD <span class="item-price" data-price="20.000">20.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="ChocolateBuche">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input">
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
                      <p>BD <span class="item-price" data-price="20.000">20.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="ClassicMadagascarVanilla">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input">
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
                      <p>BD <span class="item-price" data-price="20.000">20.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="RedVelvetCinnamon">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input">
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
                      <p>BD <span class="item-price" data-price="23.000">23.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="SaffranPistachio">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input">
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
                      <p>BD <span class="item-price" data-price="23.000">23.000</span></p>
                      <input type="hidden" class="hidden_item-price" name="ChestnutMarronGlace">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <div class="counter">
                        <span class="minus"><i class="fas fa-minus"></i></span>
                        <input type="text" value="0" class="form-control qty-input">
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
          <div class="sub-total">
            <p>Subtotal</p>
            <span>BD 25.000</span>
          </div>
          <div class="sub-total">
            <p>10% Levy Tax</p>
            <span>BD 2.000</span>
          </div>
          <div class="sub-total">
            <p>10% Govt Tax</p>
            <span>BD 2.500</span>
          </div>
          <div class="net-total">
            <p>Net Total</p>
            <span>BD 30.000</span>
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
        {{-- </form>
  
        <form class="detail-form"> --}}
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
              <!-- <input type="date" class="form-control pr-5" placeholder="Select Date" required> -->
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
  
        {{-- </form> --}}
  
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
              var qty = parseInt($(this).val());
              var price_response = $(this).parents('.touch').find('.item-price');
              var hidden_price_response = $(this).parents('.touch').find('.hidden_item-price');
              var price = parseFloat(price_response.data('price'));
              $(price_response).html((qty*price).toFixed(3));
              $(hidden_price_response).val((qty*price).toFixed(3));
              // console.log(price_response)
            });
        });
    </script>
@endpush