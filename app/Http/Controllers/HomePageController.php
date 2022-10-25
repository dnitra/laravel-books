<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class HomePageController extends Controller
{
    //
    public function index()
    {

        $crime_books = Book::where('category_2_id', 12)->with("authors")
            ->with("publishers")
            ->orderBy('publication_date', 'desc')->limit(10)->get();


        return view("index/index", compact("crime_books"));
    }
}
