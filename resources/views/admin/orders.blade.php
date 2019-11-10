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
                    <li><a href="#">Ordes</a></li>
                </ol>
            </div>
        </div>
        <!-- page head end-->

        <!--body wrapper start-->
              <section class="panel">
                    <header class="panel-heading">
                        Date Pickers
                        <span class="tools pull-right">
                            <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                            <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <form action="#" class="form-horizontal" id="filterform">

                            <div class="form-group">
                                <label class="control-label col-md-3">Date Range</label>
                                <div class="col-md-9">
                                    <div class="input-group input-large custom-date-range" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                                        <input type="text" class="form-control dpd1" name="from">
                                        <span class="input-group-addon">To</span>
                                        <input type="text" class="form-control dpd2" name="to">
                                    </div>
                                    <span class="help-block">Select date range</span>
                                </div>
                            </div>
                            <button type="submit" class="pull-right btn btn-primary" id="searchRecords">Search
                            <i class="fa fa-search"></i></button>
                            <button type="button" class="btn btn-primary" id="clearform">Clear</button>
                        </form>
                    </div>
                    
                </section>
        <div class="wrapper">
                <div class="row">
                    
                        <div class="col-sm-12">
                            <section class="panel">
                               
                            <table class="table convert-data-table data-table" id="table_data">
                            <thead>
                            <tr>
                                <th>Order #</th>
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


    <script type="text/javascript" src="js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="js/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="js/picker-init.js"></script>


    <script src="{{ asset('app_k.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
      var filterdata;
      var dataTableRoute = "{{ route('fetchallorders') }}";
      
      var token          = '{{csrf_token()}}';
      var data = [
     
                    { "data": "order_no" },
                    { "data": "full_name" },
                    { "data": "company" },
                    { "data": "mobile_no" },
                    { "data": "email" },
                    { "data": "colldate" },
                    { "data": "subtotal" },
                    { "data": "lavytax" },
                    { "data": "govtax" },
                    { "data": "netamount" },
                    { "data": "created_at" },
                    { "data": "options" ,"orderable":false},
                ]

    $( document ).ready(function() {
      InitTable();
    });
    // Filter Form Data
    $(document).on('submit', '#filterform', function (e) {
        e.preventDefault();
        filterdata = $('#filterform').serializeArray();
        InitTable();
    });
    $(document).on('click', '#clearform', function (e) {
        e.preventDefault();
        filterdata = null;
        InitTable();
    });

    </script>   
    
@endpush