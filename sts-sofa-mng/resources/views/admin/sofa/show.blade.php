<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app-admin')

@section('title', 'Page Welcom')

<!-- @section('sidebar')
    @parent 

    <p>This is appended to the master sidebar.</p>
@endsection-->

@section('content')


<div class="container">
@foreach ($sofas as $sofa)
<div class="row">
    <div class="col-12 my-3">
        <a class="" href="{{ route('admin_sofa-edit',['id' => $sofa->id]) }}"><button type="button" class="btn btn-primary">Chỉnh sửa</button></a>
    </div>
</div>
<table class="table table-bordered">
  <tbody>
    <tr>
      <th style="width: 16.66%" scope="row">Mã sản phẩm</th>
      <td>{{ $sofa->masofa }}</td>
    </tr>
    <tr>
      <th scope="row">Tên sản phẩm</th>
      <td>{{ $sofa->name }}</td>
    </tr>
    <tr>
      <th scope="row">Giá</th>
      <td>{{ number_format($sofa->gia) }}</td>
    </tr>
    <tr>
      <th scope="row">Khuyến mãi</th>
      <td>{{ number_format($sofa->gia - $sofa->giaban) }}</td>
    </tr>
    <tr>
      <th scope="row">Giá bán</th>
      <td>{{ number_format($sofa->giaban) }}</td>
    </tr>
    <tr>
      <th scope="row">Loại sản phẩm</th>
      <td>{{ $sofa->type }}</td>
    </tr>
    <tr>
      <th scope="row">Hình ảnh sản phẩm</th>
      <td>@foreach ($sofa->files as $file)
            <img src="{{ asset($file) }}" class="img-fluid" alt="">
            @endforeach
          
      </td>
    </tr>
    <tr>
      <th scope="row">Chi tiết sản phẩm</th>
      <td>
            <p style="white-space: pre-wrap;">{{ $sofa->detail }}</p>
      </td>
    </tr>
  </tbody>
</table>

@endforeach
    

</div>

@endsection
