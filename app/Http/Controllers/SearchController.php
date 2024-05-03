<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
       $name = $request->input('name');
       $email = $request->input('email');
       $mobile = $request->input('mobile');
       $query =Employee::query();
       if($name){
        $query->where('name','like',"%$name%");
       }
       if($email){
        $query->where('email','like',"%$email%");
       }
       if($mobile){
        $query->where('mobile','like' , "%$mobile%");
       }
       $results = $query->get();
       return view('employees.search',['results'=>$results]);
    }
}
?>