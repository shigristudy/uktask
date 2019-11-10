<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\Permission;
use App\User;
use Illuminate\Support\Facades\DB;
use DataTables;
use Validator;
use Auth;
class RolesController extends Controller
{
    // Roles Listing Page
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.roles',compact('permissions'));
    }

    public function fetch(Request $request){

        $data = Role::orderBy('id','desc')->get();
        return DataTables::of($data)
        ->addColumn('created_at',function($data){
            return $data->created_at->format('d-M-Y');
        })
        ->addColumn('options',function($data){
            
            return "&emsp;<a class='btn btn-success edit_model'
                                     href='".route('edit.roles',$data->id)."' data-id='".$data->id."'><i class='fa fa-edit'></i></a>
                                     <a data-toggle='tooltip' data-placement='bottom' title='".trans('website.cancel')."' class='btn btn-danger delete' data-original-title='Disable' href='#' data-id='".$data->id."'><i class='fa fa-trash'></i></a>
                                     ";
                               
        })
        ->rawColumns(['created_at','options'])
        ->make(true);
    }   

    // Roles Store to DB
    public function store(Request $request)
    {
        // dd($request->all());
        if(isset($request->edit_id) && ($request->edit_id !="")){
            $this->validate($request, [
                'name' => 'required',
                'display_name' => 'required',
                'description' => 'required',
            ]);
            $namevalidation = 'required';
        }else{
            $namevalidation = 'required|unique:roles';
        }
        $rules = array(
            'name' => $namevalidation,
            'display_name' => 'required',
            'description' => 'required',
        );

        $data = [
            'name' => $request->name,
            'display_name' => $request->display_name,
            'description' => $request->description,
            ];
        $validator = Validator::make($data,$rules);
     
        if($validator->fails()){
            return  response()->json(['errors'=>$validator->errors()]);
        }else {
            if(isset($request->edit_id) && ($request->edit_id !="") ) {

                DB::table("permission_role")->where("permission_role.role_id", $request->edit_id)->delete();
                // Attach permission to role
                $data = Role::findOrFail($request->edit_id);
                $data->name         = $request->name;
                $data->display_name = $request->display_name;
                $data->description  = $request->description;
                $data->save(); 
                foreach ($request->permissions as $key => $value) {
                    $data->attachPermission($value);
                }
                $success = 'Role has been updated.';
                return redirect()->route('roles.index');

            }else{
                $data = New Role;
                $data->name         = $request->name;
                $data->display_name = $request->display_name;
                $data->description  = $request->description;
                $data->save();

                $success = 'Role has been created.';
                return response()->json($success);
           }
        }
    }

    // Roles Delete Confirmation Page
    public function show($id)
    {
        //
        try {
            $role = Role::findOrFail($id);

            $params = [
                'title' => 'Delete Role',
                'role' => $role,
            ];

            return view('admin.roles.roles_delete')->with($params);
        } catch (ModelNotFoundException $ex) {
            if ($ex instanceof ModelNotFoundException) {
                return response()->view('errors.' . '404');
            }
        }
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        $role_permissions = $role->permissions()->get()->pluck('id')->toArray();
        return view('admin.edit_roles',compact('permissions','role_permissions','role'));
    }

    // Delete Roles from DB
    public function destroy(Request $request)
    {
        try {
            $role = Role::findOrFail($request->id);
            $role->users()->sync([]); // Delete relationship data
            $role->permissions()->sync([]); // Delete relationship data
            $role->forceDelete(); // Now force delete will work regardless of whether the pivot table has cascading delete
            $success = 'Role has been created.';
            return response()->json($success);
        } catch (ModelNotFoundException $ex) {
            if ($ex instanceof ModelNotFoundException) {
                return response()->view('errors.' . '404');
            }
        }
    }
}
