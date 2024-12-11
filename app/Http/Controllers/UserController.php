<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Users;
use Symfony\Component\CssSelector\Parser\Shortcut\ElementParser;

class UserController extends Controller
{    
    private $users;
    public function __construct(){
        $this->users = new Users();
    }

    public function index()
    {
        $title = 'Danh sách Nhân viên';
      
        $usersList = $this->users->getAllUsers();
       
        return view('users.user', compact('title', 'usersList'));
    }
 


    public function add()
{
    $title = 'Thêm người dùng';
    return view('users.add', compact('title'));
    
}
    public function postAdd(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users,email,',
        ], [
            'name.required' => 'Họ và tên bắt buộc phải nhập',
            'name.min' => 'Họ và tên phải :min ký tự trở lên',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
        ]);
    
        $dataInsert = [
           $request->name,
           $request->email,
           $request->password,
           date('Y-m-d H:i:s')
        ];
    
        $this->users->addUser($dataInsert);
    
        // Redirect to the index method of UserController
        return redirect()->route('users.index')->with('msg', 'Người dùng đã được thêm thành công');
    }
    public function getEdit(Request $request,$id = 0) {
        $title = 'Cập nhật người dùng';
        
        if (!empty($id)) {
            $userDetail = $this->users->getDetail($id);
            
            if (!empty($userDetail[0])) {
                $request->session()->put('id',$id);
                $userDetail = $userDetail[0];
                // Trả về view để hiển thị form chỉnh sửa
               
            } else {
                // Nếu không tìm thấy người dùng, chuyển hướng và thông báo
                return redirect()->route('users.index')->with('msg', 'Người dùng không tồn tại');
            }
        } else {
            // Nếu không có ID, chuyển hướng và thông báo
            return redirect()->route('users.index')->with('msg', 'Liên kết không tồn tại');
        }
        return view('users.edit', compact('title','userDetail' ));
    }
    
    public function postEdit(Request $request) {
        // Validate dữ liệu đầu vào
      $id =session('id');
      if(empty($id)){
        return back()->with('msg','liên kết khôn tồn tại');
      }

      $request->validate([
        'name' => 'required|min:5',
        'email' => 'required|email|unique:users,email,' . $id,
    ], [
        'name.required' => 'Họ và tên bắt buộc phải nhập',
        'name.min' => 'Họ và tên phải :min ký tự trở lên',
        'email.required' => 'Email bắt buộc phải nhập',
        'email.email' => 'Email không đúng định dạng',
        'email.unique' => 'Email đã tồn tại',
    ]);
    
    
        // Tạo mảng dữ liệu cần cập nhật
        $dataUpdate = [
            $request->name,
             $request->email,
             date('Y-m-d H:i:s')
        ];
    
        // Gọi phương thức updateUser từ đối tượng $this->users và truyền dữ liệu cần cập nhật
        $this->users->updateUser($dataUpdate, $id);
    
        // Chuyển hướng về trang trước với thông báo cập nhật thành công
        return back()->with('msg', 'Cập nhật thành công');
    }
  public function delete($id=0){
    if (!empty($id)) {
        $userDetail = $this->users->getDetail($id);
    if (!empty($userDetail[0])) {
        
      $deleteStatus = $this->users->deleteUser($id);
       if($deleteStatus){
        $msg="Xóa thành công";

       }else{
        $msg="Bạn không thể xóa . Vui lòng thửu lại";
       }
       
    } else {
        // Nếu không tìm thấy người dùng, chuyển hướng và thông báo
        $msg="Người dùng không tồn tại";
    }
} else {
    
    $msg="Liên kết khoongtoonf tại";
}
return redirect()->route('users.index')->with('msg', $msg);
  }  
} 