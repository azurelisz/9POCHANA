<?php

namespace App\Http\Controllers;

use App\Vote;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        $count1 = Vote::where('vote1', '1')->count();
        $count2 = Vote::where('vote2', '1')->count();
        $count3 = Vote::where('vote3', '1')->count();
        $count4 = Vote::where('vote4', '1')->count();
        $count5 = Vote::where('vote5', '1')->count();
        $count6 = Vote::where('vote6', '1')->count();

        $data = [$count1, $count2, $count3, $count4, $count4, $count5, $count6];

        return view('index')->with('count', $data);
    }
}
