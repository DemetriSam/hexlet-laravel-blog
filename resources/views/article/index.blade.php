@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <a href="{{ route('articles.show', ['article' => $article->id]) }}">
            <h2>{{ $article->name }}</h2>
        </a>
        <a href="{{ route('articles.edit', ['article' => $article->id]) }}">
            <p>Редактировать статью</p>
        </a>
        <div>
            <x-delete :id="$article->id" />
        </div>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{ Str::limit($article->body, 200) }}</div>
    @endforeach
    {{ $articles->links() }}
@endsection
