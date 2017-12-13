<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat as Cat;

class BaseController extends Controller
{
    public function index()
    {

      $cats = Cat::all();
      return view('accueil', ['cats' => $cats]);
    }
}
