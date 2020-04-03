@extends('layouts.admin')
@section('body')
<div class="table-responsive">
    <h2>เพิ่มสินค้าใหม่</h2>
    <form action="" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">ชื่อสินค้า</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="ใส่ชื่อสินค้า">
        </div>
        <div class="form-group">
            <label for="description">คำอธิบาย</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="ใส่คำอธิบายภาพ">
        </div>
        <div class="form-group" >
            <label for="image">รูปภาพ</label>
            <input type="file" class="form-control"  name="image" id="image" required>
        </div>
        <div class="form-group">
            <label for="type">ประเภทสินค้า</label>
            <select class="form-control" name="category">
                    <option value="blossom">ไม้ดอก</option>
                    <option value="leaves">ไม้ใบ</option>
                    <option value="fruit">ไม้ผล</option>
            </select>
        </div>
        <div class="form-group">
            <label for="type">ราคา</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="ราคาสินค้า" required>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
