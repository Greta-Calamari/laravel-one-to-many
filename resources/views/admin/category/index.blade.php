@extends('layouts.admin')


@section('content')

<a href="{{route('admin.categories.create')}}" class="btn btn-primary">Crea nuovo post</a>
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
      @foreach ($categories as $category)
      
      <tr>
        
        <td> <a href="{{route('admin.categories.show',$category->id)}}">{{$post->id}}</a> </td>
        <td> <a href="{{route('admin.categories.show',$category->id)}}">{{$post->title}}</a> </td>
        <td>{{$post->created_at}}</td>
        <td><a href="{{route('admin.categories.edit',$category->id)}}" class="btn btn-primary">Modifica</a></td>
        <td><a href="{{route('admin.categories.show',$category->id)}}" class="btn btn-primary">Visualizza</a></td>
        <td>
          <form action="{{route('admin.categories.destroy',$category->id)}}" method="post">
          
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Cancella</button>
          
          </form>
        </td>


        
        
      </tr>
      @endforeach
      
    </tbody>
  </table>

  {{$categories->links()}}

    
@endsection