<?php


namespace App\Services;


use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WinnerService
{
    public function getAllWinners()
    {
        return User::query()
            ->with('rounds')
            ->orderBy('id', 'desc')
            ->get();
    }

    public function getWinner()
    {
        return User::query()
            ->where('id', Auth::id())
            ->with('rounds')
            ->first();
    }
}
