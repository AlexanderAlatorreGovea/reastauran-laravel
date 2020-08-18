<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Comment;
use App\Category;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function allBlogs()  
    { 
        $blogs = Blog::paginate(4);
        $categories = Category::all(); 
        //$blog = Blog::all();
 
        // $blog->map(function ($b) {
        //     return $this->title.push($b->title);
        // });
 
        // dd($this->title);
        //9
        //$comment =  Blog::all();
        //dd($comment);
        //$article = Blog::find(1);
        //dd($article->comments()->comment_id);
        // foreach ($article->comments() as $role) {
        //     dd($role);
        // }
 
        //dd($article->comments());
       
        return view('blog.all-blogs', [ 
            "blogs" => $blogs,
            "categories" => $categories
        ]); 
    }  
 
    public function blog($slug)
    {     
        $title = str_replace('-', ' ', strtoupper($slug));
        $article = Blog::where('title', $title)->first();
        $comments = Comment::all(); 
        //$comments = Comment::all();
        //dd($comments);
        //dd($comments);
        //dd($article->comments($comments));
        //return dd($article->id);
        //$comment = Comment::find(1);
        //dd($comment->post->name);

        //$post = Blog::find(1);
       
        //$comment = $post->comments->first();
        return view('blog.single-blog', [
            'article' => $article,
            'comments' => $comments
        ]);
    }   

    public function category()
    {

    }

    public function storet(Request $request, $slug)
    { 
        request()->validate([
            'name' => ['required', 'string'], 
            'email' => ['required', 'string'],
            'comment' => ['required', 'string'],
            'website' => ['string'],
        ]); 

        $comment = new Comment();
        $comment->name = request('name');
        $comment->email = request('email');
        $comment->comment = request('comment');
        $comment->website = request('website');
        
        $title = str_replace('-', ' ', strtoupper($slug));
        $article = Blog::where('title', $title)->first();

        $article->comments()->save($comment);

        //$comment = Comment::find(1);
        //dd($comment->post());
        //dd($article);
        //dd($request);
        //$post->comments()->save($comment);
        //dd($post);
        //dd($comment);
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // { 
    //     return view('post');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
