<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app-admin')

@section('title', 'Page Welcom')

<!-- @section('sidebar')
    @parent 

    <p>This is appended to the master sidebar.</p>
@endsection-->

@section('content')
<div class="col-12">
    <div class="row">
        <div class="col-12 my-3">
            <a class="" href="{{ route('admin_sofa-create') }}"><button type="button" class="btn btn-primary">Thêm mới</button></a>
        </div>
    </div>
</div>
<div class="col-12">
    <div class="row">
        <div class="col-12">
            @if(session('msg-success'))
                <div class="alert alert-success" role="alert">
                    {{session('msg-success')}}
                </div>
            @endif
            @if(session('msg-warning'))
                <div class="alert alert-warning" role="alert">
                    {{session('msg-warning')}}
                </div>
            @endif
        </div>
    </div>
</div>
<div class="col-12">
    <div  class="row">
        <div class="col">
            <table class="table table-hover table-bordered">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Mã sản phẩm</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Khuyến mãi</th>
                <th scope="col">Giá bán thực tế</th>
                <th scope="col">Loại sản phẩm</th>
                <th scope="row">Hình ảnh sản phẩm</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($sofas as $sofa)
                <tr>
                <th scope="row">{{ $sofa->id }}</th>
                <td>{{ $sofa->masofa }}</td>
                <td>{{ $sofa->name }}</td>
                <td>{{ number_format($sofa->gia) }}</td>
                <td>{{ number_format($sofa->gia - $sofa->giaban) }}</td>
                <td>{{ number_format($sofa->giaban) }}</td>
                <td>{{ $sofa->type }}</td>
                <td><div>@foreach ($sofa->files as $file)
                        <img style="width: auto; height: 100px;" src="{{ asset($file) }}" class="img-fluid" alt="">
                        @break;
                        @endforeach
                    </div>
                </td>
                <td>
                <a class="mx-1" href="{{ route('admin_sofa-show',['id' => $sofa->id]) }}"><i class="fas fa-eye"></i></a>
                <a class="mx-1" href="{{ route('admin_sofa-edit',['id' => $sofa->id]) }}"><i class="fas fa-pencil-alt"></i></a>
                <a class="mx-1" href="{{ route('admin_sofa-delete',['id' => $sofa->id]) }}"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
<div class="">
SOFA
</div>

@endsection
