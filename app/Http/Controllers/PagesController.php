<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	$title = 'Welcome Home Page';
    	//return view('pages.index',compact('title'));
    	return view('pages.index')->with('title',$title);
    }
    public function about()
    {
    	$data =array(
    		'title' =>'About Us',
    		'services' =>['web design','Php']
    		);
    	return view('pages.about')->with($data);
    }
}
