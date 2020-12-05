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
        $prize_id = $this->getPrizeId();
        $prize = Prize::find($prize_id);
        $min = $prize->min_amount;
        $max = $prize->max_amount;

        switch ($prize_id) {
            case 3:
                $amount = 1;
                break;
            case 1:
            case 2:
                $amount = $this->getAmount($min, $max);
                break;
            default:
                $amount = 0;
                break;
        }
        $data = [
            'user_id' => Auth::user()->id,
            'prize_id' => $prize_id,
            'amount' => $amount,
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

    public function rulesOfDrawing()
    {
        // TODO

    }

    /**
     * @param $min
     * @param $max
     * @return float
     * @throws \Exception
     */
    protected function getAmount($min, $max)
    {
        return round(random_int($min, $max), -2);
    }
}
