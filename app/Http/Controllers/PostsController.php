<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// remember to use the Post model
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a paginated list of posts.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::paginate(5);

        return view('posts.index', compact('posts'));
    }
}
