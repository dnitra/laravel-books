@extends('layouts/main', [
    'title' => 'Register',
    'current_menu_item' => 'register',
])

@section('content')
    <form action="{{ route('register') }}" method="post">

        @csrf

        <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
        <br>

        <input type="email" name="email" placeholder="email" value="{{ old('email') }}">
        <br>

        <input type="password" name="password" placeholder="password" value="">
        <br>

        <input type="password" name="password_confirmation" placeholder="password confirmation" value="">

        <br>
        <button>Register</button>

    </form>
@endsection
