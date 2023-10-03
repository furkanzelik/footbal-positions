<?php

namespace App\Http\Controllers;

use App\Models\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    public function leaguePage(){
        $league = League::all(); //haal alle items van de db op
        return view('league',['league' => $league]);
    }
}
