<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Slider Jquery</title>
	<link rel="stylesheet" href="{{ url('assets/css/estilos.css')}}">
	<link rel="stylesheet" href="{{ url('assets/css/font-awesome.css')}}">

	
</head>
<body>
	<div class="slideshow">
		<ul class="slider">
			<li>
				<img src="{{ url('assets/img/1.jpg')}}" alt="">
				<section class="caption">
					<a href="{{ url('home')}}"><h1>Entrar</h1></a>
				</section>
			</li>
			<li>
				<img src="{{ url('assets/img/2.jpg')}}" alt="">
				<section class="caption">
					<a href="{{ url('home')}}"><h1>Entrar</h1></a>
				</section>
			</li>
			<li>
				<img src="{{ url('assets/img/3.jpg')}}" alt="">
				<section class="caption">
					<a href="{{ url('home')}}"><h1>Entrar</h1></a>
				</section>
			</li>
			<li>
				<img src="{{ url('assets/img/4.jpg')}}" alt="">
				<section class="caption">
					<a href="{{ url('home')}}"><h1>Entrar</h1></a>
				</section>
			</li>
			<li>
				<img src="{{ url('assets/img/5.jpg')}}" alt="">
				<section class="caption">
					<a href="{{ url('home')}}"><h1>Entrar</h1></a>
				</section>
			</li>
			<li>
				<img src="{{ url('assets/img/6.jpg')}}" alt="">
				<section class="caption">
					<a href="{{ url('home')}}"><h1>Entrar</h1></a>
				</section>
			</li>
		</ul>

		<ol class="pagination">
			
		</ol>
	
		<div class="left">
			<span class="fa fa-chevron-left"></span>
		</div>

		<div class="right">
			<span class="fa fa-chevron-right"></span>
		</div>

	</div>
	<audio id="sliderAudio" src="https://music.apple.com/ar/album/ambiente-de-bosque/1135906254?i=1135906633" loop></audio>
	<script src="{{ url('assets/js/jquery-3.1.0.min.js')}}"></script>
	<script src="{{ url('assets/js/main.js')}}"></script>
</body>
</html>