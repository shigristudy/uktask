@extends('admin.layout')
@section('content')
        <!-- page head start-->
        <div class="page-head">
            <h3 class="m-b-less">
                Data Table
            </h3>
            <!--<span class="sub-title">Welcome to Static Table</span>-->
            <div class="state-information">
                <ol class="breadcrumb m-b-less bg-less">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Data Table</a></li>
                    <li class="active">Dynamic Data Table</li>
                </ol>
            </div>
        </div>
        <!-- page head end-->

        <!--body wrapper start-->
        <div class="wrapper">

                <div class="row">
                        <div class="col-sm-12">
                            <section class="panel">
                                <header class="panel-heading ">
                                    Convertable Data Table
                                    <span class="tools pull-right">
                                        <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                                        <a class="t-close fa fa-times" href="javascript:;"></a>
                                    </span>
                                </header>
                            <table class="table convert-data-table data-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Company</th>
                                <th>Mobile No</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Subtotal</th>
                                <th>Lavy Tax</th>
                                <th>Govt Tax</th>
                                <th>Net Amount</th>
                                <th>Created At</th>
                                <th>Action</th>
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
                                        <td>{{ $item->created_at }}</td>
                                        <td><a class="btn btn-primary" href="{{ route('fetchorderdetails',$item->id) }}">View</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                            </section>
                        </div>
    
                    </div>

        </div>
        <!--body wrapper end-->
        <!--footer section start-->
        <footer>
            2015 &copy; SlickLab by VectorLab.
        </footer>
        <!--footer section end-->

    </div>
@endsection

@push('scripts')
        <!--Data Table-->
    <script src="{{ asset('js/data-table/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/data-table/js/dataTables.tableTools.min.js') }}"></script>
    <script src="{{ asset('js/data-table/js/bootstrap-dataTable.js') }}"></script>
    <script src="{{ asset('js/data-table/js/dataTables.colVis.min.js') }}"></script>
    <script src="{{ asset('js/data-table/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/data-table/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('js/data-table-init.js') }}"></script>
    
@endpush