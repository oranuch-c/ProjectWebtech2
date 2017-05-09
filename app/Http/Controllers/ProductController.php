<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $books = DB::table('books')->get();
        $news = DB::table('books')
            ->join('new_books', 'books.id', '=', 'new_books.book_id')
            ->select('books.*')
            ->limit(4)
            ->get();

        return view('index', ['books' => $books, 'new'=>$news]);
    }
    public function show($id)
    {
        $book = DB::table('books')->where('id', $id)->get();
        return view('product_details', ['book'=>$book]);
    }
}
