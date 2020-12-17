<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $books = Book::orderBy('title', 'ASC')->paginate(50);
        $authors = Author::all();

        return view('books.index', [
            'books' => $books,
            'authors' => $authors,
        ]);
    }

    public function show($id){
        
        $books = Book::find($id);
        $authors = Author::all();

        return view('books.show', [
            'books' => $books,
            'authors' => $authors,
            
        ]);
    }

    public function validateNewBook()
    {
        return request()->validate([
            'isbn' => 'required|min:7',
            'title' => 'required|min:3',
            'author_id' => 'required|min:1',
            'pages' => 'required|min:1',
        ]);
    }

    public function add()
    {
        $authors = Author::all();
        return view('books.add',[
            'author' => $authors,
        ]);
    }

    public function store(){
        Book::create($this->validateNewBook());
        return redirect('/books')->with('success', 'Book has been added successfully');
    }

    public function update($id){

        Book::findOrFail($id)->update($this->validateNewBook());
        return redirect('/books')->with('success', 'Book has been updated successfully');
    }
}
