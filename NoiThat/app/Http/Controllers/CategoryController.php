<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;

class CategoryController extends Controller
{
    private $categories;
    public function __construct(){
        $this->categories = new Category();
    }

    public function index()
    {
       
        $category=DB::table('categories')->get();
        return Inertia::render('Admin/category/index',['categories'=>$category]);
    }
    public function show()
    {
       
        $categories=DB::table('categories')->get();
        return Inertia::render('Public/product/productpage',['categories'=>$categories]);
    }
    
    public function create()
    {
        return Inertia::render('Admin/category/create');
    }
    public function store(Request $request): RedirectResponse
    {
        
            Category::create([
                'name' =>  $request->name,
                
               
            ]);
    
            return Redirect::route('category.index');
    
}
public function edit(Category $category)
    {
        return Inertia::render('Admin/category/edit', ['client'=>$category]);
    }

    public function update($id, Request $request): RedirectResponse
    {
        Category::find($id)->update([
            'name' =>  $request->name,

        ]);
        return Redirect::route('category.index');
    }
    public function delete($id): RedirectResponse{
        Category::find($id)->delete();
         return Redirect::route('category.index');
        }


}
