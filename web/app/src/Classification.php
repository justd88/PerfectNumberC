<?php

namespace DN\PerfectNumber;

use DN\PerfectNumber\Helpers\Math as MathHelper;
use DN\PerfectNumber\ClassificationInterface;

class Classification implements ClassificationInterface {

    const PERFECT = 'perfect';
    const ABUNDANT = 'abundant';
    const DEFICIENT = 'deficient';

    /**
     *
     * @var DN\PerfectNumber\Helpers\Math
     */
    protected $mathHelper;

    /**
     *
     * @var int
     */
    private $alquiotSum;

    /**
     *
     * @var int
     */
    private $number;

    public function __construct() {
        $this->mathHelper = new MathHelper();
        $this->number = null;
    }

    /**
     * 
     * Check if number is greater then 1
     *
     * @param integer $number 
     * @return boolean
     */
    private static function _numberIsValid($number) : bool{
        return $number > 0;
    }

    /**
     * Check the number is abundant
     * @return type bool
     */
    private function _isAbundant() : bool{
        return ($this->alquiotSum > $this->number);
    }

    /**
     * Check the number is perfect
     * @return type bool
     */
    private function _isPerfect() :bool{
        return ($this->alquiotSum == $this->number);
    }

    /**
     * Set the number
     * @param type int
     * @return $this
     * @throws \Exception
     */
    private function setNumber($number) {
        if (!self::_numberIsValid($number)) {
            throw new \Exception("Invalid Number");
        }
        $this->number = $number;
        return $this;
    }

    /**
     * 
     *  Determine whether a given number is perfect, abundant, or deficient
     *
     * @param int $number the given number
     * @return string
     */
    public function getClassification(int $number) : string{
        $this->setNumber($number);

        $this->alquiotSum = $this->mathHelper->calcAliquotSum($this->number);

        //echo 'SUM:' . $this->alquiotSum . ' Num: '.$this->number.'<br/>';

        if ($this->_isAbundant()) {
            return self::ABUNDANT;
        }
        if ($this->_isPerfect()) {
            return self::PERFECT;
        }

        //Logically there is no need to check for the third option
        return self::DEFICIENT;
    }

}
