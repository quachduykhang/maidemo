<form action="{{route('clients.post-edit')}}" method="POST">
    <div class="mb-3">
        <label for="name">Họ và tên</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên" value="{{old('name') ?? $clientDetail->name}}">
        @error('name')
            <span style="color:aquamarine;">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="date">Ngày Sinh</label>
        <input type="text" class="form-control" id="date" name="date" placeholder="Email....." value="{{old('date') ?? $clientDetail->date}}">
        @error('date')
            <span style="color:aquamarine;">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="address">Địa Chỉ</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ....." value="{{old('address') ?? $clientDetail->address}}">
        @error('address')
            <span style="color:aquamarine;">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="ponits">Điểm</label>
        <input type="text" class="form-control" id="ponits" name="ponits" placeholder="Email....." value="{{old('ponits') ?? $clientDetail->ponits}}">
        @error('ponits')
            <span style="color:aquamarine;">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email....." value="{{old('email') ?? $clientDetail->email}}">
        @error('email')
            <span style="color:aquamarine;">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password">Mật Khẩu</label>
        <input type="text" class="form-control" id="passwordl" name="password" placeholder="Email....." value="{{old('email') ?? $clientDetail->password}}">
        @error('password')
            <span style="color:aquamarine;">{{$message}}</span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
    <a href="{{route('clients.index')}}">Quay lại</a>
    @csrf
</form>
