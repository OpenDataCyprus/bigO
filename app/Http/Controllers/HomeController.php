<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth')->except(['index','details']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function details()
    {
        $result = [
            [
                'title'=>'Title 1',

            ],
            [
                'title'=>'Title 1',

            ],
               [
                'title'=>'Title 1',

            ],
               [
                'title'=>'Title 1',

            ],
        ];

        $result = collect($result);
        
        return view('details')->with(['result'=>$result]);
    }
}
