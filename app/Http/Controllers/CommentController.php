<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;

class CommentController extends Controller
{
    
    
    public function index()
    {
        $data= Comments::all();
        return view('backend.comment.index',[
            'data'=>$data,
        ]);
    }

    public function edit($id)
    {
       
        $data=Comments::find($id);
        return view('backend.comment.update',['data'=>$data]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            
            'comment'=>'required',
            
        ]);

        $post=Comments::find($id);
        
        $post->comment=$request->comment;
        $post->save();

        return redirect('admin/comment/'.$id.'/edit')->with('success','Data has been updated');
    }

    public function destroy($id)
    {
        Comments::where('id',$id)->delete();
        return redirect('admin/comment');
    }
}
