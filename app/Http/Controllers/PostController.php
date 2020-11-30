<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    
    function index()
    {
        $user = request()->user();
        $data['list_post'] = $user->post;
        return view('post.blog', $data);
    }

    function create()
    {
        return view('post.create');
    }

    function store()
    {
        $post = new Post;
        $post->id_user = request()->user()->id;
        $post->title = request('title');
        $post->tag = request('tag');
        $post->content = request('content');
        $post->save();
        return redirect('post')->with('success', 'Data berhasil disimpan');
    }


    function show(Post $post)
    {
        $data['post'] = $post;
        return view('post.show', $data);
    }

    function edit(Post $post)
    {
        $data['post'] = $post;
        return view('post.edit', $data);
    }

    function update(Post $post)
    {
        $post->title = request('title');
        $post->tag = request('tag');
        $post->content = request('content');
        $post->save();

        return redirect('post')->with('success', 'Data berhasil disimpan');
    }

    function destroy(Post $post)
    {

        $post->delete();
        return redirect('post')->with('danger', 'Data berhasil hapus');;
    }
}
