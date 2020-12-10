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
        $authors = Author::all();
        $books = Book::all();

        $averageAge = Author::avg('age');
        $countries = Author::all('country')->unique('country');
        $totalCountries = count($countries);

        $allAuthors = count($authors);
        $allBooks = count($books);

        $booksPerAuthor = $allBooks/$allAuthors;

        return view('authors.index', [
            'allAuthors' => $allAuthors,
            'author' => $author,
            'averageAge' => $averageAge,
            'booksPerAuthor' => $booksPerAuthor,
            'totalCountries' => $totalCountries,
        ]);
    }
    
    public function show($id)
    {    
        $authors = Author::find($id);
        $booksOfAuthor =  Book::where('authors_id', $id)->get();
        
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
