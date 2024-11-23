<?php

namespace App\Http\Controllers;

use App\Models\BookGenre;
use App\Http\Requests\StoreBookGenreRequest;
use App\Http\Requests\UpdateBookGenreRequest;

class BookGenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book_genres = BookGenre::with(['book', 'genre'])->get();

        return view('book_genres.index', compact('book_genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookGenreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BookGenre $book_genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookGenre $book_genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookGenreRequest $request, BookGenre $book_genre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookGenre $book_genre)
    {
        //
    }
}
