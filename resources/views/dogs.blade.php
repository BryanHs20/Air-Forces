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
					<header id="header" class="alt">
					<a href="{{route('vista.blog')}}" class="logo"><strong>Fuerzas</strong> <span>Aereas</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="{{route('vista.blog')}}">Inicio</a></li>
						</ul>
					</nav>

				<!-- Banner -->
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

						<!-- One -->
							<section id="one" class="tiles">
								@foreach($dogsp as $ok)
								<article>
									<span class="image">
										<img src="{{$ok->Imagen}}" alt=""/>
									</span>
									<header class="major">
										<h3><a href=></a></h3>
										<p>Ver mas</p>
									</header>
								</article>
								@endforeach
							</section>

						<!-- Two -->
							<!-- <section id="two">
								<div class="inner">
									<header class="major">
										<h2>Massa libero</h2>
									</header>
									<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
									<ul class="actions">
										<li><a href="landing.html" class="button next">Get Started</a></li>
									</ul>
								</div>
							</section> -->

					</div>

				<!-- Contact -->
					<!-- <section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">information@untitled.tld</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(000) 000-0000 x12387</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Address</h3>
										<span>1234 Somewhere Road #5432<br />
										Nashville, TN 00000<br />
										United States of America</span>
									</div>
								</section>
							</section>
						</div>
					</section> -->

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