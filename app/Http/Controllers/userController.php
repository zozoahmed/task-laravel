<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
   public function create()
    {

        return   view('users.create');
    }

    public function store(Request $request)
    {


        if(empty($request->title)){
            echo "plez enter title";
        }
        if(empty($request->content)){
            echo "plez enter content";
        }
        if(strlen($request->content)>20){
            echo "plez enter content less than 20";
        }

             $this->validate($request, [
            'title'     => 'required|min:3|max:50',

            'content' => 'required|min:50',
            'image' => 'required |file:png,jpg'
        ]);


        dd('Valid Data . . . ');
    }




public function save(Request $request)
{

    if(empty($request->title)){
            echo "plez enter title";
        }
        if(empty($request->content)){
            echo "plez enter content";
        }
        if(strlen($request->content)>20){
            echo "plez enter content less than 20";
        }

}
}
