@extends('template.indexback')


@section('content')
<h1  class="text-center" style="margin: 150px"> BACK OFFICE | Create portfolio</h1>
    <form  action="/portfolio" method="post">
        @csrf
        Image : <input type="text" name="img">
        Titre : <input type="text" name="titre">
        text : <input type="text" name="text" >
        <button type="submit">Submit</button>
        <a href="/backoffice" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers Back office</a>
    </form>
@endsection