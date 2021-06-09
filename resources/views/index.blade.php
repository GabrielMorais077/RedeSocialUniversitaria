@extends('templates.template')
@section('content')
<div>
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://static.wixstatic.com/media/6fa624_44b0632cb45746d4ad0b7064c9740c16~mv2.jpg/v1/fill/w_1347,h_700,al_c,q_85/imagem%201%20site%202%20editado%20verde%20%236FA819%20-2.webp" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-left">
          <h5>First slide label</h5>
          <p>Cadastre seus eventos para uma melhor interação com os pa.</p>

    
@auth
    

          <p><a id="butons" class=" btn btn-lg " href="{{url('books/create')}}" role="button">Cadastrar Horarios <span class="sr-only">(current)</span></a></p>
          @endauth
        </div>
      </div>
     
  </div>

</div>

  @foreach ($book as $books)
  @php
    $user=$books->find($books->id)->relUser;                  
  @endphp
  
  <div class="card col-md-4" >
    
    <div class="card-body">
      @csrf

        
     
      <h5 class="card-title">{{$books->evento}}</h5>
      
      <p class="card-text">
        
        <tr>
          
          <td>Disciplina: {{$books->title}}</td><br>
          <td >Ofertante: {{$user->name}}</td><br>
          <td>Data: {{$books->pages}}</td><br>
          <td>Horario: {{$books->price}}</td><br>
          <td>Local: <a href="{{$books->link}}">{{$books->link}}</a> </td><br>
      
        </tr>
        
      </p>
      <a  href="{{url('books/'.$books->id)}}">
        <button class="btn  ">Saber mais</button>
      </a>
      @auth
      <a href="{{url('books/'.$books->id.'/edit')}}">
          <button class="btn ">Editar</button>
        </a>
        
        <a href="{{url("books/$books->id")}}" class="js-del">
          <button class="btn ">Deletar</button>
      </a>
      @endauth
    </div>
  </div>

  @endforeach
             

</div>
<div id="margin">


  @foreach ($post as $posts)
  <div class="jumbotron ">
    @php
    $user=$books->find($books->id)->relUser;                  
  @endphp
    <h1 class="display-4">{{$posts->tipo}}</h1>
    <p class="lead">Postado por: {{$user->name}}</p>
    <p class="lead">{{$posts->postagens}}</p>
 
    <hr class="my-4">
    <input type="text" placeholder="Comentarios" value="{{$posts->comentarios}}">
  
    <form name="formCad" id="formCad" method="POST"  action="/comentarios" enctype="multipart/form-data" > 
        <input class="form-control" type="text" name="comentarios" id="comentarios" placeholder="Adicione seu comentario" >
      <a href="{{url('/comentario')}}">
        <button class="btn  btn-lg ">Enviar</button>
      </a>
    </form>
      @auth
          
   
      <a href="{{url('delete/' .$posts->id)}}" class="js-del">
        <button class="btn  btn-lg ">Deletar</button>
        
      </a>
      @endauth
    </p>
  </div>
  
 
  @endforeach
</div>

@endsection