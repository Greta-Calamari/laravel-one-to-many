@extends('layouts.admin')


@section('content')

<a href="{{route('admin.posts.create')}}" class="btn btn-primary">Crea nuovo post</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Creation Date</th>
        <th scope="col">Modifica</th>
        
        
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      
      <tr>
        
        <td> <a href="{{route('admin.posts.show',$post->id)}}">{{$post->id}}</a> </td>
        <td> <a href="{{route('admin.posts.show',$post->id)}}">{{$post->title}}</a> </td>
        <td>{{$post->created_at}}</td>
        <td><a href="{{route('admin.posts.edit',$post->id)}}" class="btn btn-primary">Modifica</a></td>
        <td><a href="{{route('admin.posts.show',$post->id)}}" class="btn btn-primary">Visualizza</a></td>
        <td>
          <form action="{{route('admin.posts.destroy',$post->id)}}" method="post">
          
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Cancella</button>
          
          </form>
        </td>


        
        
      </tr>
      @endforeach
      
    </tbody>
  </table>

  {{$posts->links()}}

    
@endsection