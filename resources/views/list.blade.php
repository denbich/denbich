@extends('template')

@section('title')
    Lista Książek
@endsection

@section('content')

    <div class="container">
        @forelse ($bookslist as $book)
            Tu będą dane książki!
        @empty
            Brak rekordów!
        @endforelse
    </div>

@endsection
