@extends('layout.base')

@section('title','accueil')
@section('main')
  <h1>Insertion</h1>

  <form class="flexcenterform flexwrap" method="post" action="/cat/insert">
    {{ csrf_field() }}
        <label for="name">Nom </label>
        <input type="text" name="name"><br>

        <label for="gender">genre </label>
          <select name="gender">
            <option value="1">f</option>
            <option value="2">h</option>
          </select>
        <br>

        <label for="size">Taile </label>
        <input type="number" name="size" value="30"><br>

        <label for="weight">Poids </label>
        <input type="number" name="weight" value="12"><br>

        <label for="age">Age </label>
        <input type="number" name="age" value="2"><br>

        <label for="color">Couleur </label>
        <select  name="color">
          @foreach($colors as $color)
              <option value="{{ $color->id}}">{{ $color->color}}</option>
          @endforeach
        </select>

        <input type="submit" value="Inserer un chat">
  </form>
@endsection
