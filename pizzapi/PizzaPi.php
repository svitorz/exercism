<?php

class PizzaPi
{
    public function calculateDoughRequirement($numberOfPizzas, $persons)
    {
        $dough = $numberOfPizzas * (($persons * 20) + 200);
        return $dough;
    }

    public function calculateSauceRequirement($numberOfPizzas, $volumeOfSauce)
    {
        //125ml per pizza
        
        $sauceRequirement = $numberOfPizzas * 125 / $volumeOfSauce;
        return $sauceRequirement;
    }

    public function calculateCheeseCubeCoverage($size_lenght, $thicknessCheese, $diameterOfPizza)
    {
        $numberOfPizzas = ($size_lenght**3) / ($thicknessCheese * 3.14 * $diameterOfPizza);
        return intval($numberOfPizzas);
    }

    public function calculateLeftOverSlices($numberOfPizzas, $numberOfFriends)
    { 
        $slicesPerPizza = 8; 
        $totalSlices = $numberOfPizzas * $slicesPerPizza; // total de pedaços é igual ao número de pizzas x numero de pedaços por pizza
        $slicesPerPerson = floor($totalSlices / $numberOfFriends); // get the int number of totalslices divided for the number of friends
        $leftOverSlices = $totalSlices % $numberOfFriends; // the module of the total of slices by the number of friends

        return $leftOverSlices;
    }
}
