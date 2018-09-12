<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Resources\TeamResource;
use Illuminate\Support\Facades\Validator;
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

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        $team = Team::create($request->all());

        $data = [
            'data' => $team,
            'status' => (bool)$team,
            'message' => $team ? 'Team Created!' : 'Error Creating Team',
        ];

        return response()->json($data);

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
