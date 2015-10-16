@extends('layouts.application')

@section('title', 'Categories')
@endsection
@section('content')

<h2 align="center">ALL CATEGORIES</h2>
<div>
    <ul>
    @foreach($categories as $key => $category)
        <li>
            <p>{{ $category->id }} . {{ $category->name }}</p>
            <p>{{ $category->des }}</p>
            <p>Posted in {{ $category->created_at }}</p>
        </li>
    @endforeach
    </ul>
</div>
@endsection
