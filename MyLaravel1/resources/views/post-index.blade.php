@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  POSTS
                  <a class="btn btn-primary float-right" href="{{route('post.create')}}">NEW POST</a>
                  <div>
                    <input id="best-of" type="checkbox" name="best_of">
                    <label for="best_of">BEST OF</label>
                  </div>
                </div>

                <div class="card-body">
                    <ul id="posts">
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
