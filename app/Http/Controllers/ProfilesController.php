<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    //


    public function index(User $user)

    {
$follows = (auth()->user()) ? auth()->user()->following-> contains($user->id) : false ;

        return view('profiles.index' ,
            compact('user' , 'follows'));

    }

    public function edit(User $user){
        $this->authorize('update',$user->profile);
      return view('profiles.edit',compact('user'));
    }

    public function update(User $user){
        $this->authorize('update',$user->profile);

        $data =\request()->validate([
    'title'=>'required',
    'description'=>'required',
    'url'=>'url',
    'image'=>''
]);
        if (\request('image')){
            $image_path= request()->file('image')->store('uploads', 'public');
            $image =Image::make("storage/{$image_path}");
            $image->fit(1000 ,1000);
            $image->save();
            $image_array=  ['image'=> $image_path];

        }

        auth()->user()->profile()->update(array_merge($data,
        $image_array ??[]

        ));


        return redirect("/profile/{$user->id}");
    }
}
