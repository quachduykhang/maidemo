<form action="{{route('users.post-add')}}" method="POST">
    <div class="mb-3">
        <label for="name">Họ và tên</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên" >
        @error('name')
            <span style="color:aquamarine;">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email....." >
        @error('email')
            <span style="color:aquamarine;">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email">Mật Khẩu</label>
        <input type="text" class="form-control" id="password" name="password" placeholder="Mật khẩu....." >
        @error('password')
            <span style="color:aquamarine;">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
    <label for="time">Thời gian</label>
    <input type="text" class="form-control" id="time" name="time" placeholder="Thời gian....." >
    @error('time')
        <span style="color:aquamarine;">{{$message}}</span>
    @enderror
</div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
    <a href="{{route('users.index')}}">Quay lại</a>
    @csrf
</form>
