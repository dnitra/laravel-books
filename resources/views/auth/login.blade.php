@extends('layouts/main', [
    'title' => 'Login',
    'current_menu_item' => 'login',
])

@section('content')
    @if ($errors->count())
        @foreach ($errors->all() as $error)
            <div class="error">{{ $error }}</div>
        @endforeach
    @endif
    <form action="{{ route('login') }}" method="post">

        @csrf

        <input type="email" name="email" placeholder="email" value="{{ old('email') }}">

        <input type="password" name="password" placeholder="password" value="">

        <button>Login</button>

    </form>
@endsection
