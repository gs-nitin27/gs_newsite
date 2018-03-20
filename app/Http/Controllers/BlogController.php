<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;;
use App\Http\Requests;
use App\WebModel;



class BlogController extends Controller
{
    /**
     * Posts
     *
     * @return void
     */
    public function showPosts()
    {

echo "d";
        // $posts = Post::paginate(5);

        // print_r($posts); die();

        // if (Request::ajax()) {
        //     return Response::json(View::make('posts', array('posts' => $posts))->render());
        // }
        // return View::make('blog', array('posts' => $posts));


    }
}