<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>@yield('page', 'Welcome') | nuStacks</title>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="/js/jquery-2.1.3.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="/js/bootstrap.min.js"></script>

		<link href="/css/bootstrap.min.css" rel="stylesheet">

		<style>
		body{
			background-color: #f9f9f9!important;
            /*background-image: url('/img/bgjumbo.jpg');*/
		}
        
        h1.press{
        	font: 70px Tahoma, Helvetica, Arial, Sans-Serif;
        	text-align: center;
        	color: #444;
        	text-shadow: 0px 2px 3px #999;
        }
		</style>

	</head>
	<body>
		<div class="container">
            <!-- ______________ START OF NAV BAR __________________________ -->
            <div class="row">
            	<div class="col-lg-12" col-md-12 col-sm-12>
            		<nav class="navbar navbar-default" role="navigation">
            			<div class="container-fluid">
            				<!-- Brand and toggle get grouped for better mobile display -->
            				<div class="navbar-header" style="margin-left: 45%;">
            					<a class="navbar-brand" href="#">nuStacks</a>
            				</div>

            				<!-- Collect the nav links, forms, and other content for toggling -->
            				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            					<ul class="nav navbar-nav">

            					</ul>
            				</div><!-- /.navbar-collapse -->
            			</div><!-- /.container-fluid -->
            		</nav>
            	</div>
            </div>


            @yield('content')

            <hr>

            <footer>
                <p>&copy; 2014 - 2015 by nuStacks. All rights reserved.</p>
            </footer>


		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="/js/jquery-2.1.3.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="/js/bootstrap.min.js"></script>

	</body>
</html>
