@extends('layouts/main', [
    'title' => 'Home',
    'current_menu_item' => 'Home',
])

@section('content')
    <h1>The Books project</h1>

    <p>Do you want a book? Do you REALLY want a book? Well then we can sell one to you.</p>

    <div id="partners"> </div>
    <div id="latest-books">
        @foreach ($crime_books as $book)
            <div class="book">
                <h2>{{ $book->title }}</h2>
                <img src="{{ $book->image }}" alt="{{ $book->title }}">
                <p><strong>Authors: </strong>{{ $book->authors->pluck('name')->join(', ') }}</p>
                <p><strong>Published by: </strong>{{ $book->publishers->pluck('name')->join(', ') }}</p>
                <p>{{ $book->descritpion }}</p>
            </div>
        @endforeach
    </div>

    @viteReactRefresh
    @vite('resources/js/partners.jsx')
    @vite('resources/js/latest-books.js')
@endsection
