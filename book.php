<?php
$_SESSION['name']="shashwat";
echo $_SESSION['name'];
if(isset($_SESSION['name'])) echo "hello";
else
echo "hi";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script>
	$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
	});
	</script>
    <title>Abdul Kalam Hall | NITW</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">     
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Kalam Hall</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li ><a href="#"><span class="glyphicon glyphicon-home"> </span>&nbspHome</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li></ul>
                <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#"><span class="glyphicon glyphicon-shopping-cart"> Book</span></a></li>
              </ul>
            </div>
          </div>
        </nav>
        </div>
        <h1> <p class="text-center text-muted"> Please Fill the Details mentioned below</p></h1>
      		<div class="container">
      		<div class="well">
      		 <form class="form-horizontal">
				  <div class="form-group">
				    <label for="name" class="col-sm-2 control-label">Name</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="name" placeholder="Name">
				    </div>
				  </div>
				    <div class="form-group">
				    <label for="DOB" class="col-sm-2 control-label">Date Of Birth</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="DOB" placeholder="DOB">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="Address" class="col-sm-2 control-label">Address</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="address" placeholder="Address">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="City" class="col-sm-2 control-label">City</label>
				    <div class="col-sm-10">
				      <input type="City" class="form-control" id="city" placeholder="City">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="ID" class="col-sm-2 control-label">ID proof</label>
				    <div class="col-sm-10">
				      <input type="file"  id="id">
				    </div>
				  </div>
				  <div class="form-group">
				  <label for="inputPassword3" class="col-sm-2 control-label">Number of Members</label>
				    <div class="col-sm-10">
				     <select class="form-control">
						  <option>1</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Sign in</button>
				    </div>
				  </div>
				</form>
        		 </div>
        		<blockquote><p class="text-warning">Please Note: The Rooms Are given as per the availabilty and on the sharing basis you have to fill this form and if the reservation is successfull we will send you a confirmation mail.
        		you should reserver this form at least 3 days before.</blockquote>
    </div>
    </body>
    </html>