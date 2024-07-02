<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Group;

class FrontHomeController extends Controller
{
    //
    public function home(Request $request)
    {
        return view('front.home');
    }
}
