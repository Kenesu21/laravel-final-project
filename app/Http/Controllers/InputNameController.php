<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputNameController extends Controller
{
    
    public function Name(Request $request){ 
        $Fname = $request->input('Name');
     
        return view('inputName', compact('Fname'));
    }
}

