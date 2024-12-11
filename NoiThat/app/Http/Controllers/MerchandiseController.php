<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Merchandise;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
class MerchandiseController extends Controller
{
    private $merchandises;
    public function __construct(){
        $this->merchandises = new Merchandise();
    }

    public function index()
    {
   
        $merchandise=DB::table('merchandises')->get();
        return Inertia::render('Admin/merchandise/index',['merchandises'=>$merchandise]);
       
    }
    //Hiển thị sản phẩm trang public
    public function product(){
        $merchandise=DB::table('merchandises')->get();
        return Inertia::render('Public/product/productpage',['merchandises'=>$merchandise]);
    }
    //Hiển thị chi tiết sản phẩm
    public function productdetail(Merchandise $merchandise){
      
        return Inertia::render('Public/product/productdetail',['merchandise'=>$merchandise]);
    }
    
    public function create()
    {
        return Inertia::render('Admin/merchandise/create');
    }
    public function store(Request $request): RedirectResponse
    {
        // Validator::make($request->all(),[

       
        //     'int_category' => 'required',
        //     'name' => 'required',
        //     'quality' => 'required',
        //     'description' => 'required',
        //     'material' => 'required',
        //     'price' => 'required',
        //     'discount' => 'required',
        //     'images' => 'required',
        // ])->validate();
    
       
            // Create a new merchandise record
            Merchandise::create([
                'int_category' =>  $request->int_category,
                'name' =>  $request->name,
                'quality' =>   $request->quality,
                'description' =>  $request->description,
                'material' => $request->material,
                'price' => $request->price,
                'discount' => $request->discount,
                'images' => $request->images,
            ]);
    
            return Redirect::route('merchandise.index');
    
}
public function edit(Merchandise $merchandise)
{
    return Inertia::render('Admin/merchandise/edit', ['merchandise'=>$merchandise]);
}

public function update($id, Request $request): RedirectResponse
{
    Merchandise::find($id)->update([
        'int_category' =>  $request->int_category,
        'name' =>   $request->name,
        'quality' =>  $request->quality,
        'description' => $request->description,
        'material' => $request->material,
        'price' => $request->price,
        'discount' => $request->discount,
        'images' => $request->images,
    ]);
    return Redirect::route('merchandise.index');
}
public function delete($id): RedirectResponse{
    Merchandise::find($id)->delete();
     return Redirect::route('merchandise.index');
    }

    public function search(Request $request)
    {
        // Validate the request to ensure 'keyword_submit' is present and is a string
        $request->validate([
            'keyword_submit' => 'required|string|max:255',
        ]);
    
        // Sanitize the keyword input
        $keyword = trim($request->input('keyword_submit'));
    
        // Search the 'merchandises' table for products matching the keyword
        $search_product = DB::table('merchandises')
            ->where('name', 'like', '%' . $keyword . '%')
            ->get();
    
        // Render the search results page with the matched products
        return Inertia::render('Public/product/search', [
            'merchandises' => $search_product
        ]);
    }




}

