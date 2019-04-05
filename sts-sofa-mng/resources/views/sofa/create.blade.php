<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Page Welcom')

<!-- @section('sidebar')
    @parent 

    <p>This is appended to the master sidebar.</p>
@endsection-->

@section('content')

<div class="container">
<div class="row justify-content-center">
<div class="col-10 col-md-6">
    <form method="POST" action="{{ route('sofa-store')}}" enctype="multipart/form-data" >
    @csrf
    @method('POST')
        <div class="form-group">
            <label>Mã sản phẩm</label>
            <input name="masofa" type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label>Tên sản phẩm</label>
            <input name="name" type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label>Giá</label>
            <input name="gia" type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label>Khuyến mãi</label>
            <input name="khuyenmai" type="text" class="form-control" placeholder="Nhập số tiền được giảm">
        </div>
        <div class="form-group">
            <label>Loại sản phẩm</label>
                <select name="type" class="custom-select">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
        </div>
        <div class="form-group">
            <label>Hình ảnh sản phẩm</label>
            <input type='file' class="form-control" accept="image/*"" name="files[]" multiple="" id="fileupload" />
            <div class="form-group" id="fileshow">
            </div>
        </div>
        <div class="form-group">
            <label for="detail">Chi tiết sản phẩm</label>
            <textarea class="form-control" rows="5" name="detail">
►Kích thước : 2600 x 1600 x 1000 (Dài x Rộng x Cao)

►Chất liệu :  da nhập khẩu cao cấp, mềm mịn thoáng mát.

►Khung ghế : Khung gỗ dầu tự nhiên chống mối mọt.

►Đệm mút : Nệm mousse D40 không xẹp lún.

►Chân ghế : inox
</textarea>
        </div>



    <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
</div></div>
@endsection
