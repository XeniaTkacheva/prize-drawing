<?php

namespace App\Http\Controllers;

use App\Models\Prize;
use App\Models\Round;
use App\Services\RoundService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoundController extends Controller
{
    protected $service;

    function __construct(RoundService $service)
    {
        $this->service = $service;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $rounds = Round::all();
        return view('rounds.list', ['rounds' => $rounds]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @throws \Exception
     */
    public function store()
    {
        $this->service->addRound();

        return redirect()->route('show');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show()
    {
        $new_round = Round::all()->last();
        if (!empty($new_round)) {
            $prize = Prize::where('id', $new_round->prize_id)->first();
        } else {
            return response('Фокус не удался!');
        }
        $rounds = Round::query()->where('user_id', Auth::user()->id)->with('prize')->orderBy('id', 'desc')->get();

        return view('rounds.list', ['round' => $new_round, 'rounds' => $rounds, 'prize' => $prize]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Round $round
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Round $round)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Round $round
     * @return \Illuminate\Http\Response
     */
    public function destroy(Round $round)
    {
        //
    }
}
