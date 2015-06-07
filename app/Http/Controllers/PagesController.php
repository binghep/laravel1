<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about(){
        $name='Jeffrey <span style="color:red">Way</span>';
        return view('pages.about')->with('name',$name);
    }

    public function contact(){
        $name='Jeffrey <span style="color:red">Way</span>';
        return view('pages.contact')->with('name',$name);
    }
//    the following 3 functions are three ways of passing array of data to views
    public function third(){
        return view('pages.third')->with([
            'first'=>'Jeffrey',
            'last'=>'way'
        ]);
    }

    public function fourth(){
        $first='<span style="color:red">Jeffrey</span>';
        $last='Way';
        return view('pages.fourth',compact('first','last')); //same as above and below
    }

    public function fifth(){
        $data=[];
        $data['first']='Douglas';
        $data['last']='Quaid';

        return view('pages.fifth',$data); //same as above
    }

    public function sixth(){
        $people=[
            'jiayi peng','jincang li','wenlan deng','sen peng'
        ];
        $people=[];
        return view('pages.sixth', compact('people'));
    }
}
