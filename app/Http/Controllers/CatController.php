<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;
use App\Gender;
use App\Color;


class CatController extends Controller
{
  public function insertOne(Request $request){

    $cat = new Cat;//creer un nouvelle objet chat
    $cat->name = $request->name;//instancie les éléments
    $cat->size = $request->size;//instancie les éléments
    $cat->weight = $request->weight;//instancie les éléments
    $cat->age = $request->age;//instancie les éléments
    $cat->gender_id = $request->gender;
    $cat->save();//permet de sauvegarder dans la base de donnée
    $cat->colors()->attach($request->color);
    return redirect('/');//redirection

  }
  public function deleteOne(Request $request,$id){
    $cat = Cat::find($id);
    $cat->colors()->detach();
    $cat->delete();
    return redirect('/');//redirection
    dd($id);
  }
  public function updateOne(Request $request, $id)
  {

    $cat = Cat::find($id);
    $gendersAll = Gender::all();
    $genders = [];
    foreach ($gendersAll as $value) {
      $genders[$value->id] = $value->gender;
    }
    $colorsAll = Color::all();
    $colors = [];
    foreach ($colorsAll as $value) {
      $colors[$value->id] = $value->color;
    }
    return view('update', ['genders' => $genders, 'colors' => $colors, 'cat' => $cat]);
  }
  public function updateOneAction(Request $request)
  {
      $cat = Cat::find($request->id);
      $cat->name = $request->name;
      $cat->size = $request->size;
      $cat->weight = $request->weight;
      $cat->age = $request->age;
      $cat->gender_id = $request->gender;
      $cat->save();
      $cat->colors()->detach();
      $cat->colors()->attach($request->color);
      return redirect('/');
  }
}
