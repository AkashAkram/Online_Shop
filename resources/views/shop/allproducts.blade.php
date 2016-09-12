@extends('layouts.master')


@section('content')

<div class="main">
  <div class="content_box">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          @include('subview.sidebar')
        </div>
        <div class="col-md-9">
          <div class="row">
            <div class="content_grid">
              <a href="/">Home</a> >>
              @for($i = 0; $i <= $len; $i++)
                <a href="{!! $category_tree[$i]->id !!}">{!! $category_tree[$i]->category !!}</a> >>
                @endfor

            </div>
            @foreach($products as $pro)
              <div class="col-sm-4">
                <div class="view view-first"> <a href="../product/{!! $pro->id !!}">
                    <div class="inner_content clearfix">
                      <div class="product_image"> <img src="/surfhouse/product_images/{!! $pro->default_image !!}" class="img-responsive" alt=""/>
                        <div class="mask">
                          <div class="info">Quick View</div>
                        </div>
                        <div class="product_container">
                          <div class="cart-left">
                            <p class="title">{!! $pro->product_name !!}</p>
                          </div>
                          <div class="price">{!! $pro->price !!}</div>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                      <div class="sale-box"></div>
                </div>
                  </a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection