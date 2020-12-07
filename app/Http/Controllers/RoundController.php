<?php

namespace App\Http\Controllers;

use App\Models\Prize;
use App\Services\RoundService;

class RoundController extends Controller
{
    protected RoundService $service;

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

        $rounds = $this->service->getAllRounds();

        return view('rounds.list', ['rounds' => $rounds]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @throws \Exception
     */
    public function store()
    {
        $round = $this->service->addRound();
        if ($round) {
            return redirect()->route('show');
        } else {
            return redirect('home')->with('message', 'Что-то пошло не так!');
        }
    }

    /**
     * Display the specified resource.
     *
     */
    public function show()
    {
        try {
            $rounds = $this->service->getRoundsOfUser();
            $new_round = $rounds->last();

            $prize = Prize::where('id', $new_round->prize_id)->first();
            return view('rounds.show', ['round' => $new_round, 'rounds' => $rounds, 'prize' => $prize]);

        } catch (\Exception $e) {

            return redirect('home')->with('message', $e->getMessage());
        }
    }
}
