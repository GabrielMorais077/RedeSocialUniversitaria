@extends('templates.template')
@section('content')

<div>
    <div class="col-8 m-auto">
        <form name="formCad" id="formCad" method="POST"  action="/post" enctype="multipart/form-data" >  
            @csrf
            <select class="form-control" name="id_user" id="id_user">
                <option value="{{$post->relUser->id ?? ''}}">{{$post->relUser->name ?? ''}} Selecione o autor da postagem</option>
                @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
             
                @endforeach
            </select>
            <input class="form-control" type="text" name="tipo" id="tipo" placeholder="Tipo da postagem" >
        <input class="form-control" type="text" name="postagens" id="postagens" placeholder="Texto da postagem" >
        <label for="image">Imagem para postagem</label>
        <input type="file" id="image" name="image" class="form-control-file">
        <input id="butons" btn type="submit" value="Cadastrar">
        </form>
    </div>
</div>

















@endsection