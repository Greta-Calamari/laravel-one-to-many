@extends('layouts.admin')


{{-- @dump($post)
@dump($categories) --}}

@section('content')


<form action="{{route('admin.posts.update', $post->id)}}" method="post">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title',$post->title)}}" placeholder="inserisci titolo">
    </div>
    
    <div class="mb-3">
        <label for="content" class="form-label">content</label>
        <textarea name="content" id="content"  cols="30" rows="10">{{old('content',$post->content)}}</textarea>
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">category</label>
          <select name="category_id" id="category_id" class="form-control">
            <option value="">select category</option>
            @foreach ($categories as $category)
                <option value="{{old($category->id)}}" {{$category->id == old('category_id',$post->category_id) ? 'selected' : ''}}>{{$category->name}}</option>
                
            @endforeach


        </select>
    </div>


    <div class="mb-3 form-check">
        <input type="checkbox" {{old('published',$post->published) ? 'checked' : ''}} class="form-check-input" id="published" name="published">
        <label class="form-check-label" for="published">Pubblicato</label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


    
@endsection