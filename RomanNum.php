<?php
class RomanNum
{
    public function toInt($numeral)
    {
        $sum = 0;
        $high = 0;
        //reverse and split into characters
        foreach(str_split(strrev($numeral)) as $pos => $chr){
            //track the higest value
            if($high < $this->getValue($chr)){
                $high = $this->getValue($chr);
            }
            
            //are there any pre values
            if($pos == 0){
                $sum += $this->getValue($chr);
                continue;
            }
            
            //is this a smaller value
            if($high > $this->getValue($chr)){
                $sum -= $this->getValue($chr);
            } else {
                $sum += $this->getValue($chr);
            }
        }
        
        return $sum;
    }
    
    protected function getValue($numeral)
    {
        switch(strtolower($numeral)){
            case 'i':
                return 1;
            case 'v':
                return 5;
            case 'x':
                return 10;
            default:
                return 0;
        }
    }
}