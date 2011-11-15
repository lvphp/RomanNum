<?php
class RomanNum
{
    protected $map = array(
        'i' => 1,
        'v' => 5,
        'x' => 10,
        'l' => 50,
        'c' => 100,
        'd' => 500,
        'm' => 1000
    );
    
    public function toInt($numeral)
    {
        $chrs = str_split(strtolower(strrev($numeral)));
        $sum = 0;
        foreach($chrs as $index => $chr){
            if(isset($chrs[$index-1]) AND $this->map[$chr] < $this->map[$chrs[$index-1]]){
                $sum -= $this->map[$chr];
            } else {
                $sum += $this->map[$chr];
            }
        }
        return $sum;
    }
}