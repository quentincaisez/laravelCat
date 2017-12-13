@extends('layout.base')

@section('title','accueil')
@section('main')
  <h1>Insertion</h1>

  <form class="flexcenterform flexwrap" method="post" action="/cat/update">
    {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $cat->id}}">

        <label for="name">Nom </label>
        <input type="text" name="name"  value="{{ $cat->name}}"><br>

        <label for="gender">genre </label>
          <select name="gender">
              @foreach($genders as $key => $value)
                @if($key==$cat->gender_id)
                  <option selected="selected" value="{{$key}}">{{$value}}</option>
                @else
                  <option value="{{$key}}">{{$value}}</option>
                @endif
                @endforeach
          </select>
        <br>

        <label for="size">Taile </label>
        <input type="number" name="size" value="{{ $cat->size}}"><br>

         <label for="weight">Poids </label>
        <input type="number" name="weight" value="{{ $cat->weight}}"><br>

        <label for="age">Age </label>
        <input type="number" name="age" value="{{ $cat->age}}"><br>


        <label for="color">Couleur </label>
        <select  name="colors">
          @foreach($colors as $key => $value)
            <option value="{{ $key}}">{{ $value}}</option>
          @endforeach
        </select>

        <input type="submit" value="Updater un chat">
  </form>
@endsection




{{--
{!! Form::open(['url' => '/cat/update', 'class' => 'insertForm']) !!}
      {{{ Form::hidden('id', $cat->id)}}}
      <div class="form-group">
      {{{ Form::label('Nom') }}}
      {{{ Form::text('name', $cat->name) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Taille') }}}
      {{{ Form::number('size', $cat->size) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Poids') }}}
      {{{ Form::number('weight', $cat->weight) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Age') }}}
      {{{ Form::number('Age', $cat->age) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Sexe') }}}
      {{{ Form::select('gender', $genders, $cat->gender->id) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Couleur') }}}
      {{{ Form::select('colors[]', $colors, $cat->colors, ['multiple' => true]) }}}
    </div>
    {{{ Form::submit('updater un chat') }}}
  {!! Form::close() !!}
   --}}
