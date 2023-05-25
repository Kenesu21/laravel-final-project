<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    
    public function Age(Request $request){ 
        $age= $request->input('Age');
     
        return view('Age', compact('age'));
    }
}