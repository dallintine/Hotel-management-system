




<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hotel management apps</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/mystyles.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
				<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

								<a class="navbar-brand" href="index"><img src="img/logo.png" height=30 width=41></a>
                </div>

				<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index"><span class="glyphicon glyphicon-home"
								 aria-hidden="true"></span> Home</a></li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"
								 role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"
								 aria-hidden="true"></span>
								 Menu <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Rice</a></li>
									<li><a href="#">Fish</a></li>
									<li><a href="#"> All Kinds of Soups</a></li>
									<li><a href="#">Meets</a></li>
									<li><a href="#">Drinks</a></li>
									<li role="separator" class="divider"></li>
									<li class="dropdown-header">Specials</li>
									<li><a href="#">China Kichen</a></li>
									<li><a href="#">Weekend Special</a></li>
								</ul>
							 </li>
							<li><a href="contactus"><i class="fa fa-envelope"></i>:Contact</a></li>
							<li><a href="aboutus"><span class="glyphicon glyphicon-info-sign"
								 aria-hidden="true"></span>About</a></li>
						</ul>
					<!-- To hide the items from the navigation bar for smaller screens, we need to enclose the ul within another navigation bar as follows:-->
					<!-- To hide the items from the navigation bar for smaller screens, we need to enclose the ul within another navigation bar as follows:-->
					<ul class="nav navbar-nav navbar-right">
						<li><a  id="Shopping" class="btn btn-primary btn-lg" style="color:white;"   type=""
			                      onclick="shopping()"><span class="glyphicon glyphicon-shopping-cart"></span>0 items N0.00</a></li>
					</ul>

					<ul id="loginButton" href="#" class="nav navbar-nav navbar-right">

						<li><a>
						<span class="glyphicon glyphicon-log-in"></span> Login</a>
						</li>
					</ul>
			</div>

            </div>
	</nav>

	<div  id="loginModal" class="modal fade " role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login </h4>
            </div>
            <div class="modal-body">
				<form class="" role="login">

							<div class="form-group form-inline">
								  <input type="email" class="form-control" placeholder="email">
								  <input type="password" class="form-control" placeholder="password">
							</div>

						 <div class="form-group">
								  <input type="checkbox" class="" placeholder="" value="Remember me"><label style=>Remember me</label>
							 <button type="Sign in" class="btn btn-success">Sign in</button>
							 <button type="button" class="btn btn-default btn-sm" href="">Sign Up</button>
						 </div>

				</form>


            </div>
        </div>
        </div>
    </div>


    <header class="jumbotron">

        <!-- Main component for a primary marketing message or call to action -->

        <div class="container">
            <div class="row row-header">

                <div class="col-xs-12 col-sm-8">
                    <h1>Ristorante con Fusion</h1>
                    <p style="padding:30px;"></p>
                    <p>We take inspiration from the World's best kichen, and create  unique cooking experience. Our lipsmacking cooking will tickle your culinary senses!</p>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <p style="padding:20px;"></p>
                    <img src="img/logo.png" class="img-responsive">
                </div>
				<div class="col-xs-12 col-sm-2">
                    <p style="padding:40px;"></p>
                    <a  id="Reserve" type="button" class="btn btn-warning btn-block"
                     >Reserve Table</button></a>
                </div>
			</div>
		</div>
    </header>

	<div  id="reserveModal" class="modal fade " role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Book for your  Room </h4>
            </div>
            <div class="modal-body">
				<form class="form-group form-inline">
					<div class="form-group">
						<div class="row col-xs-12 ">
							<div class="col-xs-12 col-sm-2">
								<strong>Number of days</strong>
							</div>
								<div class="col-xs-12 col-sm-10">
									<label class="radio-inline"><input type="radio" name="inlineRadioOptions" value="1" >1 Night </label>
									<label class="radio-inline"><input type="radio" name="inlineRadioOptions" value="2" >1-2 Night </label>
									<label class="radio-inline"><input type="radio" name="inlineRadioOptions" value="3" >1-3 Night</label>
									<label class="radio-inline"><input type="radio" name="inlineRadioOptions" value="4" >1-4 Night</label>
									<label class="radio-inline"><input type="radio" name="inlineRadioOptions" value="5" >1-5 Night</label>
									<label class="radio-inline"><input type="radio" name="inlineRadioOptions" value="6" >1-6 Night</label>
									<label class="radio-inline"><input type="radio" name="inlineRadioOptions" value="7" >1 Week </label>
									<label class="radio-inline"><input type="radio" name="inlineRadioOptions" value="7" >2 Week </label>
									<label class="radio-inline"><input type="radio" name="inlineRadioOptions" value="7" >3 Week </label>
								</div>
							</div>
						</div>
						<br> <br>
						<div class="form-group col-xs-12">
							<div class="row">
												<div class="col-sm-2">

													<label class="control-label">Section</label>
												</div>

													<div class="col-xs-12  col-sm-10">
														<div class=" btn-group inline" data-toggle="buttons" role="group">
															<button type="button" class="btn btn-success control-group">Executive </button>
														</div>

														<div class=" btn-group inline" data-toggle="buttons" role="group">
															<button type="button" class="btn btn-danger control-group">economy </button>
														</div>
													</div>
							</div>
						</div>
												<br> <br>

								<div class="form-group has-feedback ">
									<div class="row col-xs-12">
										<label class=" col-sm-2 control-label">Date and Time</label>

										<div class="col-sm-10  col-sm-offset-0">
											<div class="form-group has-feedback"><input class="form-control" aria-describedby="date" type="date" placeholder="date" ><span class="glyphicon glyphicon-calendar form-control-feedback"  aria-hidden="true"></span></div>
											<div class="form-group has-feedback"><input class="form-control" aria-describedby="time" type="time" placeholder="time" ><span class="glyphicon glyphicon-time form-control-feedback" aria-hidden="true"></span></div>
										</div>
									</div>
								</div>
								<br> 

									<div class="button-group ">
										<div class=" row col-sm-12 col-sm-offset-2">

												<button type="button" class="btn btn-primary control-button">Book</button>

												<button type="button" class="btn btn-default control-button" data-dismiss="modal">cancel</button>
										</div>
									</div>
									<br><br>

								<div class="form-group col-xs-12 ">
									<div class="row">
										<div	class="alert alert-warning	alert-dismissible"	role="alert">
											<button	type="button"	class="close" data-dismiss="alert"	aria-label="Close">
										<span	aria-hidden="true">&times;</span></button>


										<strong>Warning:</strong>:	Please
										<a	href="tel:+85212345678"	class="alert-link">	call</a>	us	to	reserve	for	more	than	six	guests.
										</div>
										</div>
								</div>

								<br><br>

							</form>


            </div>
        </div>
        </div>
    </div>


    <div class="container">

		<div class="row row-content">
           <div class="col-xs-12">
		   <div id="mycarousel" class="carousel slide" data-ride="carousel" data-pause="hover">
				 <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1"></li>
                    <li data-target="#mycarousel" data-slide-to="2"></li>
					<li data-target="#mycarousel" data-slide-to="3"></li>
					<li data-target="#mycarousel" data-slide-to="4"></li>
					<li data-target="#mycarousel" data-slide-to="5"></li>
					<li data-target="#mycarousel" data-slide-to="6"></li>
					<li data-target="#mycarousel" data-slide-to="7"></li>
                </ol>

				<div id="mycarousel" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
							<img class="img-responsive"
                           src="img/uthappizza.png" alt="Uthappizza">

                        <div class="carousel-caption" >

							<h2>Uthappizza<span class="label label-danger">Hot</span> <span class="badge">$4.99</span></h2>
								<p class="col-xs-12 col-sm-8 col-sm-offset-3">A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>
							<div class="col-xs-12 col-sm-6 col-sm-offset-2"><p><a class="btn btn-danger btn-xs" href="#">Add to Cart</a>
							<a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p></div>
                        </div>
                    </div>

                    <div class="item">
                        <img class="media-object img-thumbnail img-responsive"
                         src="img/buffet.png" alt="buffet">
                        <div class="carousel-caption">
							<h2 class="col-sm-8 col-sm-offset-3">Weekend Grand Buffet <span class="label label-danger label-xs">New</span><span class="badge">$19.99</span></h2>
							<p class="col-xs-12 col-sm-8 col-sm-offset-3">Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>
							<div class="col-xs-12 col-sm-6 col-sm-offset-2"><p><a class="btn btn-danger btn-xs" href="#">Add to Cart</a>
							<a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p></div>
                        </div>
                    </div>

                    <div class="item">
                        <img class="media-object img-thumbnail img-responsive"
                         src="img/afang-soup-pot.jpg" alt="Alberto Somayya">
                        <div class="carousel-caption">
							<h2 class="col-xs-12 col-sm-8 col-sm-offset-3">Afang Soup Pot <span class="label label-danger label-xs">New</span><span class="badge">$15.99</span></h2>
							<p class="col-xs-12 col-sm-8 col-sm-offset-3">Award winning  Afang soup with assorted  ingredient  with wide International recognition
							creating mouth watering fusion experiences.
							</p>
							<div class="col-xs-12 col-sm-6 col-sm-offset-2"><p><a class="btn btn-danger btn-xs" href="#">Add to Cart</a>
							<a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p></div>
                        </div>
                    </div>

					<div class="item">
                        <img class="media-object img-thumbnail img-responsive"
                         src="img/egusi-pot.jpg" alt="egusi-pot">
                        <div class="carousel-caption">

							<h2 class="col-sm-8 col-sm-offset-4">Egusi Pot of Soup <span class="label label-danger label-xs">New</span><span class="badge">$8.00</span></h2>
							<p class="col-xs-12 col-sm-8 col-sm-offset-4">Award winning  Afang soup with assorted  ingredient  with wide International recognition
							creating mouth watering fusion experiences.
							</p>
								<div class="col-xs-12 col-sm-6 col-sm-offset-3"><p><a class="btn btn-danger btn-xs" href="#">Add to Cart</a>
							<a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p></div>
                        </div>
                    </div>
					<div class="item">
                        <img class="media-object img-thumbnail img-responsive"
                         src="img/vegetable-soup.png" alt="vegetable-soup">
                        <div class="carousel-caption">
							<h2 class="col-sm-8 col-sm-offset-6">Vegetable Soup <span class="label label-danger label-xs">Hot</span><span class="badge">$13.99</span></h2>
							<p class="col-xs-12 col-sm-8 col-sm-offset-6">The best vegetable soup that meet African standard with wide African recognition creating mouthwatering <span>Aroma</span> in  fusion experiences.
							</p>
								<div class="col-xs-12 col-sm-6 col-sm-offset-4"><p><a class="btn btn-danger btn-xs" href="#">Add to Cart</a>
							<a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p></div>
                        </div>
                    </div>
					<div class="item">
                        <img class="media-object img-thumbnail img-responsive"
                         src="img/Product-SweetAroma.jpg" alt="Sweet Aroma">
                        <div class="carousel-caption">
							<h2 class="col-sm-8 col-sm-offset-4">Sweet Aroma Soup<span class="label label-danger label-xs">Hot</span><span class="badge">$10.99</span></h2>
							<p class="col-xs-12 col-sm-8 col-sm-offset-3">Vegetable Okra Soup made with African standard with great aroma creating mouthwatering fusion expriences.
							</p>
							<div class="col-xs-12 col-sm-6 col-sm-offset-4"><p><a class="btn btn-danger btn-xs" href="#">Add to Cart</a>
							<a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p></div>
                        </div>
                    </div>
                </div>

				</div>
				<!-- Controls -->
                <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
			</div>

       </div>

        <div class="row row-content">


            <div class="col-xs-12 col-sm-8 col-sm-push-1">
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
						<img class="media-object img-thumbnail"
                         src="img/uthappizza.png" alt="Uthappizza">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">Uthappizza<span class="label label-danger">Hot</span><span class="badge">$19.99</span> </h2>
                        <p>A unique combination of Indian Uthappam (pancake) and
                          Italian pizza, topped with Cerignola olives, ripe vine
                          cherry tomatoes, Vidalia onion, Guntur chillies and
                          Buffalo Paneer.</p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                    </div>
                </div>
            </div>
			<div class="col-xs-12 col-sm-4 col-sm-push-1">
                <p style="padding:20px;"></p>
                <h3 align=center>Our Lipsmacking Culinary Creations</h3>
            </div>
        </div>

        <div class="row row-content">
            <div class="col-xs-12 col-sm-4 ">
                <p style="padding:40px;"></p>
                <h3 align=center>This Month's Promotions</h3>
            </div>
			<div class="col-xs-12 col-sm-5 ">
				<div class="media">
					<h2>Weekend Grand Buffet<span class="label label-danger">New</span></h2>
					<p>Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>
				</div>
				<p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
			</div>
				<div class="media-body "class="col-xs-12 col-sm-3 ">
                    <div class="media-right media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         src="img/buffet.png" alt="buffet">
                        </a>
                    </div>
				</div>

		</div>



        <div class="row row-content">


            <div class="col-xs-12 col-sm-8">
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         src="img/okro soup.jpg" alt="Alberto Somayya">
                        </a>
                    </div>

                    <div class="media-body">
                        <h2 class="media-heading">Alberto Somayya</h2>
                        <h4>Executive Chef</h4>
                        <p>Award winning three-star Michelin chef with wide
                         International experience having worked closely with
                         whos-who in the culinary world, he specializes in
                          creating mouthwatering Indo-Italian fusion experiences.
                         </p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                    </div>
                </div>
            </div>
			<div class="col-xs-12 col-sm-4">
                <p style="padding:40px;"></p>
                <h3 align=center>Meet our Culinary Specialists</h3>
            </div>
        </div>


    </div>

    <footer class="row-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-5 col-xs-offset-1 col-sm-2 col-sm-offset-1">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              121, Clear Water Bay Road<br>
		              Clear Water Bay, Kowloon<br>
		              HONG KONG<br>
		              <i class="fa fa-phone"></i>: +852 1234 5678<br>
		              <i class="fa fa-fax"></i>: +852 8765 4321<br>
		              <i class="fa fa-envelope"></i>:
                        <a href="mailto:confusion@food.net">confusion@food.net</a>
		           </address>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="nav navbar-nav" style="padding: 40px 10px;">
                        <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
                <div class="col-xs-12">
                    <p style="padding:10px;"></p>
                    <p align=center>© Copyright 2015 Ristorante Con Fusion</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	<script>
        $(document).ready(function(){
            $("#mycarousel").carousel( { interval: 4500 } );
                          $("#carousel-pause").click(function(){
                $("#mycarousel").carousel('pause');
            });
                        $("#carousel-play").click(function(){
                $("#mycarousel").carousel('cycle');
            });
        });
    </script>
                 <script>
                     $('#loginButton').click(function(){
                         $('#loginModal').modal('show');
                     });
                    $('#Reserve').click(function(){
                    $('#reserveModal').modal('show');
                        });
    </script>
</body>

</html>
