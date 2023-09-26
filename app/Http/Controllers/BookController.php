<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //API
    public function index() {
        return response()->json(Book::all());
    }
    
    public function show($id) {
        return response()->json(Book::find($id));
    }

    
    public function store(Request $request) {
        $book = new Book();
        $book->author = $request->author;
        $book->title = $request->title;
        $book->pieces = $request->pieces;
        $book->save();
        return redirect("/books");
    }

    public function update(Request $request, $id) {
        $book = Book::find($id);
        $book->author = $request->author;
        $book->title = $request->title;
        $book->pieces = $request->pieces;
        return redirect("/books");
    }

    public function destroy($id) {
        Book::find($id)->destroy();
        return redirect("/books");
    }

    //View

    public function listView() {
        return view("book.list", ["books" => Book::all()]);
    }
    
    public function showView($id) {
        return view("book.show", ["book" => Book::find($id)]);
    }
    
    public function storeView() {
        return view("book.new");
    }

    public function updateView($id) {
        return view("book.edit", ["book" => Book::find($id)]);
    }

    /* public function destroyView($id) {
        return response()->json(Book::find($id));
    } */
}
