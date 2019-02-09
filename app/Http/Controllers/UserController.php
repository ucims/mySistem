<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function show(Request $request)
    {
        // print_r($request->input('username'));
        // return "Hello form";

        $request->session()->put('username',$request->input('username'));
        return view('about')->with('username', $request->session()->get('username'));
    }
}
?>