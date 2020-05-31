<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use Illuminate\Support\Facades\DB;


class PagesController extends Controller
{
    public function index(){

        // return view('pages.index', compact('title'));
        $cities = DB::table('cities')->pluck('city_name');
        return view('pages.index')->with('cities',$cities);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data = array(
            'title'=>'Darren',
             'services' => ["Test 1","Test2", "Test3"]
        );

        return view('pages.services')->with($data);
    }
}
