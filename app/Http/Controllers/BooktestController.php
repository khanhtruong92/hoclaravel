<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //
    public function index(Request $request)
    {
        // Homework 3 (Connect Database)
        // Thực hiện truy vấn bằng query builder
        // $data = 'test';
        // $data = DB::table('books')->get();
        // return $data;

        // Homework 4 (Connect Database)
        // Chèn dữ liệu theo yêu cầu
        // $book = new Book();
        // $book->name = 'Database';
        // $book->description = 'data management system';
        // $book->save();

        return Book::all();
    }
}
