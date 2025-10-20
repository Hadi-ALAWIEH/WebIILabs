<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fruit extends Controller
{
    public function getFruits(): \Illuminate\Http\JsonResponse
    {
        $fruits = ['Apple', 'Banana', 'Orange', 'Mango', 'Grapes'];
        return response()->json($fruits);
    }

    public function showFruits(): \Illuminate\View\View
    {
        $title = 'Those are my fruits';
        $fruits = ['Apple', 'Banana', 'Orange', 'Mango', 'Grapes', 'Pineapple'];
        return view('Fruit', ['title' => $title, 'fruits' => $fruits]);
    }

    public function showOtherFruits(): \Illuminate\View\View
    {
        $title = 'Those are my other fruits';
        $fruits = ['Kivi', 'Peach', 'Plum', 'Cherry', 'Watermelon', 'Papaya'];
        return view('Fruit', ['title' => $title, 'fruits' => $fruits]);
    }
}
