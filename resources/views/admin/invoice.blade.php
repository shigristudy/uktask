@extends('admin.layout')
@section('content')
<div class="wrapper">

        <div class="panel invoice">
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-4">
                        <div class="invoice-logo">
                            <img src="{{ asset('task/assets/img/logo.png') }}" alt=""/>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <h1>invoice</h1>
                    </div>
                    <div class="col-xs-4">
                        <div class="total-purchase">
                            Total Purchase
                        </div>
                        <div class="amount">
                           
                           ${{ $order_detail->netamount }}
                        </div>
                    </div>
                </div>

                <br/>
                <br/>
                <br/>
                <div class="row">
                    <div class="col-xs-4">

                        <address>
                            <strong>OFFICE ADDRESS</strong>
                            <br>Vector Lab
                            <br>
                            Road 1, House 2, Sector 3
                            <br>
                            ABC, Dreamland 1230
                            <br/>
                            P: +32 (123) 654-678
                        </address>
                    </div>
                    <div class="col-xs-4">
                        <strong>
                            TO
                        </strong>
                        <br/>{{ $order->full_name }}
                        <br/>Email: {{ $order->email }}
                        <br/>Mobile: {{ $order->mobile_no }}
                        <br/>Tel: {{ $order->office_no }}
                    </div>
                    <div class="col-xs-4 inv-info">
                        <strong>INVOICE INFO</strong>
                        <br/> <span> Invoice Number</span>	{{ $order->id }}
                        <br/><span> Invoice Date</span>	{{ $order->created_at }}
                        <br/> <span> Due Date</span>	{{ $order->colldate }}
                        <br/> <span> Invoice Status</span>	{{ $order->status }}
                    </div>
                </div>
                <br/>
                <br/>
                <br/>

                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th class="hidden-xs">ITEM</th>
                        <th class="">QUANTITY</th>
                        <th>PRICE</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($orderitems as $key => $item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td class="hidden-xs">{{ $item->item_name }}</td>
                            <td class="">{{ $item->qty }}</td>
                            <td>$ {{ $item->item_price }}</td>
                        </tr>
                    @endforeach    
                    
                    </tbody>
                </table>
                <br/>
                <br/>

                <div class="row">
                    <div class="col-xs-8">
                        <h4>PAYMENT METHOD</h4>
                        <ul class="list-unstyled">
                            <li>
                                1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </li>
                            <li>
                                2. Quisque iaculis sem nec eros placerat congue.
                            </li>
                            <li>
                                3. Donec eget magna sodales, condimentum sapien in, suscipit dui.
                            </li>
                            <li>
                                4. Nullam sed leo ornare dolor sodales tempus.
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-4">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <td>$ {{ $order_detail->subtotal }}</td>
                            </tr>
                            <tr>
                                <td>Lavy Tax</td>
                                <td>$ {{ $order_detail->lavytax }}</td>
                            </tr>

                            <tr>
                                <td>Gov Tax</td>
                                <td>$ {{ $order_detail->govtax }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>GRAND TOTAL</strong>
                                </td>
                                <td><strong>$ {{ $order_detail->netamount }}</strong></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <br/>
                <br/>
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-left">
                            <a class="btn btn-danger" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print</a>
                            <a href="#" class="btn btn-success">Generate PDF</a>
                        </div>
                        <div class="pull-right">
                            <a href="#" class="btn btn-success">Submit Payment</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection