@extends('layout')

@section('title', 'Registreer')

@section('content')
<h1>Registreer</h1>

<form method="POST" action="{{ route('register') }}">
  @csrf

  <label>Naam</label>
  <input class="@error('name') error-border @enderror" type="text" name="name" value="{{ old('name') }}">
  @error('name')
    <div class="error">
      {{ $message }}
    </div>
  @enderror

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

  <button type="submit">Registreer</button>

{{--  Heb je al een account? Dan kan je hier <a href="{{ route('login') }}">inloggen</a>.--}}
</form>
@endsection
