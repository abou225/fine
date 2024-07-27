@extends('layouts.app')

@section('content')
    <h1>Ajouter un revenu</h1>
    <form action="{{ route('revenues.store') }}" method="POST">
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
            <label for="revenue_date">Date</label>
            <input type="date" name="revenue_date" id="revenue_date" required>
        </div>
        <button type="submit">Ajouter</button>
    </form>
@endsection
