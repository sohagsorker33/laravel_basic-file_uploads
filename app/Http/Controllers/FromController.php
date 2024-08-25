<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
 
class FromController extends Controller
{
   function submission(Request $request){
       $username=$request->input('username');
       $email=$request->input('email');
       $file=$request->file('photo');
       $path="";
       if($request->has('photo')){
         $file=$request->file('photo');
         $name=$file->getClientOriginalName();
         $upload =$file->storeAs('uploads',$name,'public');
         $path=Storage::url($upload);
       }

       return redirect(route('get.from'))->with([
         'success'=>'From submited successfull',
         'username'=>$username,
         'email'=>$email,
          'photo'=>$path,
      ]);

       
   }
}
