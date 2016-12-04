<?php

namespace App\Http\Controllers;


class Pagescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        //
        $name = ['Bryan','Pogi','lovable'];
        return view('welcome',compact('name'));
    } 


    public function about()
    {
        //
        return view('about');
    }

}
