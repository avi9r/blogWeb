<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data= User::all();
        return view('backend.user.index',[
            'data'=>$data,
        ]);
    }

    public function edit($id)
    {
       
        $data=User::find($id);
        return view('backend.user.update',['data'=>$data]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            
        ]);

        $post=User::find($id);
        $post->name=$request->name;
        $post->email=$request->email;
        $post->save();

        return redirect('admin/user/'.$id.'/edit')->with('success','Data has been updated');
    }

    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect('admin/user');
    }
}
