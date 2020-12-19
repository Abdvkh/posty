<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
//        $posts = Post::get();// all[Laravel collection]
        $posts = Post::latest()->with(['user', 'likes'])->paginate(20);// paginated[LengthAwarePaginator[Lar.Collection]]

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
        ]);

        auth()->user()->posts()->create($request->only('body'));

        return back();
    }

    public function destroy(Post $post)
    {
        $this->authorize('destroy', $post);

        $post->delete();

        return back();
    }
}
