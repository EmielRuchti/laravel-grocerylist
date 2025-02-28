@extends('layouts.app')

@section('title', 'Item')

@section('content')
    <h1>Item</h1>
    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>Beschrijving</th>
                <th>Categorie</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->category->name }}</td>
                <td>
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Verwijderen</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('items.edit', $item->id) }}">Bewerken</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection