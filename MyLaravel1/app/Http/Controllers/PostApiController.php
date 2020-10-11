<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostApiController extends Controller
{
  public function getAllPost() {
    $posts = Post::all();
    return response() -> json($posts);
  }

  public function getBestPost() {
    $posts = Post::orderBy('like', 'desc') -> take(10) -> get();
    return response() -> json($posts);
  }
}
