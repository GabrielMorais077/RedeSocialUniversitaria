@extends('templates.template')
@section('content')

<div id="fundo" class="jumbotron">
  @php
        $user=$book->find($book->id)->relUser;
       @endphp
       <h3>Sobre o evento</h3>
  <tr>
    <th scope="row">Disciplina: {{$book->title}}</th><br>
    <td>Data: {{$book->pages}}</td><br>
    <td>Horário: {{$book->price}}</td><br>
    <td>Professor: {{$user->name}}</td><br>
    <td>Email: {{$user->email}}</td><br>
    
  </tr>
  <hr class="my-4">
  <p>{{$book->texto}}</p>
  <a id="nav_bar" class="btn  btn-lg" href="{{$book->link}}" role="button">Acessar o Evento</a>
</div>
{{$book->nEvento}}

        
        





    
@endsection