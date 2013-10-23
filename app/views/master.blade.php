<html>
	<head>
		<title>
			@yield('title_for_layout')
		</title>
		<link rel="stylesheet" href="css/markup.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/tables.css">
		<link rel="stylesheet" href="css/aux.css">
		@yield('css_for_layout')
	</head>
	<body>
		<div class="container">
			<div class="header">
				This is header
			</div>
			<div class="content">
				@yield('content')
			</div>
			<div class="push"></div>
		</div>
		<div class="footer">
			this is footer
		</div>
	</body>
	<script src='js/jquery.js'></script>
	@yield('js_for_layout')
</html>
