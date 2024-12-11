
@section('title')
   {{$title}}
   @endsection

   @section('content')
   @if(session('msg'))
   <div class="alert alert-success">{{session('msg')}} </div>
    @endif
  <h1>{{$title}}</h1>

  <a href="{{route('users.add')}}" class="btn btn-primary">Thêm Sản phẩm</a>
  <hr/>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>STT</th>
        <th>mã hàng</th>
        <th>Tên</th>
        <th>chất lượng</th>
        <th>Mô tả</th>
        <th>chất liệu</th>
        <th>Giá</th>
        <th>Gía giảm</th>
        <th> Hình ảnh</th>
        <th width="15%">Thời gian</th>

      </tr>a
    </thead>
    <tbody>
      @if(!empty(  $merchandisesList))
      @foreach (  $merchandisesList as $key =>$item)
<tr>
  <td>{{$key+1}}</td>
  <td>{{$item->int_category}}</td>
  <td>{{$item->name}}</td>
  <td>{{$item->quality}}</td>
  <td>{{$item->description}}</td>
  <td>{{$item->material}}</td>
  <td>{{$item->price}}</td>
  <td>{{$item->discount}}</td>
  <td>{{$item->images}}</td>
  <td>{{$item->created_at}}</td>
</tr>
@endforeach
@else
<tr>
  <td colspan="4"> Không có dữ liệu</td>
</tr>
@endif
    </tbody>

  </table>
  