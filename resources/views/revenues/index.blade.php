@extends('layouts.app')

@section('content')
    <h1>Revenus</h1>
    <a href="{{ route('revenues.create') }}" class="btn btn-primary">Ajouter un revenu</a>
    <ul>
        @foreach($revenues as $revenue)
            <li>{{ $revenue->amount }} - {{ $revenue->description }}
                <a href="{{ route('revenues.edit', $revenue) }}">Modifier</a>
                <form action="{{ route('revenues.destroy', $revenue) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
