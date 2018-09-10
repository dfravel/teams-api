<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Resources\TeamResource;
use App\Http\Resources\PlayerResource;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    // make sure the controller is secure
    public function __construct()
    {
        $this->middleware('auth:api')->except(['index', 'show']);
    }

    public function index()
    {
        return TeamResource::collection(Team::with('players')->paginate(25));

    }

    public function store(Request $request)
    {
        $team = Team::create([
            'name' => $request->name
        ]);

        return new TeamResource($team);
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
