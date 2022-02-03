<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Api extends Controller
{
    public function Humans()
    {
        $humans = \App\Models\Human::all();
        // $humans = explode(",",$humans);
        // foreach($humans as $humans){
        //     echo "<br>";
        // }
        $humans = json_encode($humans);
        // dd($humans);
        return $humans;
    }
    public function Cars()
    {
        $car = \App\Models\Car::all();
        $car = json_encode($car);
        return $car;
    }
    public function Animals()
    {
        $animals = \App\Models\Animal::all();
        $animals = json_encode($animals);
        return $animals;
    }
}
