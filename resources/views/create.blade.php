@extends('templates.template')
@section('content')

<div>
<div class="col-8 m-auto">
    @if(isset($book))
<form name="formEdit" id="formEdit" method="post"  action="{{url('books/'.$book->id)}}">
   
    @method('PUT')

        
    @else
    <form name="formCad" id="formCad" method="post"  action="{{url('books')}}">  
    @endif

@csrf

<input class="form-control" type="text" name="title" id="title" placeholder="Disciplina" value="{{$book->title ?? ''}}">
<select class="form-control" name="id_user" id="id_user">
    <option value="{{$book->relUser->id ?? ''}}">{{$book->relUser->name ?? ''}}</option>
    @foreach ($users as $user)
    <option value="{{$user->id}}">{{$user->name}}</option>
 
    @endforeach
</select>

<input class="form-control" type="date" name="pages" id="pages" placeholder="Data" value="{{$book->pages ?? ''}}">
<input class="form-control" type="time" name="price" id="price" placeholder="Horário" value="{{$book->price ?? ''}}">
<input class="form-control" type="text" name="link" id="link" placeholder="link" value="{{$book->link ?? ''}}">
<input class="form-control" type="text" name="texto" id="texto" placeholder="Informações sobre o evento" value="{{$book->texto ?? ''}}">
<input class="form-control" type="text" name="evento" id="evento" placeholder="Tipo do Evento" value="{{$book->evento ?? ''}}">

<input class="btn btn-primary" type="submit" value="@if(isset($book)) Editar @else Cadastrar @endif">

</form>
</div>
</div>
@endsection
