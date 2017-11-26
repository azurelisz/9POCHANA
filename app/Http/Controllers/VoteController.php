<?php

namespace App\Http\Controllers;

use App\User;
use App\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function vote(Request $request)
    {
        $vote1 = ($request->input('vote1') != null ? true : false);
        $vote2 = ($request->input('vote2') != null ? true : false);
        $vote3 = ($request->input('vote3') != null ? true : false);
        $vote4 = ($request->input('vote4') != null ? true : false);
        $vote5 = ($request->input('vote5') != null ? true : false);
        $vote6 = ($request->input('vote6') != null ? true : false);
        $vote7 = ($request->input('vote7') != null ? true : false);
        $vote8 = ($request->input('vote8') != null ? true : false);
        $vote9 = ($request->input('vote9') != null ? true : false);
        $vote10 = ($request->input('vote10') != null ? true : false);
        $vote11 = ($request->input('vote11') != null ? true : false);
        $vote12 = ($request->input('vote12') != null ? true : false);
        $vote13 = ($request->input('vote13') != null ? true : false);
        $vote14 = ($request->input('vote14') != null ? true : false);
        $vote15 = ($request->input('vote15') != null ? true : false);
        $vote16 = ($request->input('vote16') != null ? true : false);
        $vote17 = ($request->input('vote17') != null ? true : false);
        $vote18 = ($request->input('vote18') != null ? true : false);
        $vote19 = ($request->input('vote19') != null ? true : false);
        $vote20 = ($request->input('vote20') != null ? true : false);
        $vote21 = ($request->input('vote21') != null ? true : false);

        $vote = Vote::where('user_id', auth()->user()->id)->first();
        $vote->vote1 = $vote1;
        $vote->vote2 = $vote2;
        $vote->vote3 = $vote3;
        $vote->vote4 = $vote4;
        $vote->vote5 = $vote5;
        $vote->vote6 = $vote6;
        $vote->vote7 = $vote7;
        $vote->vote8 = $vote8;
        $vote->vote9 = $vote9;
        $vote->vote10 = $vote10;
        $vote->vote11= $vote11;
        $vote->vote12 = $vote12;
        $vote->vote13 = $vote13;
        $vote->vote14 = $vote14;
        $vote->vote15 = $vote15;
        $vote->vote16 = $vote16;
        $vote->vote17 = $vote17;
        $vote->vote18 = $vote18;
        $vote->vote19 = $vote19;
        $vote->vote20 = $vote20;
        $vote->vote21 = $vote21;
        $vote->save();

        return redirect('/');
    }
}