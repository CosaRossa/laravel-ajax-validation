<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

  public function index() {
    return view('post-index');
  }

  public function create() {
    return view('post-create');
  }

  public function store(Request $request) {
    $data = $request -> validate([
      'title' => 'required|max:30',
      'body' => 'required',
      'like' => 'required|gte:0',
      'dislike' => 'required|gte:0',
      'tag' => 'required'
    ]);

    $post = Post::create($data);

    return redirect() -> route('post.index');
  }
}
