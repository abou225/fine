
@extends('layouts.app')

@section('content')
    <h1>Ajouter une catégorie</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" required>
        </div>
        <button type="submit">Ajouter</button>
    </form>
@endsection
