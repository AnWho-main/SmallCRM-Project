<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employees;

class EmployeesController extends Controller
{
    public function view(){
        $employees = Employees::all();
        $data = compact('employees');
        return view('employees')->with($data);
    }

    public function add(){
        return view('addemp');
    }

    public function store(Request $request){

        $request->validate(
            [
                'firstname' => 'required',
                'lastname' => 'required',
            ]
        );

         $employees = new Employees;
         $employees->firstname = $request['firstname'];
         $employees->lastname = $request['lastname'];
         $employees->companyname = $request['companyname'];
         $employees->email = $request['email'];
         $employees->phone = $request['phone'];
         $employees->save();
            return redirect('employees');
    }

    public function delete($id){
        $employees = Employees::find($id)->delete();
        return redirect('employees');
    }
}
