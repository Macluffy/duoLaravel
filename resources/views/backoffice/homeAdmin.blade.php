@extends('template.indexback')
@section('content')
    <div class="container" style="display:flex; flex-direction:column; align-items:center;">
        <h1  style="margin: 150px"> BACK OFFICE | Dashboard</h1>

        <a href="/home" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white;">Retours vers le site</a>
    </div>
    <div style='display:flex; justify-content:center'>
        <div style="margin: 10rem; display:flex; flex-direction:column; align-items:center; ">
            <h5>Modifier Blog</h5>
            <p>CRUD Blog</p>
            <a class="text-center" href="/modif/article" style="width:200px;  background-color: rgb(102, 168, 212); padding: 20px; color:white;" >Direction Blog</a>





        </div>
        <div style="margin: 10rem; display:flex; flex-direction:column; align-items:center;">
            <h5>Modifier Portfolio</h5>
            <p>CRUD Portfolio</p>
            <a class="text-center" href="/modif/portfolio" style="width:200px;  background-color: rgb(102, 168, 212); padding: 20px; color:white;" >Direction Portfolio</a>
        
        </div>
    </div>
    <div style='display:flex; justify-content:center'>
        <div style="margin: 10rem; display:flex; flex-direction:column; align-items:center; ">
            <h5>Ajouter article Blog</h5>
            <p>CRUD Blog</p>
            <a class="text-center" href="/createArticle" style="width:200px;  background-color: rgb(70, 199, 98); padding: 20px; color:white;" >Creer</a>





        </div>
        <div style="margin: 10rem; display:flex; flex-direction:column; align-items:center;">
            <h5>Ajouter article Portfolio</h5>
            <p>CRUD Portfolio</p>
            <a class="text-center" href="/createPortfolio" style="width:200px;  background-color: rgb(70, 199, 98); padding: 20px; color:white;" >Creer</a>
        
        </div>
    </div>





@endsection