@extends('layout.base')

@section('title','accueil')
@section('main')
  <h1>Ma page d'accueil</h1>

  <table>
    <tr>
      <th>id</th>
      <th>nom</th>
      <th>age</th>
      <th>size</th>
      <th>poids</th>
      <th>genre</th>
      <th>couleur</th>
      <th>delete</th>
      <th>update</th>
    </tr>
  @foreach($cats as $cat)
    <tr>
      <td>  {{$cat->id}} </td>
      <td>  {{$cat->name}} </td>
      <td>  {{$cat->age}} </td>
      <td>  {{$cat->size}} </td>
      <td>  {{$cat->weight}} </td>
      @if($cat->gender)
      <td>  {{$cat->gender->gender}} </td>
      @else
      <td> Na </td>
      @endif
      @if($cat->colors)
        <td>
        @foreach($cat->colors as $color)
        {{$color->color}}
        @endforeach
        </td>
      @else
      <td> Na </td>
      @endif
      <td>
          <form action="/cat/delete/{{$cat->id}}" method="GET">
            {{ csrf_field() }}
            <button type="submit" value="X">X</button>
          </form>
      </td>
      <td>
          <form action="/cat/update/{{$cat->id}}" method="GET">
            {{ csrf_field() }}
            <button type="submit" value="V">Up</button>
          </form>
      </td>
      </tr>
  @endforeach
</table>

@endsection
