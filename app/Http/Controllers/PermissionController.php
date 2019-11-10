<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Role;
use App\Permission;
use Illuminate\Support\Facades\DB;
use DataTables;
use Validator;
use Auth;
class PermissionController extends Controller
{
    // Permission Listing Page
    public function index()
    {
        return view('admin.permissions');
    }

    public function fetch(Request $request){

        $data = Permission::orderBy('id','desc')->get();
        return DataTables::of($data)
        ->addColumn('created_at',function($data){
            return $data->created_at->format('d-M-Y');
        })
        ->addColumn('options',function($data){
            
            return "&emsp;<a class='btn btn-success edit_model'
                                     href='#' data-id='".$data->id."'><i class='fa fa-edit'></i></a>
                                     <a data-toggle='tooltip' data-placement='bottom' title='Delete' class='btn btn-danger delete' data-original-title='Disable' href='#' data-id='".$data->id."'><i class='fa fa-trash'></i></a>
                                     ";
                               
        })
        ->rawColumns(['created_at','options'])
        ->make(true);
    }

    // Roles Store to DB
    public function store(Request $request)
    {
        if(isset($request->edit_id) && ($request->edit_id !="")){
            $namevalidation = 'required';
        }else{
            $namevalidation = 'required|unique:permissions';
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
            $user_id = Auth::user()->id;
            if(isset($request->edit_id) && ($request->edit_id !="") ) {
            
                $data = Permission::findOrFail($request->edit_id);
                $data->name = $request->name;
                $data->display_name     = $request->display_name;
                $data->description     = $request->description;
                $data->save(); 
                $success = 'Document has been updated.';
                return response()->json($success);

            }else{
                $data = New Permission;
                $data->name = $request->name;
                $data->display_name     = $request->display_name;
                $data->description     = $request->description;
                $data->save();
                $success = 'Document has been created.';
                return response()->json($success);
           }
        }

    }

    public function edit(Request $request)
    {
      $data = Permission::findOrFail($request->id);
      return response()->json($data);

    }
    

    // Permission Delete from DB
    public function destroy($id)
    {
        //
        try {
            $permission = Permission::findOrFail($id);
            DB::table("permission_role")->where('permission_id', $id)->delete();
            $permission->delete();
            
            return redirect()->route('permission.index')->with('success', "The Role <strong>$permission->name</strong> has successfully been archived.");
        } catch (ModelNotFoundException $ex) {
            if ($ex instanceof ModelNotFoundException) {
                return response()->view('errors.' . '404');
            }
        }
    }
}
