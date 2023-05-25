<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function testFunction(){
        $name = "Kenneth Escabarte";
        return view('test.test',array("name"=>$name));
    }

}
