@extends('layouts.admin')

@section('content')

        <form action="{{route('admin.posts.store')}}" method="post">
            @csrf
            
            <div class="mb-3">
                    <label for="title" class="form-label">title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" placeholder="inserisci titolo" required>
            </div>

            
            <div class="mb-3">
                <label for="content" class="form-label">content</label>
                <textarea name="content" id="content"  cols="30" rows="10">{{old('content')}}</textarea>
            </div>

            
            <div class="mb-3">
                <label for="content" class="form-label">category</label>
                  <select name="category_id" id="category_id" class="form-control">
                    <option value="">select category</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        
                    @endforeach


                </select>
            </div>


            <div class="mb-3">
                <div class="form-group">
                    <h5>Tags</h5>
                    @foreach ($tags as $tag)
                        <div class="form-check-inline">
                            <input type="checkbox" {{in_array($tag->id,old('tags',[])) ? 'checked' : ''}} class="form-check-input" id="{{$tag->slug}}" name="tags[]" value="{{$tag->id}}">
                            <label class="form-check-label" for="{{$tag->slug}}">{{$tag->name}}</label>

                        </div>
                        @endforeach
                </div>
            </div>


            <div class="mb-3 form-check">
                <input type="checkbox" {{old('published') ? 'checked' : ''}} class="form-check-input" id="published" name="published">
                <label class="form-check-label" for="published">Pubblicato</label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    
@endsection