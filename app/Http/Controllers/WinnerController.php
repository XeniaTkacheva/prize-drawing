<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\WinnerService;
use Illuminate\Http\Request;

class WinnerController extends Controller
{
    protected $service;

    function __construct(WinnerService $service)
    {
        $this->service = $service;
        $this->middleware('auth', [
//             'except'=>['index', 'show']
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $winners = $this->service->getAllWinners();
        return view('winners.list', ['winners' => $winners]);
    }

    /**
     * Display the specified resource.
     *
     */
    public function show()
    {
        $winner = $this->service->getWinner();

        return view('winners.show', ['winner' => $winner]);
    }
}
