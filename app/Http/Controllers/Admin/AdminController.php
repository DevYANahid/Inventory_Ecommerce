<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function list()
    {
        $data['getRecord'] = User::getAdmin();
        $data['header_title']='Admin List';
        return view('admin.admin.list',$data);
    }
    public function add()
    {
     
        $data['header_title']='Add New Admin';
        return view('admin.admin.add',$data);
    }
    public function insert(Request $request)
    {
        request()->validate([
            'email' => 'required|email|unique:users'
        ]);
       $user = new User;
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       $user->status = $request->status;
       $user->is_admin = 1;
        $user->save();

        return redirect('admin/admin/list')->with('success',"Admin Successfully Created");
    }
    public function edit($id)
    {
        $data['getRecord'] = User::getSingle($id);
        $data['header_title']='Edit Admin';
        return view('admin.admin.edit',$data);
    }
    public function update($id,Request $request)
    {
        request()->validate([
            'email' => 'required|email|unique:users,email,'.$id
        ]);
       $user = User::getSingle($id);
       $user->name = $request->name;
       $user->email = $request->email;
       if(!empty($request->password))
       {
        $user->password = Hash::make($request->password);
       }

       $user->status = $request->status;
       $user->is_admin = 1;
        $user->save();

        return redirect('admin/admin/list')->with('success',"Admin Successfully Updated");
    }
    public function delete($id)
    {
        $user = User::getSingle($id);
        $user-> is_delete = 1;
        $user->save();

        return redirect('admin/admin/list')->with('success',"Admin Successfully Delete");
        
    }
}
