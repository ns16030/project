<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\events;
use App\trainings;

class PageController extends Controller
{
    public function events(){
        $events = events::all();
        return view('events')->with('events', $events);
    }
    public function master(){
        return view('master');
    }
    public function training(){
        $trainings = trainings::all();
        return view('training')->with('trainings', $trainings);
    }
}
