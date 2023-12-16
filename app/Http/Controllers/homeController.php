<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\video;

class HomeController extends Controller
{
    //
    public function Home(){
        return view('page.home');
    }

}
