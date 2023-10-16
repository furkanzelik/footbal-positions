<?php

namespace App\Http\Controllers;

use App\Models\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    public function leaguePage(){
        $leagues = League::all(); //haal alle items van de db op via model
        return view('league',['leagues' => $leagues]);
    }
}
