
@foreach($books as $book)
    <form action="/books/{{$book->book_id}}/">
        <button type="submit">{{$book->title}}</button>
    </form>
@endforeach