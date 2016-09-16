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


                        @include('subview.slider')

                        <div class="row">
                            @foreach($categories as $cat)
                                <a href="cat/{!! $cat->id !!}"><h3 class="m_1">{!! $cat->category !!}</h3></a>
                                <?php $subcat = \App\Category::where('parent_id', $cat->id)->get();?>
                                @foreach($subcat as $sub)


                                    <?php $pros = \App\Product::where('cat_id', $sub->id)->get();?>
                                    {{--@for($i=0 ; $i < count($pro)  ; $i++ )--}}
                                    @foreach($pros as $pro)

                                        <div class="content_grid">
                                            <div class="col-md-4">
                                                <div class="view view-first">
                                                    <a href="product/{!! $pro->id !!}">
                                                        <div class="inner_content clearfix">
                                                            <div class="product_image"><img
                                                                        src="/surfhouse/product_images/{!! $pro->default_image !!}"
                                                                        class="img-responsive" alt=""/>
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

                                                            {{--<div class="sale-box"><span class="on_sale title_shop">New</span></div>--}}
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach

                                @endforeach
                                <div class="clearfix"></div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection