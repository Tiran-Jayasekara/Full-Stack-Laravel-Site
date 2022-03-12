<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/kandy.css">
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
        <a class="nav-link" href="/train">BACK</a>
      </li>
    </ul>
  </div>
</nav>
</section>

<div class="traintable clearfix">
			<div class="one">
				<div class="table">
					<table>
						<tr>
							<th>To</th>
							<th>From</th>
							<th>Start Time</th>
                            <th>End Time</th>
                            <th>Cost</th>
						</tr>

            @foreach($data as $row)
						<tr>
							<td>{{$row['to']}}</td>
							<td>{{$row['from']}}</td>
							<td>{{$row['starttime']}}</td>
                            <td>{{$row['endtime']}}</td>
							<td>{{$row['salary']}}</td>
						</tr>
            @endforeach
					</table>
				</div><!-- table -->
			</div> <!-- one -->
		</div><!-- train -->


<!--------Footer--->
<section id="footer">
  <div class="container text-center">
    <p>Made by Tiran Jayasekara <i class="fa fa-heart-o"></i></p>
  </div>
</section>
		
	</div><!--wrapper-->

</body>
</html>