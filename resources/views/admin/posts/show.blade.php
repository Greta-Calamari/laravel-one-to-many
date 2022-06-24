@extends('layouts.admin')


@section('content')

        <h1>{{$post->title}}</h1>

        {{-- <h2>{{$post->category ? $post->category->name : '-'}}</h2> --}}
        @if($post->category != null)
        <h2>Categoria: {{$post->category->name}}</h2>
        @else
        <h2>Nessuna categoria assegnata</h2>
        @endif

        <small>{{$post->created_at}}</small>
        <p>{{$post->content}}</p>
        <h5>Pubblicato: {{$post->published}}</h5>

        <h5>{{$post->published ? 'Published' : 'Unpublished'}}</h5>

        <ul>
                @foreach ($post->tags as $item)
                   
                   <li>{{$item->name}}</li>
                    
                @endforeach
        </ul>
@endsection


    