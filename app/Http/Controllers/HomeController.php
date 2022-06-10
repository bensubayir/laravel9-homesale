<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $sliderdata=Product::all()->limit(4);
        return view('home.index',[
            'sliderdata'=>$sliderdata
        ]);

    }
    public function test(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('home.test');
    }
    //4.video
    public function param($id,$number)
    {
        //echo "Parameter 1:",$id;
        //echo "<br>Parameter 2:",$number;
        //echo "<br>Sum Parameters :",$id+$number;

        return view('home.test2', [
            'id' => $id,
            'number' => $number
        ]);



    }
    public function save(Request $request)
    {
        echo "Save function<br>";
        echo "First Name :",$_REQUEST["fname"];
        echo "Last Name :",$_REQUEST["fname"];
        return view('home.test',
            [
            'fname' => $_REQUEST["fname"],
            'lname' => $_REQUEST["lname"],
        ]);




    }




}
