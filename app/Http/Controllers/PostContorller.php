<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\postType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class PostContorller extends Controller
{
    //
    public function dashboard(){
        $postTypes =  postType::all();
        $user_id =Auth::user()->id;
         $posts = Post::where('user_id',$user_id)->get();
        return view('dashboard',compact('postTypes','posts','user_id'));
    }

    public function newPost (Request $request){
        if ($request->hasFile('image')) {
            $file = $request->image;
           $image =      $fileName = time() . rand(0, 1000000) . '.' . $file->getClientOriginalExtension();
            $path = Storage::putFileAs('public/uploads', $file, $fileName);
          }
     $req =$request->except('_token');
     $req['user_id'] = Auth::user()->id;
      $req['image'] = $image;

    Post::create($req);

    return redirect()->back();
    }

    public function changeStatu($id){
        $user_id =Auth::user()->id;

         $post = Post::where([['user_id',$user_id],['id',$id]])->first();
         $post->postStatus=1; 
         $post->save();
         return redirect()->back();


    }

    public function search(Request $request){
        // Get the search value from the request
          $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
             $posts = Post::query()->where('postStatus',0)
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('courseName', 'LIKE', "%{$search}%")
            ->orWhere('courseCode', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('search', compact('posts'));
    }


    public function index(Request $request){
        // Get the search value from the request
          $posts =  Post::orderBy('id', 'DESC')->take(5)->get();
        // Search in the title and body columns from the posts table
         
    
        // Return the search view with the resluts compacted
        return view('welcome',compact('posts'));
    }


    public function showBook($id){
     $post = Post::where('id',$id)->first();

     return view('book',compact('post'));
    }


}
