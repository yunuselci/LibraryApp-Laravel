<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::all();

        return view('books')->with('books', $books);
    }

    public function addBook(Request $request)
    {
        $users = User::all();
        if ($request->isMethod('post')) {
            $post = $request->all();
            $request->validate(
                [
                    'book-name' => 'required',
                    'book-author' => 'required',
                    'book-image-url' => 'required',
                    'book-owner-id' => 'required|numeric',
                    'temp-book-owner-id' => 'required|numeric',

                ]
            );
            $book = new \App\Book();
            $book->name = $post['book-name'];
            $book->author = $post['book-author'];
            $book->image_url = $post['book-image-url'];
            $book->owner_id = $post['book-owner-id'];
            $book->temp_owner_id = $post['temp-book-owner-id'];
            $book->save();
            return redirect('books');
        }
        return view('addbook')->with('users', $users);
    }

    public function showBooks()
    {
        $books = Book::paginate(15);

        return view('books.index', ['books' => $books]);
    }
}