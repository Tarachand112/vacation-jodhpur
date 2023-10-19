<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DataTables;

class CustomerController extends Controller
{
	public function customer() {
		return view('admin.users.index');
	}

	public function index() {
		$users = User::select('id', 'name', 'email', 'mobile_number')->where('role', 'customer')->get();
        return Datatables::of($users)
          ->editColumn('name', function ($data) {
              return $data->name;
           })
          ->editColumn('mobile_number', function ($data) {
              return $data->mobile_number;
           })
         
           ->editColumn('email', function ($data) {
             return $data->email;
          })
          ->addColumn('action', function ($data) {
            	return '<div class="action-list"><a href="' . url('customer/edit',$data->id) . '" class="btn btn-success"> <i class="fas fa-edit"></i>Edit</a> 
            	<button class="btn btn-danger" type="button" onclick="myFunction('.$data->id.')"><i class="fas fa-trash-alt"></i></a></button></div>';
        })
        ->rawColumns(['action'])
        ->toJson();
	}

	public function edit($id = null) {
		if($id) {
			$user = User::find($id);
			return view('admin.users.edit', compact('user'));
		}
		return view('admin.users.edit');
	}

	public function store(Request $request) {
		$users = Users::find(1);
		if ($request->hasFile('side_bar_image')) {
			$imageName = time() . '_' . $request->file('side_bar_image')->getClientOriginalName();
			$request->file('side_bar_image')->move('admin/assets/img', $imageName);
			$setting['side_bar_image'] = $imageName;
		}
		$setting->footer_text = $request->footer_text;
		$setting->save();

		return redirect()->back()->with('success', 'Added successfully.');
	}
}
