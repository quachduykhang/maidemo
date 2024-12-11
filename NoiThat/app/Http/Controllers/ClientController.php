<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ClientController extends Controller
{
    private $clients;
    public function __construct(){
        $this->clients = new Client();
    }

    public function index()
    {
       
        $client=DB::table('clients')->get();
        return Inertia::render('Admin/client/index',['clients'=>$client]);
    }
// Xây dựng chức năng đăng ký
    public function login()
{

    return Inertia::render('Public/login');
}
public function sign()
{

    return Inertia::render('Public/sign');
}
    public function create()
    {
        return Inertia::render('Admin/client/create');
    }
    public function store(Request $request): RedirectResponse
    {
        
            Client::create([
                'name' =>  $request->name,
                'date' =>   $request->date,
                'address' =>  $request->address,
                'ponits' => $request->ponits,
                'email' => $request->email,
                'password' => $request->password,
               
            ]);
    
            return Redirect::route('client.index');
    
}
public function register(Request $request): RedirectResponse
{
    
        Client::create([
            'name' =>  $request->name,
            'date' =>   $request->date,
            'address' =>  $request->address,
            'ponits' => $request->ponits,
            'email' => $request->email,
            'password' => $request->password,
           
        ]);

        return Redirect::route('login_public');

}
public function edit(Client $client)
    {
        return Inertia::render('Admin/client/edit', ['client'=>$client]);
    }

    public function update($id, Request $request): RedirectResponse
    {
        Client::find($id)->update([
            'name' =>  $request->name,
            'date' =>   $request->date,
            'address' =>  $request->address,
            'ponits' => $request->ponits,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
        ]);
        return Redirect::route('client.index');
    }
    public function delete($id): RedirectResponse{
    Client::find($id)->delete();
     return Redirect::route('client.index');
    }
}
    //     public function postEdit(Request $request) {
    //         // Validate dữ liệu đầu vào
    //       $id =session('id');
    //       if(empty($id)){
    //         return back()->with('msg','liên kết khôn tồn tại');
    //       }
    
    //       $request->validate([
    //         'name' => 'required|min:5',
    //         'email' => 'required|email|unique:clients,email,' . $id,
    //     ], [
    //         'name.required' => 'Họ và tên bắt buộc phải nhập',
    //         'name.min' => 'Họ và tên phải :min ký tự trở lên',
    //         'email.required' => 'Email bắt buộc phải nhập',
    //         'email.email' => 'Email không đúng định dạng',
    //         'email.unique' => 'Email đã tồn tại',
    //     ]);
        
        
    //         // Tạo mảng dữ liệu cần cập nhật
    //         $dataUpdate = [
    //            $request->name,
    //            $request->date,
    //            $request->address,
    //            $request->ponits,
    //            $request->email,
    //            $request->password,
    //              date('Y-m-d H:i:s')
    //         ];
        
    //         // Gọi phương thức updateUser từ đối tượng $this->users và truyền dữ liệu cần cập nhật
    //         $this->clients->updateClient($dataUpdate, $id);
        
    //         // Chuyển hướng về trang trước với thông báo cập nhật thành công
    //         return back()->with('msg', 'Cập nhật thành công');
    //     }
    //   public function delete($id=0){
    //     if (!empty($id)) {
    //         $clientDetail = $this->clients->getDetail($id);
    //     if (!empty($clientDetail[0])) {
            
    //       $deleteStatus = $this->clients->deleteClient($id);
    //        if($deleteStatus){
    //         $msg="Xóa thành công";
    
    //        }else{
    //         $msg="Bạn không thể xóa . Vui lòng thửu lại";
    //        }
           
    //     } else {
    //         // Nếu không tìm thấy người dùng, chuyển hướng và thông báo
    //         $msg="Người dùng không tồn tại";
    //     }
    // } else {
        
    //     $msg="Liên kết không tồn tại";
    // }
    // return redirect()->route('clients.index')->with('msg', $msg);
    //   }  
    // } 

