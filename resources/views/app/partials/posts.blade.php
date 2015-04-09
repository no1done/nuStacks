<div class="postboxn"><!-- start of postbox -->

        <div class="post">
            <!-- display pic col only -->
            <div class="display_picturen"  >
                <!-- profile picture -->
                <img src="/img/default.png" width="50px"/>
            </div>


            <!-- name and time -->
            <div class="post_user">
                <strong><a href="/profile/view/">John S Doe</a></strong>
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
