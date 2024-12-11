<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Merchandise;
use App\Models\Users;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
class AdminController extends Controller
{
    private $admin;
    public function __construct(){
        $this->admin = new Users();
    }
    public function index()
    {

 
        $admin=DB::table('users')->get();
        return Inertia::render('Admin/admin/index',['users'=>$admin]);
}




public function create()
    {
        return Inertia::render('Admin/admin/create');
    }
    public function store(Request $request): RedirectResponse
    {
        
            Users::create([
                'name' =>  $request->name,
                'email' => $request->email,
                'password' => $request->password,
               
            ]);
    
            return Redirect::route('admin.index');
    
}
public function edit(Users $admin)
{
    return Inertia::render('Admin/admin/edit', ['admin'=>$admin]);
}

public function update($id, Request $request): RedirectResponse
{
    Users::find($id)->update([
        'name' =>  $request->name,
        'email' => $request->email,
        'password' => $request->password,
    ]);
    return Redirect::route('admin.index');
}
public function delete($id): RedirectResponse{
   Users::find($id)->delete();
     return Redirect::route('admin.index');
    }
}