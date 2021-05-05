<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="brief description of this website and who is it made for">
	<meta name="keywords" content="keyword1,keyword2,keyword3,...">
	<meta name="author" content="Name of the main author of this website's content">
	<title>Portfolio</title>

	<!-- Styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/	jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  	<link rel="stylesheet" href="Views/estilos.css" type="text/css">

</head>
<body>

	<!-- Header -->
	<div class="hero-image">
		<div class="hero-text">
			<!-- <h1 style="font-size:50px">I am John Doe</h1>
			<p>And I'm a Photographer</p> -->
			<!-- <button>Hire me</button> -->
		</div>
	</div>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<a class="navbar-brand" href="#">
			<img src="Views/Images/logo1.png" alt="logo" width="50" height="50">
		</a>
		<button class="navbar-toggler" type="button"
		 data-toggle="dropdown" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link text-white" href="#about">About Me</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="#education">Education</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="#channels">Programming</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="#contact">Contact</a>
				</li>    
			</ul>
		</div>  
	</nav>

	<!-- Section -->
	<div class="container" style="margin-top:30px">
		<div class="row">
			<div class="col-sm-4">
				<h2 id="about" class="about text-white">About Me</h2>
				<!-- <h5 class="text-white">Who Am I ?</h5> -->
				<div class="about fakeimg">
					<p class="text-left">
						My name is Samuel García Labra, I am a student
						of Engineering in Comunications & Electronics,
						I am a person with a lot of passion for Technology, I am looking forward to contribute
						with my knowledge in programming and networking inside a company, seeking for continuous learning and mutual growth.
						I enjoy sharing my experience with others, and come together with a team.
					</p>
				</div>
				<br>
				<h2 class="about text-white" id="channels">Programming Languages</h2>
				<p class="text-white">Lorem ipsum dolor sit ame.</p>
				<ul class="about nav nav-pills flex-column sticky-top">
					<?php include "Pages/languages.php"; ?>
				</ul>
				<hr class="d-sm-none">
			</div>
			<div id="education" class="col-sm-8">
				<h2 class="about text-white">Education</h2>
				<!-- <h5 class="text-white">--- <em>without professional experience </em> ---</h5> -->
				<div class="about fakeimg">
					<p class="text-justify">
						<strong>University :</strong> Escuela Superior de Ingeniería Mecánica y Eléctrica Unidad Zacatenco <br> (ESIME IPN) <br>
						Studying: 6th Semester of Engineering in Communications and Electronics <br>
						Attending Since 2017 - Until now
					</p>
					<p class="text-left">
						<strong>High Scool :</strong> Centro de Estudios Científicos y Tecnológicos Número 11 "Wilfrido Massieu" 
						<br>(CECyT 11 IPN) <br>
						Graduated as: Technician in Telecommunications <br>
						Attended Since 2014 - 2017
					</p>

				</div>

				<!-- Courses Carousel -->
				<h2 class="about text-white">Courses</h2>
				<div class="about fakeimg">
					<?php include "Views/Pages/carousel.php"; ?>
				</div>

				<!-- Programming Languages -->
				<br>
				<h2 class="about text-white" id="flutter">Flutter</h2>
				<h5 class="about text-white text-light">Basic Level</h5>
				<div class="about fakeimg bg-light">
					<video class="flutter-video" autoplay muted loop>
						<source src="Views/Images/Flutter.webm" type="video/webm">
					</video>
				</div>
				<p class="about text-white">Concepts..</p>
				<p class="about text-white">
					<strong>Dart Fundamentals: </strong>Use of variables, lists, bucles, maps, conditionals, functions, classes, inheritance, mixins, futures, async-await, json... <br>
					<strong>Flutter Fundamentals:</strong> MaterialApp, WidgetBuilder, MaterialPageRoute, StatefulWidget, StatelessWidget, Scaffold, AppBar, Text, Center, Column, Row, FloatingActionButton, Icon, Colors, FutureBuilder, Navigator, ListView, Card, EdgeInsetsGeometry, Container...  
				</p>

				<h2 class="about text-white" id="pepe">Php</h2>
				<h5 class="about text-white">Basic Level</h5>
				<div class="about fakeimg">
					<iframe style="border-top-left-radius: 15px;border-top-right-radius: 15px;" 
					class="flutter-video"  width="560" height="315" src="https://www.youtube.com/embed/kddXBhu9xBU?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<p class="about text-white">Concepts..</p>
				<p class="about text-white">
					<strong>Php Fundamentals: </strong>Use of variables, arrays, bucles, conditionals, functions, classes, inheritance, MVC design pattern, PDO... <br>
					<strong>SQL Fundamentals:</strong> Create Database, Create Tables, Select, Insert, Update & Delete...
				</p>
				<h2 class="about text-white" id="python">Python</h2>
				<h5 class="about text-white">Basic Level</h5>
				<div class="about fakeimg">
					<iframe style="border-top-left-radius: 15px;border-top-right-radius: 15px;" 
					class="flutter-video" width="560" height="315" src="https://www.youtube.com/embed/rwE4kEWwS-o?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<p class="text-white">Concepts..</p>
				<p class="text-white">
					<strong>Python Fundamentals: </strong>Use of variables, lists, sets, tuples, dictionaries, conditionals, bucles, functions, classes, inheritance, modules, threads... <br>
					<strong>RaspBerryPi Fundamentals:</strong> Navigate through Linux(Debian) using basic Linux commands, ssh connection, automation of electronic components using Python... <br>					
				</p>

				<h2 class="about text-white" id="java">Java</h2>
				<h5 class="about text-white">Basic Level</h5>
				<div style="padding: 0px;" class="about fakeimg">
					<img style="border-radius: 45px;margin:0px;" class="flutter-video" src="Views/Images/java-concepts.jpg" alt="java-concepts">
				</div>
				<p class="text-white">Concepts..</p>
				<p class="text-white">
					<strong>Java Fundamentals: </strong>Use of variables, arrays, ArrayLists, conditionals, bucles, functions, classes, inheritance, <b>swing API</b> for graphic interfaces... <br>
				</p>
			</div>
		</div>
	</div>
 
 	<!-- Footer -->
	<section id="contact">
		<!-- Footer -->
		<footer class="mail-section text-center text-white" style="background-color: hsla(128,128,128,0.5);">
			<!-- Grid container -->
			<div class="container p-4 pb-0">
				<!-- Section: CTA -->
				<section>
					<p class="d-flex justify-content-center align-items-center">
						<span class="me-3">Send e-mail</span>
						<a href="mailto: Sam_Garca99@hotmail.com" type="button" class="btn btn-outline-light btn-rounded m-3">
							Send !
						</a>
						<a class="btn btn-light d-inline-block" 
						href="https://github.com/sglabra17?tab=repositories" target="_blank">
						<span class="me-3">GitHub</span>
						</a>				
					</p>

				</section>
				<!-- Section: CTA -->
			</div>
			<!-- Grid container -->

			<!-- Copyright -->
			<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
				© 2021 Copyright:
				<a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
			</div>
			<!-- Copyright -->
		</footer>
		<!-- Footer -->
	</section>


	<!-- SCROLL REVEAL -->
  	<script src="https://unpkg.com/scrollreveal"></script>

 	<!-- codigo js -->
	<script src="Views/main.js" type="text/javascript"></script>
</body>
</html>