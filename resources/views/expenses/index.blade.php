@extends('layouts.app')

@section('content')
    <h1>Dépenses</h1>
    <a href="{{ route('expenses.create') }}" class="btn btn-primary">Ajouter une dépense</a>
    <ul>
        @foreach($expenses as $expense)
            <li>{{ $expense->amount }} - {{ $expense->description }}
                <a href="{{ route('expenses.edit', $expense) }}">Modifier</a>
                <form action="{{ route('expenses.destroy', $expense) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
