<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\BookGenre;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with('genres')->get();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        $book_genres = BookGenre::all();
        return view('books.create', compact('genres', 'book_genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        // dd($request->genre_ids);
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year_published' => 'required|integer',
            'synopsis' => 'nullable',
            'genre_ids' => 'required|array',
        ]);

        $genres = Genre::whereIn('id', $request->genre_ids)->pluck('name')->toArray();

        // dd($request->genre_ids);

        $book = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'year_published' => $request->year_published,
            'synopsis' => $request->synopsis,
            'genre' => implode(', ', $genres),
        ]);

        // dd($book);

        $book->genres()->attach($request->genre_ids);

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $genres = Genre::all();
        $book_genre = BookGenre::all();
        return view('books.edit', compact('book', 'genres', 'book_genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year_published' => 'required|integer',
            'synopsis' => 'nullable',
            'genre_ids' => 'required|array',
        ]);

        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'year_published' => $request->year_published,
            'synopsis' => $request->synopsis,
        ]);

        // dd($request->genre_ids);
        $book->genres()->sync($request->genre_ids);

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        // $book->genres()->detach();
        // $book->categories()->detach();
        $book->delete();

        return redirect()->route('books.index');
    }
}
