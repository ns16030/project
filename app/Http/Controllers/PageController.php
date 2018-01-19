<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\events;
use App\trainings;
use App\masters;
use App\User;

class PageController extends Controller
{
    public function events(){
        $events = events::all();
        return view('events')->with('events', $events);
    }
    public function master(){
        $master = masters::all();
        return view('master')->with('master', $master);
    }
    public function training(){
        $trainings = trainings::all();
        return view('training')->with('trainings', $trainings);
    }
    public function onemasterclass($id){
        $masters = masters::find($id);
        return view('onemasterclass', compact ('masters'));
    }
    public function oneevent($id){
        $events = events::find($id);
        return view('oneevent', compact ('events'));
    }
}
