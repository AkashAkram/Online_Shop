@extends('layouts.master')


@section('content')
    <div class="margin-top"></div>


    <div class="main">
        <div class="content_box">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        @include('subview.sidebar')

                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="m_1">Add New Product</h3>
                                <form action="{!! action('ShopController@postproduct') !!}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Name</label>
                                        <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Code</label>
                                        <input type="text" class="form-control" id="code" name="code" placeholder="Product Code">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <input type="file" name="default_image" id="default_image">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Category</label>
                                        <select name="cat_id" id="cat_id">
                                            @foreach($subcat as $cat)
                                                <option value="{!! $cat->id !!}">{!! $cat->category !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Price</label>
                                        <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Example: 500 (in BDT)">
                                    </div>
                                    <button type="submit" name="add" id="add" class="btn btn-success">Submit</button>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection