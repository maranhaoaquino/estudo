<?php
declare(strict_types=1);
class Lasagna
{
    // Please define the 'expectedCookTime()' function
    function expectedCookTime(){
        $result = 40;
        return $result;
    }
    // Please define the 'remainingCookTime($elapsed_minutes)' function
    function remainingCookTime($elapsed_minutes){
        $expected = $this->expectedCooktime();
        $result = $expected - $elapsed_minutes;
        return $result;
    }
    // Please define the 'totalPreparationTime($layers_to_prep)' function
    function totalPreparationTime($layers_to_prep){
        $result = $layers_to_prep*2;
        return $result;
    }
    // Please define the 'totalElapsedTime($layers_to_prep, $elapsed_minutes)' function
    function totalElapsedTime($layers_to_prep, $elapsed_minutes){
        $prepTime = $this->totalPreparationTime($layers_to_prep);
        $result = $prepTime + $elapsed_minutes;
        return $result;
    }
    // Please define the 'alarm()' function
    function alarm(){
        return "Ding!";
    }
    
}