<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/contact.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/lightbox.min.css">
<script type="text/javascript" src="/js/lightbox-plus-jquery.min.js" ></script>
</head>
<body>
	<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="/img/tr.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="/index">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/gallery">PLACES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/services">SERVICES</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">BOOK</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="/contact">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>
</section>

<section>

<div class="wrapper clearfix">
	<div class="login clearfix">	
		<div class="loginform clearfix">
			<h4>Send Your Msg</h4>
			<form action="add" class="contact clearfix" method="POST">
                @csrf
				<input type="text" name="name" id="name" placeholder="Name">
				<input type="email" name="email" id="email" placeholder="Email">
				<input type="number" name="number" id="number" placeholder="Number">
				<textarea name="message" id="message" cols="30" rows="10" placeholder="Enter Your Msg"></textarea>
				<button>Send</button>
			</form>

		</div><!-- loginform -->

	        <div class="contactus clearfix">
				<h3></h3>
				<p>Tiran Jayasekara<br>Udadumbara<br>Tiran.jayasekara.999@gmail.com<br>0714055143</p>

			<div class="socialmedia">
				<ul>
					<li><a href="#"><i class="fa fa-whatsapp fa-fw" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a></li>
					<li><a href="https://www.facebook.com/tiran.jayasekara.16"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-rss fa-fw" aria-hidden="true"></i></a></li>
				</ul>
			</div> <!-- socialmedia -->
        </div><!-- background -->
	</div><!-- contactus -->
</div> <!-- login -->
	

</section>
		

<!--------Footer--->
<section id="footer">
  <div class="container text-center">
    <p>Made by Tiran Jayasekara <i class="fa fa-heart-o"></i></p>
  </div>
</section>
		
	</div><!--wrapper-->

</body>
</html>