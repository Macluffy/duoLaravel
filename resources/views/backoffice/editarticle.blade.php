@extends('template/indexback')
@section('content')
<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Edit Article</h1>

    <form  action="{{route('update', $article->id)}}" method="post">
        @csrf
        @method('PUT')
        Image : <input value="{{$article->img}} " type="text" name="img">
        Titre : <input value="{{$article->titre}}" type="text" name="titre">
        Destruction : <input value="{{$article->description}}" type="text" name="description" >
        <button type="submit">SAVE</button>
        <a href="/modif/article" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers article a modifier</a>


        
    </form>
    
    
    



@endsection

