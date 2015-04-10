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

    <div class="row">
        <div class="col-sm-12">
            <!-- temp -->
            <table class="table table-bordered table-striped table-condensed">
                <thead>
                    <tr>
                        <th>Friends</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (Auth::user()->friends as $friend)
                    <tr>
                        <td>{{ $friend->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- end of left profile -->
