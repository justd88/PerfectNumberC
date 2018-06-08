<?php

namespace DN\PerfectNumber\Helpers;

class Math {

    /**
     * calculate aliquot sum
     * @param int $number
     * @return int
     * @throws \Exception
     */
    public function calcAliquotSum(int $number): int {
        if ($number < 1) {
            throw new \Exception("Can not calculate AliquotSum from number lower then 1");
        }
        //TODO: Change Brute force to something less expensive
        $sum = 0;
        for ($i = 1; $i < $number; $i++)
            if ($number % $i == 0)
                $sum += $i;

        return $sum;
    }

}
