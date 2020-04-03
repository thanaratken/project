@extends('layouts.admin')
@section('body')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="table-responsive">
    <h2>เพิ่มประเภทสินค้า</h2>
    <form action="/admin/CreateCategory" method="post" >
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">ชื่อสินค้า</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="ใส่ประเภทสินค้าใหม่">
        </div>

        <button type="submit" name="submit" class="btn btn-success" >Submit</button>
    </form>
</div>
@if($categories->count()>0)
<div class="table-responsive my-4 ">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ชื่อประเภทสินค้า</th>
      <th scope="col">แก้ไข</th>
      <th scope="col">ลบประเภทสินค้า</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}}</td>
      <td>
        <a href="/admin/EditCategory/{{$category->id}}" class="btn btn-primary">แก้ไข</a>
      </td>
      <td>
        <a href="/admin/DeleteCategory/{{$category->id}}" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')" class="btn btn-danger">ลบ</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@else
  <div class="alert alert-danger my-3">
      <p style="text-align: center;">ไม่มีข้อมูลประเภทสินค้า</p>
  </div>
@endif
@endsection
