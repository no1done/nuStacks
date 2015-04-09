@extends('layouts.master')

@section('content')

<div class="row">

    @include('app.partials.leftprofile')

    <!-- TRENDING TAGS AND WHOS ONLINE -->
    <div class="trending pull-right">
        <span class="trendingheader">Trending Tags</span>
        <a class="tag" href="#">#nustacks</a>
        <a class="tag" href="#">#php</a>
        <a class="tag" href="#">#tags</a>
        <a class="tag" href="#">#zend</a>
        <a class="tag" href="#">#bootstrap</a>
        <a class="tag" href="#">#v2</a>

        <span class="trendingheader">Who's Online</span>

    </div>

    <!-- CENTRE QUICK POST AND NEWS FEED -->
    <div class="centrecolumn pull-right">
        <div class="row">
            @include('app.partials.quickpost')
        </div>

        <div class="row">
            <div class="col-lg-12" style="padding: 0px; margin-top: 10px;">

                <div id="ajaxpost"></div>

				@include('app.partials.posts')


            </div>
        </div>

    </div>

    <!-- TRENDING TAGS AND WHOS ONLINE -->
    <!--    <div class="col-lg-3 trending pull-right">
            <span class="trendingheader">Trending Tags</span>
            <a class="tag" href="#">#nustacks</a>
            <a class="tag" href="#">#php</a>
            <a class="tag" href="#">#tags</a>
            <a class="tag" href="#">#zend</a>
            <a class="tag" href="#">#bootstrap</a>
            <a class="tag" href="#">#v2</a>

            <span class="trendingheader">Who's Online</span>

        </div>-->

</div>




@endsection
