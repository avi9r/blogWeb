<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;

class ContactController extends Controller
{
    public function index()
    {
        $data= Contactus::all();
        return view('backend.contact.index',[
            'data'=>$data,
        ]);
    }

    public function edit($id)
    {
       
        $data=Contactus::find($id);
        return view('backend.contact.update',['data'=>$data]);
    }

    

    public function destroy($id)
    {
        Contactus::where('id',$id)->delete();
        return redirect('admin/contact');
    }
}
