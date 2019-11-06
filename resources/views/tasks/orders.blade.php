@extends('tasks.layout')
@section('content')
<section class="x-mas-2">
    <style>
        .table .thead-dark th {
    color: #fff;
    background-color: #a92d3e;
    border-color: #a92d3e;
}</style>
    <div class="container">
      <div class="row">
        <div class="col-md-12 christmas-offer">
           <div class="row">
               <div class="col-md-2">
                    <div class="logo-sec">
                        <a href="#"><img src="{{ asset('task/assets/img/logo.png') }}" class="img-fluid logo" alt="logo"></a>
                    </div>
               </div>
               <div class="col-md-10">
                    <h2 style="position: relative;top: 50px;">All Offers</h2>
                </div>    
           </div>
         
           <hr>
           <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Company</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Lavy Tax</th>
                    <th scope="col">Govt Tax</th>
                    <th scope="col">Net Amount</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($orders as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->full_name }}</td>
                        <td>{{ $item->company }}</td>
                        <td>{{ $item->mobile_no }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->colldate }}</td>
                        <td>{{ $item->orderdetails->subtotal }}</td>
                        <td>{{ $item->orderdetails->lavytax }}</td>
                        <td>{{ $item->orderdetails->govtax }}</td>
                        <td>{{ $item->orderdetails->netamount }}</td>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-eye"></i></button></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
      </div>
  
    </div>
  </div>
  </section>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        ...
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>
    </div>
</div>
</div>
@endsection
@push('scripts')

@endpush