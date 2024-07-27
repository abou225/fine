@extends('layouts.app')

@section('content')
    <h1>Ajouter une dépense</h1>
    <form action="{{ route('expenses.store') }}" method="POST">
        @csrf
        <div>
            <label for="amount">Montant</label>
            <input type="text" name="amount" id="amount" required>
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" required>
        </div>
        <div>
            <label for="expense_date">Date</label>
            <input type="date" name="expense_date" id="expense_date" required>
        </div>
        <div>
            <label for="category_id">Catégorie</label>
            <select name="category_id" id="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Ajouter</button>
    </form>
@endsection
