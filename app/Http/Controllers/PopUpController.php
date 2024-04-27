<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PopUpController extends Controller
{
    public function SHowPupUp()
    {
        return view('popup');   
    }
}
