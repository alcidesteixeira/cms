<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        //#1
      Post::create($request->all());

      return redirect('posts');
        //#2
//      $input = $request->all();
//      $input['title'] = $request->title;
//      Post::create($request->all());
        //#3
//        $post = new Post;
//        $post->title = $request->title;
//        $post->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = Post::findOrFail($id);

        $post->update($request->all());

        return redirect('posts');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Ver form de edit, pq tem o botão de delete lá
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('posts');
    }

    public function contact(){

        return view('contact');

    }

    public function show_post($id, $abc){

    //    return view('post')->with('id', $id);
        return view('post', compact('id', 'abc'));

    }

    public function specsSheet($altura, $peso, $idade)
    {
        return view('specsSheet', compact('altura', 'peso', 'idade'));
    }

    public function contactos()
    {
        $people = ['alcides', 'manuel', 'nunes', 'teixeira'];

        return view('contactos', compact('people'));
    }
}


