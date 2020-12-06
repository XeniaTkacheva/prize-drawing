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
            return response(['message' => 'Что-то пошло не так!'], 401)->redirectToRoute('home');
        }
    }

    /**
     * Display the specified resource.
     *
     */
    public function show()
    {
        try {
            $rounds = $this->service->getAllRounds();
            $new_round = $rounds->last();

            $prize = Prize::where('id', $new_round->prize_id)->first();
        } catch (\Exception $e) {
            return response(['message' => $e->getMessage()], 422)->redirectToRoute('home');
        }

        return view('rounds.show', ['round' => $new_round, 'rounds' => $rounds, 'prize' => $prize]);
    }
}
