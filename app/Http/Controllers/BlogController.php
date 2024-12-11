<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Illuminate\Http\RedirectResponse;
class BlogController extends Controller
{
    private $blogs;
    public function __construct(){
        $this->blogs = new Blog();
    }

    public function index()
    {
       
        $blog=DB::table('blogs')->get();
        return Inertia::render('Admin/blog/index',['blogs'=>$blog]);
    }
    public function blog()
    {
       
        $blog=DB::table('blogs')->get();
        return Inertia::render('Public/blogpage',['blogs'=>$blog]);
    }
    public function blogdetail(Blog $blog){
      
        return Inertia::render('Public/blog/blogdetail',['blogs'=>$blog]);
    }
    public function create()
    {
        return Inertia::render('Admin/blog/create');
    }
    public function store(Request $request): RedirectResponse
    {
        
            Blog::create([
                'name' =>  $request->name,
                'description' =>  $request->description,
                'images'=>$request->images,
               
            ]);
    
            return Redirect::route('blog.index');
    
}
public function edit(Blog $blog)
    {
        return Inertia::render('Admin/blog/edit', ['blog'=>$blog]);
    }

    public function update($id, Request $request): RedirectResponse
    {
        Blog::find($id)->update([
            'name' =>  $request->name,
            'description' =>  $request->description,
        ]);
        return Redirect::route('blog.index');
    }
    public function delete($id): RedirectResponse{
        Blog::find($id)->delete();
          return Redirect::route('blog.index');
         }

}
