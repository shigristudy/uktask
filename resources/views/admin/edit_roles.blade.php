@extends('admin.layout')
@section('content')
<div class="page-head">
                <h3 class="m-b-less">
                    Roles
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Role</a></li>
                    </ol>
                </div>
            </div>
        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                          
                            <div class="body">
                                <form action="{{route('store.roles')}}" class="form" id="add_form" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" value="{{ $role->name }}" name="name" placeholder="Name" autocomplete="off" require >
                                        @if ($errors->has('name'))
                                        <span class="text-red">
                                            <strong> {{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Display Name</label>
                                        <input type="text" class="form-control" value="{{ $role->display_name }}" name="display_name" placeholder="Display Name" autocomplete="off" require >
                                        @if ($errors->has('display_name'))
                                        <span class="text-red">
                                            <strong> {{ $errors->first('display_name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" value="{{ $role->description }}" name="description" placeholder="Desciption" autocomplete="off" require >
                                        @if ($errors->has('description'))
                                        <span class="text-red">
                                            <strong> {{ $errors->first('description') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <input type="hidden" name="edit_id" id="edit_id" value="{{ $role->id }}">
                                    <div class="row">
                                        @foreach ($permissions as $permission)
                                            <div class="col-md-6">
                                                <label class="fancy-checkbox element-left">
                                                    <input type="checkbox" {{ in_array($permission->id,$role_permissions) ? 'checked' : '' }} name="permissions[]" value="{{ $permission->id }}">
                                                    <span>{{ $permission->display_name }}</span>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Update">
                                </form>
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
            <h5 class="modal-title" id="addModelLabel">Add Role</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('store.roles')}}" class="form" id="add_form" method="POST">
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
                    <input type="text" class="form-control" id="edit_description" name="description" placeholder="Desciption" autocomplete="off" require >
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
                <button type="sub" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" id="add_form_btn" value="Save">
            </div>

        </form>
        </div>
    </div>
</div>    
@endsection
