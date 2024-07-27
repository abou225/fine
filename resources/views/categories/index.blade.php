
@extends('layouts.app')

@section('content')
    <h1>Catégories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Ajouter une catégorie</a>
    <ul>
        @foreach($categories as $category)
            <li>{{ $category->name }}
                <a href="{{ route('categories.edit', $category) }}">Modifier</a>
                <form action="{{ route('categories.destroy', $category) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
