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

    public function update($id)
    {
        $author = Author::find($id);

        $author->lastname = request('lastname');
        $author->initials = request('initials');
        $author->age = request('age');
        $author->country = request('country');
        $author->save();

        return redirect('/authors')->with('success', 'Author has been updated successfully');
    }
    
    public function store()
    {
        $author = new Author();

        $author->lastname = request('lastname');
        $author->initials = request('initials');
        $author->age = request('age');
        $author->country = request('country');
        $author->save();

        return redirect('/authors')->with('success', 'Author has been added successfully');
    }
}
