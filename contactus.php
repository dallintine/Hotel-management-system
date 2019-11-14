
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head
         content must come *after* these tags -->
    <title>Ristorante Con Fusion: About Us</title>
        <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <link href="css/mystyles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                <a class="navbar-brand" href="index.html"><img src="img/logo.png" height=30 width=41></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.html"><span class="glyphicon glyphicon-home"
                         aria-hidden="true"></span> Home</a></li>
                    <li><a href="aboutus.html">
                        <span class="glyphicon glyphicon-info-sign"
                         aria-hidden="true"></span> About</a></li>
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
                    <li class="active"><a href="contactus.html"><i class="fa fa-envelope"></i>:Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <li><button class="btn btn-primary btn-lg style ><a  id="Shopping" class=""  type="button"
                     ><span class="glyphicon glyphicon-shopping-cart"></span>0 items N0.00</button></a></li>
                </ul>
                <ul id="loginButton" href="#" class="nav navbar-nav navbar-right">
                    <li><a>
                        <span class="glyphicon glyphicon-log-in"></span> Login</a>
                        </li>
                    </ul>
            </div>
			<div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav"> ... </ul>
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
                <form class="form-inline" role="login">

                            <div class="form-group">
                                  <input type="email" class="form-control" placeholder="email">
                                  <input type="password" class="form-control" placeholder="password">
                                  <input type="checkbox" class="" placeholder="" value="Remember me"><label style="color:white;">Remember me</label>
                            </div>

                             <button type="Sign in" class="btn btn-success">Sign in</button>
                             <button type="button" class="btn btn-default btn-sm"
                           data-dismiss="modal">Cancel</button>

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
                    <p style="padding:40px;"></p>
                    <p>We take inspiration from the World's best kichen, and create  unique cooking experience. Our lipsmacking cooking will tickle your culinary senses!</p>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <p style="padding:20px;"></p>
                    <img src="img/logo.png" class="img-responsive">
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
               <ul class="breadcrumb">
                   <li><a href="index.html">Home</a></li>
                   <li class="active">Contact Us</li>
               </ul>
            </div>
            <div class="col-xs-12">
               <h3>Contact Us</h3>
               <hr>
            </div>
        </div>

        <div class="row row-content">
           <div class="col-xs-12">
              <h3>Location Information</h3>
           </div>
            <div class="col-xs-12 col-sm-4 col-sm-offset-1">
                   <h5>Our Address</h5>
                    <address style="font-size: 100%">
		              121, Clear Water Bay Road<br>
		              Clear Water Bay, Kowloon<br>
		              HONG KONG<br>
		              <i class="fa fa-phone"></i>: +852 1234 5678<br>
		              <i class="fa fa-fax"></i>: +852 8765 4321<br>
		              <i class="fa fa-envelope"></i>:
                        <a href="mailto:confusion@food.net">confusion@food.net</a>
		           </address>
            </div>
            <div class="col-xs-12 col-sm-6 col-sm-offset-1">
                <h5>Map of our Location</h5>
            </div>
            <div class="col-xs-12 col-sm-11 col-sm-offset-1">
                <div class="btn-group" role="group" aria-label="...">
                    <a type="button" class="btn btn-primary" href="tel:+85212345678"><i class="fa fa-phone"></i> Call</a>
                    <a type="button" class="btn btn-info"><i class="fa fa-skype"></i> Skype</a>
                    <a type="button" class="btn btn-success" href="mailto:confusion@food.net"><i class="fa fa-envelope-o"></i> Email</a>
                </div>
            </div>
        </div>

        <div class="row row-content">
           <div class="col-xs-12">
              <h3>Send us your Feedback</h3>
           </div>
            <div class="col-xs-12 col-sm-9">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="firstname" class="col-sm-2 control-label">First Name</label>
						<div class="col-sm-10">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
                        </div>
                    </div>
					 <div class="form-group">
                        <label for="telnum" class="col-xs-12 col-sm-2 control-label">Contact Tel.</label>
                        <div class="col-xs-5 col-sm-4 col-md-3">
                            <div class="input-group">
                                <div class="input-group-addon">(</div>
                                    <input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area code">
                                <div class="input-group-addon">)</div>
                            </div>
                        </div>
                        <div class="col-xs-7 col-sm-6 col-md-7">
                                    <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="emailid" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
                        </div>
                    </div>
					<div class="form-group">
                       <div class="checkbox col-sm-5 col-sm-offset-2">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="approve" value="">
                                <strong>May we contact you?</strong>
                            </label>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                            <select class="form-control">
                                <option>Tel.</option>
                                <option>Email</option>
                            </select>
                        </div>
                    </div>
					<div class="form-group">
                        <label for="feedback" class="col-sm-2 control-label">Your Feedback</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="feedback" name="feedback" rows="12"></textarea>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Send Feedback</button>
                        </div>
                    </div>
                </form>
            </div>
             <div class="col-xs-12 col-sm-3">
                <p style="padding:20px;"></p>
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
        $('#loginButton').click(function(){
        $('#loginModal').modal('show');
                     });
        $('#Reserve').click(function(){
        $('#reserveModal').modal('show');
                        });
    </script>
</body>

</html>
