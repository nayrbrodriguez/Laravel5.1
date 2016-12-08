<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

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

    // creating table to the database
    public function addTable(){
        
        Schema::create('user', function($v){  
                $v ->increments('user_id');
                $v ->string('lastname');
                $v ->string('firstname');
                $v -> timestamps();
         });

       
       return view('added');
        
    }

    //dropping table to the database
    public function deleteTable(){
         
            Schema::dropIfExists('user');

           
             return view('deleteTable');
         

    }

     // updating table to the database
    public function updateTable(){
        
            Schema::table('user',function($v){
                $v -> text('description');
                   });
            return view('updateTable',compact('description'));
    }

    // public function dropColumn(){
    //     Schema::table ('user', function($u){
    //         $u -> dropColumn('firstname');

    //     });
    // }


}
 
