@extends('layouts.user_master')
@section('title','Transport Cost')
@section('content')

     <!-- Transport Cost page banner-->
     <section class="tcbanner-area bg">
        <div class="container">
            <div class="banner-text text-center">
                <h2>transport cost of sylhet.</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
        </div>
    </section>

    <!-- end Transport Cost page banner-->

    <section class="transportcost-area pt-100 pb-100">
        <div class=" section-title">
            <div class="container">
                <div class="row pt-100">
                    <div class="col-md-12 about-title text-center">
                        <h2>transport cost.</h2>
                        <h4 class="about-heading">check out transport cost of sylhet</h4>
                    </div>
                </div>
                <div class="row pt-50">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-back table-striped">
                                <thead>
                                    <tr class="tr-background">
                                        <th scope="col" class="th-color">From</th>
                                        <th scope="col" class="th-color">To</th>
                                        <th scope="col" class="th-color">Transport Type</th>
                                        <th scope="col" class="th-color">Transport Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transcosts as $item)
                                        <tr>
                                            <td class="td-color">{{$item->from}}</td>
                                            <td class="td-color">{{$item->to}}</td>
                                            <td class="td-color">{{$item->transporttype['type']}}</td>
                                            <td class="td-color">{{$item->price}} Taka</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection