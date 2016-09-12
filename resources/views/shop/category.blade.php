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
           
@foreach($categories as $sub)
              <a href="{!! $sub->id !!}"><h3 class="m_1">{!! $sub->category !!}</h3></a>
              <div class="content_grid">
              <?php $pro = \App\Product::where('cat_id',$sub->id)->get();

              ?>
              @for($i=0 ; $i < count($pro)  ; $i++ )
                {{--@foreach($pros as $pro)--}}
                <div class="col-sm-4">
                  <div class="view view-first"> <a href="../product/{!! $pro[$i]->id !!}">
                      <div class="inner_content clearfix">
                        <div class="product_image"> <img src="/surfhouse/product_images/{!! $pro[$i]->default_image !!}" class="img-responsive" alt=""/>
                          <div class="mask">
                            <div class="info">Quick View</div>
                          </div>
                          <div class="product_container">
                            <div class="cart-left">
                              <p class="title">{!! $pro[$i]->product_name !!}</p>
                            </div>
                            <div class="price">{!! $pro[$i]->price !!}</div>
                            <div class="clearfix"></div>
                          </div>
                        </div>

                      </div>
                    </a>
                  </div>
                </div>
              @endfor
                {{--@endforeach--}}
              <div class="clearfix"></div>

            </div>
@endforeach

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection