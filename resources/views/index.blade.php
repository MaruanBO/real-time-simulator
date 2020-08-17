<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Real time simulator</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/b969fb1d7e.js" crossorigin="anonymous"></script>
	<script src="https://js.pusher.com/4.2/pusher.min.js"></script>


</head>
<body>

<!-- Remove the right arrow -->
<style type="text/css">
  .dropdown-toggle::after {
    display:none;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
	<a class="navbar-brand" href="#">Marouane Boukhriss</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarsExample07">
	  <ul class="navbar-nav mr-auto">
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	      	<i class="fas fa-bell fa-lg" style="margin-right: 28px;"></i>
	        <i class="fas fa-circle fa-sm" id="notify-color" style="margin-right: 52px; vertical-align: top;position: absolute;top: 3px;right: -20px;  color: red;display:none;"></i>
		  </a>
	      <div class="dropdown-menu" aria-labelledby="dropdown07">
	        <a class="dropdown-item incidente-notification" href="#">Not intruder</a>
	      </div>
	    </li>
	  </ul>
	</div>
	</div>
</nav>

<div class="container" style="margin-top: 20px">
	<div class="card" style="width: 18rem;">
	  <div class="card-body">
	    <h5 class="card-title">Watch the bell</h5>
	    <p class="card-text">Look the bell to look the change to color red when receive the real time notification</p>
	    <a href="https://www.linkedin.com/in/marouane-boukhriss-b183621aa" class="btn btn-primary">Follow me</a>
	  </div>
	</div>
</div>


<script>

  var pusher = new Pusher('d3d57fcef93c51082ee8', {
    cluster: 'eu',
    encrypted: true
  });

  var channel = pusher.subscribe('notify');
  
  	channel.bind('notify-event', function(message) {           
	    var incidente = '<strong class="text-danger">'+message[0]+'</strong>';
	    
	    $('.incidente-notification').html(incidente);

	    $('#notify-color').css({'color':'red','display':'inline'});
  });

</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

