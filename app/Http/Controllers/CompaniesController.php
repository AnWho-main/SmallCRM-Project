<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;

class CompaniesController extends Controller
{
    public function view(){
        $companies = Companies::all();
        $data = compact('companies');
        return view('companies')->with($data);

    }

    public function add(){
        return view('addcom');
    }

    public function store(Request $request){

        $request->validate(
            [
                'name' => 'required',
            ]
        );

         $companies = new Companies;
         $companies->name = $request['name'];
         $companies->email = $request['email'];
         $companies->logo = $request['logo'];
         $companies->website = $request['website'];
         $companies->save();
            return redirect('companies');
    }

    
}
