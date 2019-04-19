<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app-client')

@section('title', 'Page Welcom')

<!-- @section('sidebar')
    @parent 

    <p>This is appended to the master sidebar.</p>
@endsection-->

@section('content')
<div class="container">
    <div class="mb-4 text-right">
    <form action="{{ route('client_product') }}" method="get" class="">
    
        <div class="d-inline-block">
        <label  class="d-inline-block mr-1" for="validationTooltip01">Tên sản phẩm</label>
        <div class="d-inline-block mr-3"><input value="{{ $name }}" name="name" type="text" class="form-control" id="validationTooltip01" placeholder="Nhập tên sản phẩm" value="" ></div>
        
        </div>
        <div class="d-inline-block">
        <label  class="d-inline-block mr-1" for="validationTooltip02">Loại sản phẩm</label>
        <div class="d-inline-block mr-3"><select name="type" class="custom-select" >
            <option value="">Chọn loại sản phẩm</option>
            <option {{ $type == 1 ? 'selected' : '' }} value="1">One</option>
            <option {{ $type == 2 ? 'selected' : '' }} value="2">Two</option>
            <option {{ $type == 3 ? 'selected' : '' }} value="3">Three</option>
            </select> </div>
            
        </div>
        <div class="d-inline-block">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
        </div>

        <div class="d-inline-block">
        <label  class="d-inline-block ml-5 mr-1" for="validationTooltip02">Sắp xếp theo</label>
        <div class="d-inline-block mr-3">
            <a class="btn btn-light {{ $sort == 'asc' ? 'active' : '' }}" href="{{ Request::url() .'?'. http_build_query(array_merge( Request::query(), ['sort' => 'asc']))}}">Giá tăng dần</a>
            <a class="btn btn-light {{ $sort == 'desc' ? 'active' : '' }}" href="{{ Request::url() .'?'. http_build_query(array_merge( Request::query(), ['sort' => 'desc']))}}">Giá giảm dần</a>
            </div>
            <input type="hidden" name="sort" value="{{ $sort}}">
        </div>
    </form>
    </div>
    <div class="row ">
    @foreach ($products as $product)
        <!-- Team Member 1 -->
        <div class="col-xl-4 col-md-6 mb-4">
            <a href="{{ route('client_product-show',['id' => $product->id]) }}">
            <div class="card border-0 shadow" >
                @if ($product->files)
                    @foreach ($product->files as $file)
                        <img src="{{ asset($file) ? asset($file) : asset('img/default-image.png') }}" class="card-img-top" alt="...">
                        @break;
                    @endforeach
                @else
                    <img src="{{ asset('img/default-image.png') }}" class="card-img-top" alt="default-image">
                @endif
                <div class="card-body text-left">
                <h5 class="">{{ $product->name }}</h5>
                <div class="card-text sts-color-price">{{ number_format($product->giaban) }} ₫</div>
                <div class="card-text text-black-50"><del>{{ number_format($product->gia) }} ₫</del></div>
                <!-- <div class="">
                    <div class="d-inline-block mr-1 text-primary"><i class="far fa-eye"></i><span class="badge">7</span></div>
                    <div class="d-inline-block mr-1 text-danger"><i class="far fa-heart"></i><span class="badge">7</span></div>
                    <div class="d-inline-block mr-1 text-success"><i class="far fa-check-circle"></i><span class="badge">7</span></div>
                </div> -->
                
                </div>
            </div></a>
        </div>
    @endforeach
    </div>
</div>



@endsection
