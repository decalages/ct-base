@extends('layouts.default')
@section('title') Dashboard -@endsection


@section('content')
<div class="callout callout-info">
          <h4>Bonjour !</h4>

          <p>Bienvenue sur notre site {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}.</p>
        </div>
@endsection
