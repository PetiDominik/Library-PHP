
<form action="/api/books/{{$book->book_id}}/" method="post">
    @csrf
    @method("PUT")
    <input type="text" name="author" placeholder="Author" value="{{$book->author}}"/>
    <input type="text" name="title" placeholder="Title" value="{{$book->title}}" />
    <input type="number" name="pieces" placeholder="pieces" value="{{$book->pieces}}" />

    <input type="submit" value="Ok" />
</form>