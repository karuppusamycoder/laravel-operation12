<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registers;


class firstcontroller extends Controller
{
      public function first()
      {
        return view('usersupport');
      }



      public function second(Request $request)
      {
      
           $validatedData =$request->validate([

            'uname'=>'required',
            'psw'=>'required', 
           ]);

        return view('emplog');
      }

public function third(Request $request)
      {

$validatedData =$request->validate([

            'uname'=>'required',
            'psw'=>'required', 
           ]);


        $register = registers::paginate();

        return view('curd',compact('register'));
        
      }




public function save(Request $request)
{

    $validatedData = $request->validate([

      'name' =>'required',
      'role' =>'required',
      'department' =>'required',
      'employeeid' =>'required',

 
    ]);

        $registers = new registers;
        $registers->name = $request->name;
        $registers->role = $request->role;
        $registers->department = $request->department;
        $registers->employeeid = $request->employeeid;
        $registers->save();

return $request;
}


public function edit($id)
{
   $registers = registers::find($id);

   return view('view',compact('registers'));
}

public function update(Request $request)
{
        $registers = registers::find($request->id);
        $registers->name = $request->name;
        $registers->role = $request->role;
        $registers->department = $request->department;
        $registers->employeeid = $request->employeeid;
        $registers->save();

        return back();

}

public function delete($id)
{
 $registers = registers::find($id);
 $registers->delete();

 return "successfully deleted";


}

}
