<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Directive</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!--[if lte IE 8]><script src="{{ asset('css/ie/html5shiv.js') }}"></script><![endif]-->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/skel.min.js') }}"></script>
	<script src="{{ asset('js/init.js') }}"></script>
	<noscript>
		<link rel="stylesheet" href="{{ asset('css/skel.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/style-wide.css') }}" />
	</noscript>
	<!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('css/ie/v8.css') }}" /><![endif]-->
</head>
<body>
	<!-- Header -->
	<div id="header">
		<span class="logo icon fa-paper-plane-o"></span>
		<h1>Hi. This is Directive.</h1>
	</div>
	<!-- Main -->
	<div id="main">
		<header class="major container small">
			<h2>We conduct experiments that
				<br />
				may or may not seriously
				<br />
				break the universe</h2>
		</header>
		<div class="box alt container">
			<section class="feature left">
				<a href="#" class="image icon fa-signal"><img src="{{ asset('images/pic01.jpg') }}" alt="" /></a>
				<div class="content">
					<h3>The First Thing</h3>
					<p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus.
						Tellus erat mauris ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis fusce lacus.</p>
				</div>
			</section>
			<section class="feature right">
				<a href="#" class="image icon fa-code"><img src="{{ asset('images/pic02.jpg') }}" alt="" /></a>
				<div class="content">
					<h3>The Second Thing</h3>
					<p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus.
						Tellus erat mauris ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis fusce lacus.</p>
				</div>
			</section>
			<section class="feature left">
				<a href="#" class="image icon fa-mobile"><img src="{{ asset('images/pic03.jpg') }}" alt="" /></a>
				<div class="content">
					<h3>The Third Thing</h3>
					<p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus.
						Tellus erat mauris ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis fusce lacus.</p>
				</div>
			</section>
		</div>
		<footer class="major container small">
			<h3>Get shady with science</h3>
			<p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus. Tellus erat
				mauris ipsum fermentum etiam vivamus.</p>
		</footer>
	</div>
	<div id="footer">
		<div class="container small">
			<header class="major last">
			</header>
		</div>
	</div>
</body>
</html>