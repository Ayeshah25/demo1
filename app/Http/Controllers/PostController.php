<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    //
    function index(){
        // $p = Post::all();
        $p = Post::latest()->paginate(10);
        return view("all-posts", ["Posts"=>$p] );
    }


//open view on insert
     function create(){
        //form
        return view("add-post");
    }
//insert query
     function store(Request $form){
        //creating an object
        $post = new Post();

        $form->validate([

         'title' => 'required|unique:posts|max:200',
         'description' => 'required|max:200'
        ]);
        // tablerow = form_data
        // age = 12
        // title = HTML
        // $t = $_POST['title']
        $post->title = $form->title;
        $post->description = $form->description;
        //query
        $post->save(); 

        // INSERT INTO post ...  

        return redirect('/')->withSuccess('Post is added !');
    }

    public function edit($id){
       $post_data = Post::where('id',$id)->first();
        return view("edit-post", compact('post_data'));
    }



   function update(Request $form, $id){
        $post_data = Post::where('id',$id)->first();

        $post_data->title = $form->title;
        $post_data->description = $form->desc;
        $post_data->save();
        return redirect('/');
    }

     public function del($id){
       $post_data = Post::whereId($id)->first();
       $post_data->delete();
        return redirect('/');
    }

}
