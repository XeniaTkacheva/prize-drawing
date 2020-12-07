<?php


namespace App\Services;


use App\Models\Gift;
use App\Models\Prize;
use App\Models\Round;
use Illuminate\Support\Facades\Auth;

class RoundService
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllRounds()
    {
        return Round::query()
            ->with(['prize', 'winner', 'gift'])
            ->orderBy('id', 'desc')
            ->get();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getRoundsOfUser()
    {
        return Round::query()
            ->where('user_id', Auth::id())
            ->with(['prize', 'winner', 'gift'])
            ->orderBy('id', 'desc')
            ->get();
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function addRound()
    {
        $prize_id = $this->getPrizeId();

        $prize = Prize::find($prize_id);

        if ($prize_id == 3) {
            $gifts = $this->getFreeGift();
            $gift_count = $gifts->count();

            if ($gift_count > 1) {
                $act = random_int(0, $gift_count - 1);
            } elseif ($gift_count == 1) {
                $act = 0;
                $prize->status = 0;
            } else {
                return response('Призы кончились!');
            }

            $gift_id = ($gifts->toArray())[$act]['id'];
            $gift = $gifts
                ->where('id', $gift_id)
                ->first();
        }

        $min = $prize->min_amount;
        $max = $prize->max_amount;

        switch ($prize_id) {
            case 1:
                if ($max > $prize->actual_amount) {
                    $max = $prize->actual_amount;
                }
                $amount = $this->getAmount($min, $max);
                $actual_amount = $prize->actual_amount - $amount;
                if ($actual_amount == 0) {
                    $prize->status = 0;
                }
                break;
            case 2:
                $amount = $this->getAmount($min, $max);
                $actual_amount = $prize->actual_amount + $amount;
                break;
            case 3:
                $amount = 1;
                $actual_amount = $prize->actual_amount - $amount;
                break;
            default:
                $amount = 0;
                break;
        };

        $data = [
            'user_id' => Auth::user()->id,
            'prize_id' => $prize_id,
            'amount' => $amount,
            'gift_id' => $gift_id ?? null,
        ];

        $round = Round::create($data);

        if ($round) {
            if ($prize_id == 1 || $prize_id == 2) {

                $prize->actual_amount = $actual_amount;
                $prize->save();
            }
            if ($prize_id == 3) {

                $gift->status = 'await';
                $gift->save();

                $prize->actual_amount = $actual_amount;
                $prize->save();
            }
            return $round;
        } else {
            return false;
        }
    }

    /**
     * @return \Illuminate\Http\Response|mixed
     * @throws \Exception
     */
    protected function getPrizeId()
    {

        $list = Prize::query()
            ->where('status', '!=', 0)
            ->get()
            ->toArray();

        if (!empty($list)) {
            $act = random_int(0, count($list) - 1);
        } else {
            return response('Призы кончились!');
        }
        return $list[$act]['id'];
    }

    /**
     * @param $min
     * @param $max
     * @return int
     * @throws \Exception
     */
    protected function getAmount($min, $max)
    {
        return round(random_int($min, $max), -2);
    }

    protected function getFreeGift()
    {
        return Gift::query()
            ->where('status', 'free')
            ->get();
    }
}
