@extends('layouts.app')

@section('title', 'Index')

@section('content')
    <h1>Items</h1>
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
            @foreach($items as $item)
                <tr>
                    <td><a href="{{ route('items.show', $item->id)}}">{{ $item->name }}</a></td>
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
            @endforeach
        </tbody>
    </table>
@endsection