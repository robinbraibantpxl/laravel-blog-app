@extends('layout')

@section('title', 'Login')

@section('content')
    <h1>Aanmelden</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label>E-mail</label>
        <input class="@error('email') error-border @enderror" type="text" name="email" value="{{ old('email') }}">
        @error('email')
        <div class="error">
            {{ $message }}
        </div>
        @enderror

        <label>Wachtwoord</label>
        <input class="@error('password') error-border @enderror" type="password" name="password">
        @error('password')
        <div class="error">
            {{ $message }}
        </div>
        @enderror

        <button type="submit">Meld je aan</button>
    </form>
@endsection
