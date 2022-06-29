<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\admin;

class adminController extends Controller

{
   public function create()
   {
    return view('admin.create');
   }


 public function store(Request $request){

 $data =   $this->validate($request ,[
    'name' =>"required",
    'email' => "required|email",
    'email' => "required|email|unique:table,column,except,id",
    'password' => "required|min:8",
]);

 $op = admin :: create($data);

if($op){
    $message ="admin created";
    session()->flash('message-success' , $message);
}else
{
    $message ="admin not created";
    session()->flash('message-error' , $message);
}

return redirect(url('Admin/Create'));
 }


//    public function store(Request $request)
//     {
//         if(empty($request->title)){
//             echo "plez enter title";
//         }
//         if(empty($request->content)){
//             echo "plez enter content";
//         }
//         if(strlen($request->content)>20){
//             echo "plez enter content less than 20";
//         }

//              $this->validate($request, [
//             'title'     => 'required|min:3|max:50',

//             'content' => 'required|min:50',
//             'image' => 'required |file:png,jpg'
//         ]);


//         dd('Valid Data . . . ');
//     }
// public function save(Request $request)
// {

//     if(empty($request->title)){
//             echo "plez enter title";
//         }
//         if(empty($request->content)){
//             echo "plez enter content";
//         }
//         if(strlen($request->content)>20){
//             echo "plez enter content less than 20";
//         }

// }
}
