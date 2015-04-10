<div class="postholder">

    {!! Form::open(['url' => "/post", 'class' => "form-inline"]) !!}
        <div class="form-group">
            <!--<input type="text" name="quickpost" class="form-control" placeholder="Write something new.." />-->
            <textarea name="post" id="quickpost" class="form-control quickpost" style="height: 35px;" placeholder="Write something new.."></textarea>
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
                <input type="hidden" name="published" value="N" />

                <div class="checkbox" style="margin-right: 10px;">
                    <label>
                        Publish <input type="checkbox" value="Y" name="published" id="publish"/>
                    </label>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" name="quickpost_post" id="post" class="btn btn-primary btn-sm" style="margin-right: 10px;">post</button>
            </div>

        </div>


    {!! Form::close() !!}

</div>
