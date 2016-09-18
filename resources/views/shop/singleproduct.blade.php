@extends('layouts.master')

        <!-- Old page -->
@section('content')

    <div class="main">
        <div class="content_box">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        @include('subview.sidebar')
                    </div>
                    <div class="col-md-9">


                        <div class="dreamcrub">
                            <ul class="breadcrumbs">
                                <li class="home">
                                    <a href="/" title="Go to Home Page">Home</a>&nbsp;
                                    <span>&gt;</span>
                                </li>
                                <li class="home">&nbsp;
                                    Apparel&nbsp;
                                    <span>&gt;</span>&nbsp;
                                </li>
                                <li class="home">&nbsp;
                                    &nbsp;Women
                                    <span>&gt;</span>&nbsp;
                                </li>
                                <li class="women">
                                    Peekey Cropped
                                </li>
                            </ul>
                            <ul class="previous">
                                <li><a href="{!! asset('/') !!}">Back to Home page</a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="singel_right">
                            <div class="labout span_1_of_a1">
                                <!-- start product_slider -->
                                <ul id="etalage">
                                    <li>
                                        <a href="optionallink.html">
                                            <img class="etalage_thumb_image"
                                                 src="/surfhouse/product_images/{!! $product[0]->default_image !!}"
                                                 class="img-responsive"/>
                                            <img class="etalage_source_image"
                                                 src="/surfhouse/product_images/{!! $product[0]->default_image !!}"
                                                 class="img-responsive"/>
                                        </a>
                                    </li>
                                    <li>
                                        <img class="etalage_thumb_image" src="/surfhouse/site_images/noimage.jpg"
                                             class="img-responsive"/>
                                        <img class="etalage_source_image" src="/surfhouse/site_images/noimage.jpg"
                                             class="img-responsive"/>
                                    </li>
                                    <li>
                                        <img class="etalage_thumb_image" src="/surfhouse/site_images/noimage.jpg"
                                             class="img-responsive"/>
                                        <img class="etalage_source_image" src="/surfhouse/site_images/noimage.jpg"
                                             class="img-responsive"/>
                                    </li>

                                </ul>
                                <!-- end product_slider -->
                            </div>
                            <div class="cont1 span_2_of_a1">

                                <div class="btn_form">
                                    <form action="/cart" method="post" enctype="multipart/form-data">

                                        <h1>{!! $product[0]->product_name !!}</h1>
                                        <ul class="rating">
                                            <li><a class="product-rate" href="#"> <label> </label></a> <span> </span>
                                            </li>
                                            <li><a href="#">1 Review(s) Add Review</a></li>
                                            <div class="clearfix"></div>
                                        </ul>
                                        <div class="price_single">
                                            <span class="reducedfrom">$140.00</span>
                                            <span class="actual">$120.00</span><a href="#">click for offer</a>
                                        </div>
                                        <h2 class="quick">Quick Overview:</h2>
                                        <p class="quick_desc"> {!! $product[0]->description !!}</p>
                                        <ul class="size">
                                            <h3>Size</h3>
                                            <select name="sizeList">
                                                <option value="s">s</option>
                                                <option value="m">m</option>
                                                <option value="l">l</option>
                                                <option value="xl">xl</option>
                                                <option value="xxl">xxl</option>
                                            </select>
                                        </ul>
                                        <ul class="size">
                                            <span>Color Available:</span>
                                            <select name="colorList">
                                                <option value="r">red</option>
                                                <option value="b">blue</option>
                                                <option value="g">green</option>
                                                <option value="w">white</option>
                                                <option value="o">orenge</option>
                                            </select>
                                        </ul>
                                        <ul class="product-qty">
                                            <span>Quantity:</span>
                                            <select name="qty">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </ul>


                                        <input type="hidden" name="pro_name" value="{!! $product[0]->id !!}">
                                        <input type="hidden" name="quantity" value="">
                                        <input type="hidden" name="color" value="">
                                        <input type="hidden" name="size" value="">

                                        <input type="submit" value="Add to Cart" name="cart">
                                    </form>


                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="sap_tabs">
                            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                <ul class="resp-tabs-list">
                                    <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Product Description</span>
                                    </li>
                                    <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Additional Information</span>
                                    </li>

                                    <div class="clear"></div>
                                </ul>
                                <div class="resp-tabs-container">
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                        <div class="facts">
                                            <ul class="tab_list">
                                                <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                        elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                                        nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                                        aliquip ex ea commodo consequat</a></li>
                                                <li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber
                                                        tempor cum soluta nobis eleifend option congue nihil imperdiet
                                                        doming id quod mazim placerat facer possim assum. Typi non
                                                        habent claritatem insitam; est usus legentis in iis qui facit
                                                        eorum claritatem. Investigatione</a></li>
                                                <li><a href="#">claritatem insitam; est usus legentis in iis qui facit
                                                        eorum claritatem. Investigationes demonstraverunt lectores
                                                        legere me lius quod ii legunt saepius. Claritas est etiam
                                                        processus dynamicus, qui sequitur mutationem consuetudium
                                                        lectorum. Mirum est notare quam littera gothica</a></li>
                                                <li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus
                                                        parum claram, anteposuerit litterarum formas humanitatis per
                                                        seacula quarta decima et quinta decima. Eodem modo typi, qui
                                                        nunc nobis videntur parum clari, fiant sollemnes in futurum.</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                        <div class="facts">
                                            <ul class="tab_list">
                                                <li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber
                                                        tempor cum soluta nobis eleifend option congue nihil imperdiet
                                                        doming id quod mazim placerat facer possim assum. Typi non
                                                        habent claritatem insitam; est usus legentis in iis qui facit
                                                        eorum claritatem. Investigatione</a></li>
                                                <li><a href="#">claritatem insitam; est usus legentis in iis qui facit
                                                        eorum claritatem. Investigationes demonstraverunt lectores
                                                        legere me lius quod ii legunt saepius. Claritas est etiam
                                                        processus dynamicus, qui sequitur mutationem consuetudium
                                                        lectorum. Mirum est notare quam littera gothica</a></li>
                                                <li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus
                                                        parum claram, anteposuerit litterarum formas humanitatis per
                                                        seacula quarta decima et quinta decima. Eodem modo typi, qui
                                                        nunc nobis videntur parum clari, fiant sollemnes in futurum.</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Fb Plugin like & Share-->
                            <div class="fb-like"
                                 data-href="http://shop.akashakram.xyz/product/{!! $product[0]->id !!}"
                                 data-layout="standard"
                                 data-action="like"
                                 data-size="large"
                                 data-show-faces="true"
                                 data-share="true">

                            </div>




                        </div>

                        <!--Fb Plugin Comment-->
                        <div class="fb-comments"
                             data-href="http://shop.akashakram.com/product/{!! $product[0]->id !!}"
                             data-numposts="5">

                        </div>


                        <h3 class="like">You Might Also Like</h3>
                        <ul id="flexiselDemo3">
                            <li><img src="images/pic11.jpg"/>
                                <div class="grid-flex"><a href="#">Syenergy 2mm</a>
                                    <p>Rs 850</p></div>
                            </li>
                            <li><img src="images/pic10.jpg"/>
                                <div class="grid-flex"><a href="#">Surf Yoke</a>
                                    <p>Rs 1050</p></div>
                            </li>
                            <li><img src="images/pic9.jpg"/>
                                <div class="grid-flex"><a href="#">Salty Daiz</a>
                                    <p>Rs 990</p></div>
                            </li>
                            <li><img src="images/pic8.jpg"/>
                                <div class="grid-flex"><a href="#">Cheeky Zane</a>
                                    <p>Rs 850</p></div>
                            </li>
                            <li><img src="images/pic7.jpg"/>
                                <div class="grid-flex"><a href="#">Synergy</a>
                                    <p>Rs 870</p></div>
                            </li>
                        </ul>


                        <h3 class="recent">Recently Viewed</h3>
                        <ul id="flexiselDemo1">
                            <li><img src="images/pic1.jpg"/>
                                <div class="grid-flex"><a href="#">Syenergy 2mm</a>
                                    <p>Rs 850</p></div>
                            </li>
                            <li><img src="images/pic2.jpg"/>
                                <div class="grid-flex"><a href="#">Surf Yoke</a>
                                    <p>Rs 1050</p></div>
                            </li>
                            <li><img src="images/pic3.jpg"/>
                                <div class="grid-flex"><a href="#">Salty Daiz</a>
                                    <p>Rs 990</p></div>
                            </li>
                            <li><img src="images/pic4.jpg"/>
                                <div class="grid-flex"><a href="#">Cheeky Zane</a>
                                    <p>Rs 850</p></div>
                            </li>
                            <li><img src="images/pic5.jpg"/>
                                <div class="grid-flex"><a href="#">Synergy</a>
                                    <p>Rs 870</p></div>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>

@endsection
