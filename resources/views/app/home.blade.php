@extends('layouts.master')

@section('content')

<div class="row">
    <!-- LEFT PROFILE CARD -->
    <div class="profileleft">

        <!-- picture and name -->

        <div class="row">
            <div class="col-lg-5 col-sm-1 col-xs-1">
                <img src="/img/default.png" width="100%" />
            </div>
            <div class="col-lg-7" style="margin-left: 0px; padding-left: 0px;">
                <a href="/profile"><strong>{{ Auth::user()->name}}</strong></a><br/>
                <a href="/profile">Edit Details</a><br/>
            </div>
        </div>
        <br/>
        <!-- subscribers and subscriptions -->
        <div class="row">
            <div class="col-lg-12" style="margin: 0px; padding: 0px;">
                <div class="profilesubs"><a href="#" style="color: #000;"><strong>subscribers:</strong></a><span style="float: right">0</span></div>
                <div class="profilesubs"><a href="#" style="color: #000;"><strong>subscriptions:</strong></a><span style="float: right">0</span></div>
            </div>
        </div>

        <!-- news feed options -->
        <div class="row">
            <div class="col-lg-12" style="padding: 5px; margin: 0px; padding-top: 20px;">
                <!--                <a href="#" class="newsfeedoption">All</a>
                                <a href="#" class="newsfeedoption">Friends</a>
                                <a href="#" class="newsfeedoption">Subscriptions</a>-->


                <ul class="nav nav-pills nav-stacked">
                    <li class="active">
                        <a href="#">

                            All
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <span class="badge pull-right">4</span>
                            Friends
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <span class="badge pull-right">18</span>
                            Subscriptions
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <span class="badge pull-right">2</span>
                            Custom stack
                        </a>
                    </li>
                </ul>

                <a href="#" style="font-size: 8pt;" class="pull-right"> + New Stack</a>

            </div>
        </div>

    </div>
    <!-- end of left profile -->


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
            <div class="postholder">
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <!--<input type="text" name="quickpost" class="form-control" placeholder="Write something new.." />-->
                        <textarea name="quickpost" id="quickpost" class="form-control quickpost" style="height: 35px" placeholder="Write something new.."></textarea>
                        <script>
                            $('textarea.quickpost').focus(function() {
                                $(this).animate({height: "80px"}, 500);
                            });

                            $('textarea.quickpost').blur(function() {
                                var post = $("#quickpost");
                                if (post.val().length === 0) {
                                    $(this).animate({height: "35px"}, 500);
                                }
                            });

                        </script>
                    </div>

                    <div class="postactions">

                        <div class="form-group">
                            <input type="hidden" name="publish" value="N" />

                            <div class="checkbox" style="margin-right: 10px;">
                                <label>
                                    Publish <input type="checkbox" value="Y" name="publish" id="publish"/>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="quickpost_post" id="post" class="btn btn-primary btn-sm" style="margin-right: 10px;">post</button>
                        </div>

                    </div>


                </form>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12" style="padding: 0px; margin-top: 10px;">

                <div id="ajaxpost"></div>

				<div class="postboxn"><!-- start of postbox -->

                        <div class="post">
                            <!-- display pic col only -->
                            <div class="display_picturen"  >
                                <!-- profile picture -->
                                <img src="/img/default.png" width="50px"/>
                            </div>


                            <!-- name and time -->
                            <div class="post_user">
                                <strong><a href="/profile/view/">John Doe</a></strong>
                            </div>

                            <div class="post_time">
                                <span class="postbox_date">12th Jan</span>
                            </div>

                            <!-- post -->
                            <div class="post_post">
                                <span>This is where the post would go! Lorem ipsum or something like that.</span>
                            </div>

                        </div>

                        <div class="post_counts" id="countbar_123">
                            <small><span class="glyphicon glyphicon-comment" style="color: #999;"></span> <span id="commentcount_123"></span> </small>&nbsp; &nbsp;
                            <small><a href="#"><span class="glyphicon glyphicon-thumbs-up" style="color: #999;"></span> 0</a></small>&nbsp; &nbsp;
                            <small><span class="glyphicon glyphicon-repeat" style="color: #999;"></span> 0</small>
                        </div>

                        <div id="comment_collapse_123">
                            <!-- comments -->
                            <div id="viewall_123" style="display: none;">
                                <a href="/post/view/123" class="linkviewall"> <span class="glyphicon glyphicon-comment"></span> View previous comments (<span id="difference_123"></span> more)</a>
                            </div>
                            <div class="commentbox_new">


                                <!-- ajax fill -->
                                <div id="comments_123">

                                </div>

                                <!-- new comments prepended into here -->
                                <div id="ajaxcommentsucces_123"></div>

                            </div>

                            <!-- leave a comment -->

                            <div class="leaveacomment">
                                <form id="ajaxcomment_123">
                                    <div class="lac_pic">
                                        <img src="/img/default.png" width="35px"/>
                                    </div>
                                    <div class="lac_textbox">
                                        <input type="text" id="comment_123" class="form-control input-sm" placeholder="Leave a comment..." />
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div><!-- end postbox -->


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
