<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SGC</title>
	<style>

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -200px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
	<img src="{{ asset('images/forbidden.png') }}">
	<h1>No posee privilegios para el acceso</h1>
	<h2>Ingrese sus credenciales e intente de nuevo..</h2>
	</div>
</body>
</html>