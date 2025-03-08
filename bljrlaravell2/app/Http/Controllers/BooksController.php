<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genres;
use App\Models\Books;
use App\Models\comments;
use File;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;


class BooksController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
            new Middleware(IsAdmin::class, except: ['index','show']),
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Books::all();
        return view('books.tampil', ['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genres::all();

        return view('books.tambah', ['genres' => $genres]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required',
            'summary' => 'required',
            'stok' => 'required',
            'genre_id' => 'required'
          
        ]);

        $books = new Books;

        $newImageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('image'), $newImageName);

        $books->title = $request->input('title');
        $books->summary = $request->input('summary');
        $books->stok = $request->input('stok');
        $books->genre_id = $request->input('genre_id');
        $books->image = $newImageName;
 
        $books->save();
 
        return redirect('/books');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $books= Books::find($id);

        return view('books.detail', ['books'=>$books]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $books= Books::find($id);

        $genres= Genres::all();

        return view('books.edit', ['books'=>$books, 'genres' => $genres]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'mimes:jpeg,jpg,png|max:2048',
            'title' => 'required',
            'summary' => 'required',
            'stok' => 'required',
            'genre_id' => 'required'
          
        ]);
        $books = Books::find($id);

        if($request->has('image')){
            //hapus data lama
            File::delete('image/'. $books->image);

            $newImageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('image'), $newImageName);

            $books->image= $newImageName;
        }
        $books->title= $request->input('title');
        $books->summary= $request->input('summary');
        $books->genre_id= $request->input('genre_id');
        $books->save();
        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $books = Books::find($id);
        File::delete('image/'. $books->image);
        $books->delete();

        return redirect('/books');
    }

    // public function comments(Request $request, $post_id)
    // {
    //     $request->validate([
    //         'sumary' => 'required|mimes:jpeg,jpg,png|max:2048',   
    //     ]);

    //     $userId = Auth::id();

    //     $comment = new comments;
    //     $comment->sumary = $request->input('sumary');
    //     $comment->book_id = $post_id;
    //     $comment->user_id = $user_id;

    //     $comment->save();

    //     return redirect('/books/', $book_id);       

    // }

    
}
