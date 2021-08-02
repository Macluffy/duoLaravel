@extends('template/indexback')
@section('content')
<h1 class="text-center" style="margin: 150px"> BACK OFFICE | Show Portfolio</h1>
<a href="/modif/portfolio" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers portfolio a modifier</a>
<div style="width:100%; display:flex; flex-direction:column; justify-content:center; align-items:center;">
    
    <img src="{{asset('img/'.$article->img)}} "  style="width:400px;" alt="">
    <h5 style="margin:5px;">{{$article->titre}} </h5>
    <p style="margin:5px;">{{$article->text}} </p>
    <a class="text-center" href="{{route('edit',$article->id)}} " style="width:200px;  background-color: rgb(70, 199, 98); padding: 5px; color:white;" >edit</a>
    <form action="{{route('delete', $article->id)}} " method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" style="width:200px;  background-color: rgb(218, 10, 10); padding: 5px; color:white; border:none" >DELETE</button>
    </form>
</div>

@endsection