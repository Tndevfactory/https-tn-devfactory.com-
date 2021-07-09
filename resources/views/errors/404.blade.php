@extends('errors::minimal')

@section('title', __('Not Found------'))
@section('code', '404')
@section('message', __('Not Found*88888'))

<h2>hi retour</h2>
<a class="navbar-brand" href="{{ url('/') }}">
   retour {{ config("app.name", "Laravel") }}
</a>
