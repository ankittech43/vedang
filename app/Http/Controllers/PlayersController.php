<?php

namespace App\Http\Controllers;

use App\Models\players;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $player = players::with(['team'=>function($q){
            $q->with('club');
        }])->where('created_by',Auth::user()->id)->get();

//        echo "<pre>";print_r($player->toArray());die;
        return view('player.view', ['player' => $player]);

        return redirect('players');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $team = Team::where('created_by',Auth::user()->id)->get();

        return view('player.create',['team'=>$team]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=$request->validate([
            'name'=>['required'],
            'team_id'=>['required'],
        ]);

        $validate['created_by'] = Auth::user()->id;

        players::create($validate);

        return redirect('players/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\players  $players
     * @return \Illuminate\Http\Response
     */
    public function show(players $players)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\players  $players
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
     * @param  \App\Models\players  $players
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, players $players)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\players  $players
     * @return \Illuminate\Http\Response
     */
    public function destroy(players $players)
    {
        //
    }
}
