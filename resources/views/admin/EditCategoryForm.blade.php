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
    <h2>แก้ไขประเภทสินค้า</h2>
    <form action="/admin/UpdateCategory/{{$category->id}}" method="post" >
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">ชื่อสินค้า</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="ใส่ประเภทสินค้าใหม่" value="{{$category->name}}">
        </div>

        <button type="submit" name="submit" class="btn btn-success" >Update</button>
    </form>
</div>

@endsection
