<form  action="/articles" method="post">
    @csrf
    Image : <input type="text" name="img">
    Titre : <input type="text" name="titre">
    Destruction : <input type="text" name="description" >
    <button type="submit">Submit</button>
</form>