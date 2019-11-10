@extends('admin.layout')
@section('content')
<div class="page-head">
    <h3 class="m-b-less">
        Permission
    </h3>
    <!--<span class="sub-title">Welcome to Static Table</span>-->
    <div class="state-information">
        <ol class="breadcrumb m-b-less bg-less">
            <li><a href="#">Home</a></li>
            <li><a href="#">Permissions</a></li>
        </ol>
    </div>
</div>
<!--body wrapper start-->
<div class="wrapper">

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-4">
                                    <h2>Permisions</h2>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#addModel">Add Permisions</button>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="">
                                <table class="table table-striped" id="table_data">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Display_name</th>
                                            <th>Created at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="addModelLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addModelLabel">New Permisions</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('store.permission')}}" class="form" id="add_form" method="POST">
            <div class="modal-body">
                @csrf     
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="edit_name" name="name" placeholder="Name" autocomplete="off" require >
                    <span class="text-red">
                        <strong class="name"></strong>
                    </span>
                </div>
                <div class="form-group">
                    <label>Display Name</label>
                    <input type="text" class="form-control" id="edit_display_name" name="display_name" placeholder="Display Name" autocomplete="off" require >
                    <span class="text-red">
                        <strong class="display_name"></strong>
                    </span>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" id="edit_description" name="description" placeholder="Description" autocomplete="off" require >
                    <span class="text-red">
                        <strong class="description"></strong>
                    </span>
                </div>
                <input type="hidden" name="edit_id" id="edit_id" value="">
            </div>
            <div class="modal-footer">
                <button type="sub" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" id="add_form_btn" value="Save">
            </div>
        </form>
        </div>
    </div>
</div>    
@endsection
@push('scripts')
<script src="{{ asset('js/data-table/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/data-table/js/dataTables.tableTools.min.js') }}"></script>
    <script src="{{ asset('js/data-table/js/bootstrap-dataTable.js') }}"></script>
    <script src="{{ asset('js/data-table/js/dataTables.colVis.min.js') }}"></script>
    <script src="{{ asset('js/data-table/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/data-table/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('js/data-table-init.js') }}"></script>
<script src="{{ asset('app_k.js')}}" type="text/javascript"></script>
<script type="text/javascript">
  var filterdata;
  var dataTableRoute = "{{ route('fetch.permission') }}";
  var editRoute      = "{{ route('edit.permission') }}";
  var deleteRoute   = "{{ route('destory.permission') }}";
  var token          = '{{csrf_token()}}';
  var data = [
                { "data": "id" },
                { "data": "name" },
                { "data": "display_name" },
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