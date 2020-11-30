<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comments;
use App\Models\Contactus;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
	
	function index()
	{
        return view('home');
    }
    // Post Detail
    
	
	function about()
	{
		return view('about');
	}

	function contact()
	{
		return view('contact');
	}

	function contactus(Request $request)
	{
		$request->validate([
			'email'=>'required',
			'name'=>'required',
			'address'=>'required',
			'state'=>'required',
			'city'=>'required'

		]);

		$data=new Contactus;
		$data->email=$request->email;
		$data->name=$request->name;
		$data->address=$request->address;
		$data->state=$request->state;
		$data->city=$request->city;
		$data->save();
		return redirect('/contact')->with('success','Thank You For Contacting us we will reach you soon!');
		
	}

	function blog(Request $request)
	{
		// $posts=Post::orderBy('id','desc')->simplePaginate(1);
		if($request->has('q')){
    		$q=$request->q;
    		$posts=Post::where('title','like','%'.$q.'%')->orderBy('id','desc')->paginate(2);
		}else{
    		$posts=Post::orderBy('id','desc')->paginate(4);
    	}
        return view('blog',['posts'=>$posts]);
	}

	function detail(Request $request,$slug,$postId)
	{
		// $com=Comments::find($postId);
    	$details=Post::find($postId);
		
		//dd($details);
		// return view('detail', compact(['details', 'com']));
		return view('detail', [ 'details' => $details]);
	}

	function portfolio()
	{
		return view('portfolio');
	}
	function services()
	{
		return view('services');
	}
	//save comment
	function save_comment(Request $request,$slug,$id)
	{
		$user_id = Auth::user()->id;
		
		$request->validate([
			'comment'=>'required'
		]);

		$data=new Comments;
		$data->user_id=Auth::user()->id;
		$data->post_id=$id;
		$data->comment=$request->comment;
		$data->save();
		return redirect('detail/'.$slug.'/'.$id)->with('success','Comment has been submitted!');
		
	}
	
}
