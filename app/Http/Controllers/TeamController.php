<?php

namespace App\Http\Controllers;

use App\Models\Team;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        $teams = Team::all();
        return $teams;
    }
    public function create(Request $request){
        $team = Team::create($request->all());
        return 'Team Created Successfully';
    }
    public function teammembers(){
        $team = Team::find(1);
        $members = $team->users;
        return $members;
    }
}
