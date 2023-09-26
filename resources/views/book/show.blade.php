<h1>{{$book->title}}</h1>

<form action="/books/edit/{{$book->book_id}}/" method="get">
    <button type="submit">Szerkesztés</button>

</form>

<form action="/api/books/{{$book->book_id}}/" method="post">
    @csrf
    @method("delete")
    <button type="submit">Törlés</button>
</form>