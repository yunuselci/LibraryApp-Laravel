<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\Book;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = new \App\Book();
    }

    public function addBook(Request $request)
    {
        $post = $request->all();
        try {
            $book = new \App\Book();
            $book->name = $post['book-name'];
            $book->author = $post['book-author'];
            $book->image_url = $post['book-image-url'];
            $book->owner_id = $post['book-owner-id'];
            $book->temp_owner_id = $post['temp-book-owner-id'];
            $book->save();
            return redirect('books');
        } catch (\Exception $exception) {
            return response()->json(['success' => false, 'status' => $exception]);
        }
    }

    public function showBooks(){
        $books = DB::table('books')->paginate(15);

        return view('books.index', ['books' => $books]);
    }
}
