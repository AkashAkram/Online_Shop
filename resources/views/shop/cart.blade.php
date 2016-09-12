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
                                <table>
                                    @foreach($zzz as $item)
                                    <tr>
                                        <td>{!! $item[0] !!}</td>
                                        <td>{!! $item[1] !!}</td>
                                        <td>{!! $item !!}</td>
                                        <td>{!! $item !!}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection