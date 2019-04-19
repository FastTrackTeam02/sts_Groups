<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app-client')

@section('title', 'Page Welcom')

<!-- @section('sidebar')
    @parent 

    <p>This is appended to the master sidebar.</p>
@endsection-->

@section('content')


<div class="container">
@foreach ($products as $product)
  <div class="row  my-3">
      <div class="col-xl-12">
        <div class="text-center js-product-img-main">
          @foreach ($product->files as $file)
            <a href="{{ asset($file) }}" class="image-link"><img class="sts-img-main" src="{{ asset($file) }}"  alt=""></a>
            @break
          @endforeach
          
        </div>
        <hr>
        <div class="row row-eq-height d-flex justify-content-center">
          @foreach ($product->files as $file)
          <div class="js-product-img-detail sts-img d-inline-block equal img-thumbnail align-middle my-auto" >
            <img src="{{ asset($file) }}" class="sts-img-list"  alt="">
          </div>
          @endforeach
        </div>
      </div>
      <div class="col-xl-12">
      </div>
  </div>

  <div>
    <div class="row  mt-4">
      <div class="col-12">
        <h3 class="">{{ $product->name }}</h3>
        <p class="text-primary">( MSP: {{ $product->masofa }} )</p>
        <div class="">
                      <div class="d-inline-block mr-1 text-primary"><i class="far fa-eye"></i><span class="badge">7</span></div>
                      <div class="d-inline-block mr-1 text-danger"><i class="far fa-heart"></i><span class="badge">7</span></div>
                      <div class="d-inline-block mr-1 text-success"><i class="far fa-check-circle"></i><span class="badge">7</span></div>
                  </div>
      </div>
    </div>
    <div class="row  my-3">
      <div class="col-12">
        <div class="sts-color-price-detail">{{ number_format($product->giaban) }} ₫</div>
        <div class="text-black-50"><del>{{ number_format($product->gia) }} ₫</del></div>
      </div>
    </div>
    <div id="accordion">
      <div class="card">
        <a class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <div class="card-header">
            <h5 class="mb-0">
              <button class="btn btn-link">THÔNG TIN SẢN PHẨM</button>
            </h5>
          </div>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            <p style="white-space: pre-wrap;">{{ $product->detail }}</p>
          </div>
        </div>
      </div>
      <div class="card">
        <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <div class="card-header">
            <h5 class="mb-0">
              <button class="btn btn-link">QUY TRÌNH GIAO HÀNG & THANH TOÁN TẬN NHÀ CHO KHÁCH HÀNG</button>
            </h5>
          </div>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            <img src="{{ asset('img/quytrinhmuahang.jpg') }}" alt="">
          </div>
        </div>
      </div>
      
    </div>


  </div>
@endforeach
</div>


<div class="container">
  <h3 class="section-title section-title-center pt-5 pb-3">
    <b></b>
    <span class="b section-title-main" style="color:rgb(0, 143, 64);">SẢN PHẨM BÁN CHẠY</span>
    <b></b>
  </h3>
  <div class="row">
      @foreach ($product_list_last as $product)
        <!-- Team Member 1 -->
        <div class="col-xl-3 col-md-3 mb-4">
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
                <h5 class="">{{ Str::limit($product->name, 45) }}</h5>
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
  
  <h3 class="section-title section-title-center pt-5 pb-3">
    <b></b>
    <span class="b section-title-main" style="color:rgb(0, 143, 64);">SẢN PHẨM KHUYẾN MÃI</span>
    <b></b>
  </h3>
  <div class="row">
      @foreach ($product_list_new as $product)
        <!-- Team Member 1 -->
        <div class="col-xl-3 col-md-3 mb-4">
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
                <h5 class="">{{ Str::limit($product->name, 45) }}</h5>
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
  <hr>
  <div class="row">
    <div class="col"></div>
  </div>

</div>


@endsection
