<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.index');
    }
    public function test()
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
        return view('home.test2',
            [
            'fname' => $_REQUEST["fname"],
            'lname' => $_REQUEST["laname"],
        ]);




    }




}
