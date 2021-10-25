<?php

require_once 'Vehicle.php';

class  Car extends Vehicle
{

    public function changeWheel()
    {
        return "change wheel of a car";
    }

}