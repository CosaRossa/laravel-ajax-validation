@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h2>NEW POST:</h2>
              </div>
              <div class="card-body">
                <form action="{{route('post.store')}}" method="post">
                  @csrf
                  @method('POST')
                  <div class="form-group">
                    <label for="title">Title:</label> <br>
                    <input class="@error ('title') is-invalid @enderror" type="text" name="title" value="{{old('title')}}">
                    @error ('title')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                      </span>
                    @enderror
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="body">Body:</label> <br>
                    <textarea class="@error ('body') is-invalid @enderror" name="body" rows="4" cols="70" value="{{old('body')}}"></textarea>
                      @error ('body')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{$message}}</strong>
                        </span>
                      @enderror
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="like">Like:</label> <br>
                    <input class="@error ('like') is-invalid @enderror" type="number" name="like" value="{{old('like', 0)}}">
                      @error ('like')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{$message}}</strong>
                        </span>
                      @enderror
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="dislike">Dislike:</label> <br>
                    <input class="@error ('dislike') is-invalid @enderror" type="number" name="dislike" value="{{old('dislike', 0)}}">
                      @error ('dislike')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{$message}}</strong>
                        </span>
                      @enderror
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="tag">Tag:</label> <br>
                    <input class="@error ('tag') is-invalid @enderror" type="text" name="tag" value="{{old('tag')}}">
                    @error ('tag')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                      </span>
                    @enderror
                  </div>
                  <br>
                  <button class="btn btn-primary" type="submit" name="button">SAVE</button>
                </form>
              </div>
            </div>
        </div>
    </div>
  </div>
@endsection
