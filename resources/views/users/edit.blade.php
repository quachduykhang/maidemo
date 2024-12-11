<form action="{{route('users.post-edit')}}" method="POST">
    <div class="mb-3">
        <label for="name">Họ và tên</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên" value="{{old('name') ?? $userDetail->name}}">
        @error('name')
            <span style="color:aquamarine;">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email....." value="{{old('email') ?? $userDetail->email}}">
        @error('email')
            <span style="color:aquamarine;">{{$message}}</span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
    <a href="{{route('users.index')}}">Quay lại</a>
    @csrf
</form>
