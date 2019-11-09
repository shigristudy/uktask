@extends('admin.layout')
@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href=""><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">@lang('website.roles')</li>
                            <li class="breadcrumb-item active">@lang('website.roles')</li>
                        </ul>
                    </div>            
                    
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-4">
                                    <h2>@lang('website.roles')</h2>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#addModel">@lang('website.add_role')</button>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive" style="width:100%">
                                <table class="table table-striped" id="table_data" style="width:100%">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Display Name</th>
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
            <h5 class="modal-title" id="addModelLabel">@lang('website.add_role')</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('store.roles')}}" class="form" id="add_form" method="POST">
            <div class="modal-body">
                @csrf     
                <div class="form-group">
                    <label>@lang('website.name')</label>
                    <input type="text" class="form-control" id="edit_name" name="name" placeholder="@lang('website.name')" autocomplete="off" require >
                    <span class="text-red">
                        <strong class="name"></strong>
                    </span>
                </div>
                <div class="form-group">
                    <label>@lang('website.display_name')</label>
                    <input type="text" class="form-control" id="edit_display_name" name="display_name" placeholder="@lang('website.display_name')" autocomplete="off" require >
                    <span class="text-red">
                        <strong class="display_name"></strong>
                    </span>
                </div>
                <div class="form-group">
                    <label>@lang('website.description')</label>
                    <input type="text" class="form-control" id="edit_description" name="description" placeholder="@lang('website.description')" autocomplete="off" require >
                    <span class="text-red">
                        <strong class="description"></strong>
                    </span>
                </div>
                <div class="row">
                    @foreach ($permissions as $permission)
                        <div class="col-md-6">
                            <label class="fancy-checkbox element-left">
                                <input type="checkbox" name="permissions[]" value="{{ $permission->id }}">
                                <span>{{ $permission->display_name }}</span>
                            </label>
                        </div>
                    @endforeach
                </div>
                <input type="hidden" name="edit_id" id="edit_id" value="">
            </div>
            <div class="modal-footer">
                <button type="sub" class="btn btn-secondary" data-dismiss="modal">@lang('website.close')</button>
                <input type="submit" class="btn btn-primary" id="add_form_btn" value="@lang('website.save')">
            </div>

        </form>
        </div>
    </div>
</div>    
@endsection
@push('scripts')
<script src="{{ asset('app_k.js')}}" type="text/javascript"></script>
<script type="text/javascript">
  var filterdata;
  var dataTableRoute = "{{ route('fetch.roles') }}";
  var deleteRoute   = "{{ route('destory.roles') }}";
  var token          = '{{csrf_token()}}';
  var data = [
                { "data": "id" },
                { "data": "name" },
                { "data": "display_name" },
                { "data": "created_at" },
                { "data": "options" ,"orderable":false},
            ]

$( document ).ready(function() {
    console.log('asdfasdf')
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