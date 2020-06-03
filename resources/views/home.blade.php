@extends('layouts.app')

@section('content')
<div class="container bg-white">
  <div class="py3">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <h1>Welcome to Moodly!</h1>
    <p class="lead">Share your feelings with the world and know you aren't alone.</p>
  </div>
  <div class="col-12 text-center">
    <entry></entry>
  </div>
</div>
@endsection
