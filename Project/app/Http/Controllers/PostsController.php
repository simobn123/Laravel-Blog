<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostsController extends Controller
{

    public function index()
    {
       return view('blog.index')
           ->with('posts', Post::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jbg,png,jpeg|max:5048',
        ]);
        $slug = str::slug($request->title, '-');
        $imagesName = uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imagesName);

        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => $slug,
            'image_path' => $imagesName,
            'user_id' => auth()->user()->id
        ]);
        return redirect('/blog');
    }

    public function show($slug)
    {
        return view('blog.show')
            ->with('post', Post::where('slug', $slug)->first());
    }


    public function edit($slug)
    {
        return view('blog.edit')
        ->with('post', Post::where('slug', $slug)->first());

    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jbg,png,jpeg|max:5048',
        ]);
        $imagesName = uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imagesName);

        Post::where('slug', $slug)
        ->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => $slug,
            'image_path' => $imagesName,
            'user_id' => auth()->user()->id,
        ]);

        return redirect('/blog' . $slug)
        ->with('message', 'updated succsusfully');
    }

    public function destroy($slug)
    {
        Post::where('slug', $slug)->delete();
            return redirect('/blog')
        ->with('message', 'delete sucssufly');
    }
}
