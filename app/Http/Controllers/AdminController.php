<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\Comments;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class AdminController extends Controller
{
    // Login View
    function login(){
    	return view('backend.login');
    }
    // Submit Login
    function submit_login(Request $request){
    	$request->validate([
    		'username'=>'required',
    		'password'=>'required'
    	]);

    	$userCheck=Admin::where(['username'=>$request->username,'password'=>$request->password])->count();
    	if($userCheck>0){
            $adminData=Admin::where(['username'=>$request->username,'password'=>$request->password])->first();
            session(['adminData'=>$adminData]);
            $user = User::all();
            $usercount = $user->count();
            $post = Post::all();
            $postcount = $post->count();
            $comments = Comments::all();
            $comcount = $comments->count();
            $category = Category::all();
            $catcount = $category->count();
           //dd($usercount);
    		return view('backend.dashboard',compact(['usercount','postcount','comcount','catcount']));
    	}else{
    		return redirect('admin/login')->with('error','Invalid username/password!!');
    	}
        //'usercount'=>$usercount,'postcount'=>$postcount,'comcount'=>$comcount,'catcount'=>$catcount
    }
    // Dashboard
    function dashboard(){
        $user = User::all();
            $usercount = $user->count();
            $post = Post::all();
            $postcount = $post->count();
            $comments = Comments::all();
            $comcount = $comments->count();
            $category = Category::all();
            $catcount = $category->count();
    	return view('backend.dashboard',compact(['usercount','postcount','comcount','catcount']));
    }

    // Logout
    function logout(){
        session()->forget(['adminData']);
        return redirect('admin/login');
    }
}
