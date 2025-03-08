<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\comments;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $book_id)
    {
        $request->validate([
            'sumary' => 'required',   
        ]);

        $userId = Auth::id();

        $comment = new comments;
        $comment->sumary = $request->input('sumary');
        $comment->book_id = $book_id;
        $comment->user_id = $userId;

        $comment->save();

        return redirect('/books/'. $book_id);       

    }
}
