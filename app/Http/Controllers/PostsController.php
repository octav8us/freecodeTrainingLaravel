<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
$users = auth()->user()->following()->pluck('profiles.user_id');
$posts =post::whereIn("user_id" ,$users)->with('user') ->latest()->paginate(5);

return view('posts.index' , compact('posts'));

    }


    public function create(){
        return view('posts.create');
    }

    public function show(\App\Models\post $post){
        return view('posts.show', compact('post'));
    }


    public function store(){

        $data = request()-> validate([
            'caption' => 'required',
            'image' => ['required', 'image']]);



        $image_path= request()->file('image')->store('uploads', 'public');
        $image =Image::make("storage/{$image_path}");
        $image->fit(1200,1200);
        $image->save();

        auth()->user()->posts()->create([
            'caption' =>$data['caption'],
            'image' =>$image_path
        ]);

        return redirect('/profile/'.auth()->user()->id);
    }
}
