<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function home(){
        return view("Frontend.partials.home");
    }
    
    public function submit(Request $request){
        $home = new Home;
        $home->F_name = $request->F_name;
        $home->L_name = $request->L_name;
        $home->Address = $request->Address;
        $home->E_mail = $request->E_mail;
        $home->save();
    
    return redirect()->back()->with('message', 'service created successfully!');
}



public function list(){
    $home=Home::all();
    return view ('Frontend.partials.list',compact('home'));

}

public function edit($id){

$home=Home::find($id);
    return view('Frontend.partials.edit',compact('home'));

}


// <div class="mb-3" style="background-color: rgb(0, 0, 0)">
//     <label for="formGroupExampleInput"  class="form-label">First Name</label>
//     <input type="text" name="F_name" class="form-control" id="formGroupExampleInput" placeholder="Enter your First Name">
//   </div>
//   <div class="mb-3" style="background-color: rgb(12, 10, 10)">
//     <label for="formGroupExampleInput2" class="form-label">Last Name</label>
//     <input type="text" name="L_name" class="form-control" id="formGroupExampleInput2" placeholder="Enter your Last Name">
//   </div>

}
