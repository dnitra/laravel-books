@extends('layouts/main', [
    'title' => 'About-us',
    'current_menu_item' => 'Home',
])

@section('content')
    <h1>The Books project</h1>

    <p>Do you want a book? Do you REALLY want a book? Well then we can sell one to you.</p>

    <div id="partners"> </div>

    <div id="latest-books"></div>

    @viteReactRefresh
    @vite('resources/js/partners.jsx')
    @vite('resources/js/latest-books.js')
@endsection
