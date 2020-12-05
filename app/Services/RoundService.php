<?php


namespace App\Services;


use App\Models\Prize;
use App\Models\Round;
use Illuminate\Support\Facades\Auth;

class RoundService
{
    /**
     * @return mixed
     * @throws \Exception
     */
    public function addRound()
    {
        $data = [
            'user_id' => Auth::user()->id,
            'prize_id' => $this->getPrizeId(),
            'amount' => random_int(20, 301),
        ];

        return Round::create($data);
    }

    /**
     * @return \Illuminate\Http\Response|mixed
     * @throws \Exception
     */
    protected function getPrizeId()
    {
        $list = Prize::all()->toArray();
        if (!empty($list)) {
            $act = random_int(0, count($list) - 1);
        } else {
            return response('Призы кончились!');
        }
        return $list[$act]['id'];
    }
}
