<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gender;
use App\Color;

class CreateController extends Controller
{
  public function index()
  {
    $gendersAll = Gender::all();
    $genders = [];
    foreach ($gendersAll as $value) {
      $genders[$value->id]= $value->gender;
    }

    $colors = Color::all();
    return view('create', ['genders'=> $genders, 'colors' => $colors]);

  }
}
