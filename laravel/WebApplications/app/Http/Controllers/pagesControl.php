<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesControl extends Controller
{
    //
    public function index(){
        $var='Welcome to my Laravel App';
       return view('pages.index')->with('var', $var);
    }
    public function about(){
        $var='About App';
        return view('pages.about')->with('var', $var);
       }
    public function services(){
        // $var='Services provided by App';
        $data= array(
            'var'=>'Severs',
            'serv'=>['hamza','awan','toqeer']
        );
        return view('pages.services')->with($data);
     }

    
}
