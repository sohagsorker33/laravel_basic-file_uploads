<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
   
   //---------------Response---sob function ache-------------------------------------------------Start------------
   function demo1(){
    return "this is a response";
   }
 //Json associyative array
   function demo2(){
    return response()->json([['name'=>"sohag",'age'=>20],['name'=>'asraful','age'=>21]]);
   }
   // Json associative array message, data, status code change
   function demo3(){
      return response()->json(['message'=>"json successfull", 'data'=>['name'=>'sohag','age'=>20]],status:201);
   }
   // Response redirect-----
   function demo4(){
      return redirect('/demo2');
   }
   //Bainary file response 
   function demo5(){
      $path=('images.png');
      return response()->file($path);
   }
   function demo6(){
      $path=('images.png');
      return response()->download($path);
   }
   // Response cookise
   function demo7(){
     // return response('say hello')->cookie("my-cookie",'amar soner bangla');
      return response('')->cookie("my-country",'Bangladesh');
   }
   // Response header
   function demo8(){
      return response('hello')->header('my-tokan','aba123xyz');
   }
      //Response----------------------------------------------------End---------------


      //---------Request ar sob function ache --------------start-----------

      //Request URL-------
     function demo9(Request $request){
        $num1=$request->num1;
        $num2=$request->num2;

        return $num1+$num2;

     }
     //Request Body-----

     /* function demo10(Request $request){
          $body=$request->input();
          return $body;
     }
 */

  function demo10(Request $request){
      $num1=$request['num1'];
      $num2=$request['num2'];
      return $num1+$num2;
  }

//Request header--------

function demo11(Request $request){
   return $request->header();
}
// Request IP---------
function demo12(Request $request){
   return $request->ip();
}

// Request cookie ----

function demo13(Request $request){
   return $request->cookie('my-country');
}



}