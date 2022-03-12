<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/train.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/lightbox.min.css">
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js" ></script>
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
        <a class="nav-link" href="/Contact">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>
</section>
<div class="head">
	<h1>TRAIN SHEDULE</h1>
</div>

<section id="aa">
  <div class="train">
<img src="image/kandy/train.jpg">
</div>
<div class="login-box">
  <img src="image/person.jpg" class="avatar">
  <h1>Find Train</h1>
  <form action="go" method="POST">
  @csrf
    <p>TO</p>
    <input type="text" id="to" name="to" placeholder="Where Are You Now..?">
    <p>FROM</p>
    <input type="text" id="from" name="from" placeholder="Where you want to go..?">
    <input type="submit" name="submit" value="Search">

  </form>
</div>
</section>
</body>
</html>