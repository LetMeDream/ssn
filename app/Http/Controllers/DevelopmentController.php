<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevelopmentController extends Controller
{
    //
    public function development(){
        return view('servicios.development');
    }

}
