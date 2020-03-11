<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin Panel</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<!-- header starts here -->
		<div class="container-fluid text-center bg-dark pt-3 pb-3 text-white">
			<h1 class="">Admin Panel | Online Quize Contest-2020</h1>
		</div>
		<!-- header ends here -->
		
		<!-- conteiner starts here -->
		<div class="container-fluid">
			<div class="row content">
				<div class="col-sm-3 sidenav bg-light">
					<ul class="navbar-nav pb-5">
						<li class="nav-item active">
							<h4 class="nav-link text-center pt-4">Menu</h4><hr>
						</li>
						<li class="nav-item pl-5">
							<a class="nav-link" href="{{URL::to('/set_quiz')}}">
							<span>Set A Quiz</span></a>
						</li>
						<li class="nav-item pl-5">
							<a class="nav-link" href="{{URL::to('/set_question')}}">
							<span>Set Question</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link pl-5" href="{{URL::to('/all_question')}}">
							<span>All Question</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link pl-5" href="{{URL::to('/total_participents')}}">
							<span>Participents</span></a>
						</li>
							
						<li class="nav-item pl-5 pb-5">
							<a class="nav-link" href="{{URL::to('/winners')}}">
							<span>Winners</span></a>
						</li>
					</ul>
				</div>
						<!-- main content starts from here -->
						<div class="col-sm-9">
							@yield('content')
						</div>
						<!-- main content ends here -->
					</div>
				</div>
				<!-- conteiner ennds here -->
				
				<!-- footerr starts from here -->
				<footer class="container-fluid text-center bg-dark pt-2 pb-1 text-white">
					<p>Copyright © Online Quiz Contest 2020.</p>
				</footer>
				<!-- footer ends here -->
			</body>
		</html>