<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Fuerzas Aereas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<!-- Note: The "styleN" class below should match that of the banner element. -->
					<header id="header" class="alt style2">
						<a href="{{route('vista.blog')}}" class="logo"><strong>Fuerzas</strong> <span>Aereas</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
						<ul class="links">
							<li><a href="{{route('vista.blog')}}">Inicio</a></li>
						</ul>
					</nav>

				<!-- Banner -->
				<!-- Implementacion aleatoria -->
				<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Aeronaves armadas</h1>
							</header>
							<div class="content">
								<p>En este sitio observaras y aprenderas de las distintas aeronaves de las fuerzas aereas, asi como las aeronaves mas populares y utilizadas en el transcurso de la segunda guerra mundial.</p>
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Comencemos</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">
						<!-- Two -->
							<section id="two" class="spotlights">
									@php
									$count=0;
									@endphp
									@foreach($aforce as $arregloforce)
								<section>
									<a href="{{route('mostrar.pub', $arregloforce['slug'])}}" class="image">
										<img src="{{$arregloforce['Imagen1']}}" alt="" data-position="center center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>{{$arregloforce['Nombre']}}</h3>
											</header>
											<p>{{$arregloforce['Parrafo1']}}</p>
											<ul class="actions">
												<li><a href="{{route('mostrar.pub', $arregloforce['slug'])}}" class="button">Leer mas</a></li>
											</ul>
										</div>
									</div>
								</section>
									@php 
									$count++;
									@endphp
									@endforeach
							</section>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="https://www.facebook.com/profile.php?id=100004337321363" class="icon brands alt fa-facebook-f" target="_blank"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.instagram.com/mr_ray.0/" class="icon brands alt fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
								<li><a href="https://github.com/BryanHs20?tab=repositories" class="icon brands alt fa-github" target="_blank"><span class="label">GitHub</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Derechos reservados</li><li>Design: <a href="https://html5up.net" target="_blank">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>
			</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.scrolly.min.js"></script>
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>