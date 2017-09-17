<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index')->with('posts', $posts);
    }

    public function create()
    {

        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/index');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('edit')->with('post', $post)->with('id', $id);
    }

    public function show($id)
    {
        $post = Post::with("comment.user")->where("id", $id)->get();
//        return $post;
        return view('show')->with('post', $post);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->input("title");
        $post->body = $request->input("body");
        $post->save();
        return redirect('index');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('index');
    }


    public function user($id)
    {
        $user = User::find($id);
        return $user;
    }

    public function indexByUser($id)
    {
        $user = Auth::user();
        return $user->id;
        $users = User::with('posts')->where("id", $id)->get();
        return view('indexByUser')->with('users', $users);
    }
}
