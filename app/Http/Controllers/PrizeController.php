<?php

namespace App\Http\Controllers;

use App\Models\Prize;
use App\Services\PrizeService;
use Illuminate\Http\Request;

class PrizeController extends Controller
{
    protected $service;

    function __construct(PrizeService $service)
    {
        $this->service = $service;
        $this->middleware('auth', [
            'except' => ['index', 'show']
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $prizes = Prize::all();
        return view('prizes.list', ['prizes' => $prizes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO API Admin-panel
        return response(['message' => 'Prize created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Prize $prize
     * @return \Illuminate\Http\Response
     */
    public function show(Prize $prize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Prize $prize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prize $prize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Prize $prize
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prize $prize)
    {
        //
    }
}
