<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'team_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }


        $player = Player::create($request->all());

        $data = [
            'data' => $player,
            'status' => (bool)$player,
            'message' => $player ? 'Player Created!' : 'Error Creating Player',
        ];

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\players  $players
     * @return \Illuminate\Http\Response
     */
    public function show(players $players)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\players  $players
     * @return \Illuminate\Http\Response
     */
    public function edit(players $players)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\players  $players
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $players)
    {
        $player = Player::where('id', $players)->first();

        // Log::info($player);
        // Log::info($request);

        $input = $request->all();
        $player->fill($input)->save();

        $data = [
            'data' => $player,
            'status' => (bool)$player,
            'message' => $player ? 'Player Updated!' : 'Error Updating Player',
        ];

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\players  $players
     * @return \Illuminate\Http\Response
     */
    public function destroy(players $players)
    {
        //
    }
}
