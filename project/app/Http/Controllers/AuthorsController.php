<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index()
    {
        $author = Author::orderBy('initials', 'ASC')->paginate(50);
        $averageAge = Author::avg('age');

        return view('authors.index', [
            'author' => $author,
            'averageAge' => $averageAge,
            'booksPerAuthor' => Book::count() / Author::count(),
            'totalCountries' => Author::all()->unique('country')->count(),
        ]);
    }
    
    public function show($id)
    {    
        $authors = Author::find($id);
        $booksOfAuthor =  Book::where('author_id', $id)->get();
        
        return view('authors.show', [
            'authors' => $authors,
            'booksOfAuthor' => $booksOfAuthor,
        ]);
    }

    public function validateAuthor()
    {
        return request()->validate([
            'lastname' => 'required|min:2',
            'initials' => 'required|min:2',
            'age' => 'required|max:3',
            'country' => 'required|min:2',
        ]);
    }

    public function add()
    {
        return view('authors.add');
    }

    public function update($id)
    {
        Author::findOrFail($id)->update($this->validateAuthor());
        return redirect('/authors')->with('success', 'Author has been updated successfully');
    }
    
    public function store()
    {
        $author = Author::create($this->validateAuthor());
        return redirect('/authors')->with('success', 'Author has been added successfully');
    }
}
