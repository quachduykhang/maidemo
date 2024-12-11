<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Feedbacks;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
class FeedbackController extends Controller
{
    public function admin()
    {
        $feedback=DB::table('feedbacks')->get();
        return Inertia::render('Admin/feedback/index',['feedbacks'=>$feedback]);
       
       
      
       
    }
    public function index()
    {
   
       
        return Inertia::render('Public/feedback');
       
    }
    public function created(Request $request): RedirectResponse
    {
        Feedbacks::create([
            'name' =>  $request->name,
            'email' =>   $request->email,
            'number_phone' =>$request->number_phone,
            'address' => $request->address,
            'content' => $request->content,
          
        ]);

        return Redirect::route('feedback');
    }
}
