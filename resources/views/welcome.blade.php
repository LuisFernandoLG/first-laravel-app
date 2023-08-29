{{-- @extends('layouts.app')

@section('title', 'Welcome')
@section('description', 'This is our welcome page')

@section('content')
    <h1>Welcome</h1>
@endsection --}}

<x-layouts.app title="Welcome" description="This is our welcome page">
    <h1>Welcome: {{ Auth::user()->name }}</h1>
</x-layouts.app>
