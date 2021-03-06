@extends('layouts.app')

@section('content')
<div class="container bg-white">
  <div class="py-3">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <h1>Welcome to Moodly!</h1>
    <p class="lead">Share your feelings with the world and know you aren't alone.</p>
  </div>
  <div class="text-center">
    <entry user_id="{{ $user->id }}"></entry>
    <entry-list></entry-list>
  </div>
</div>
@endsection
