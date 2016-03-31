<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha256-KC5lAzGRWwscU0sTmXtd8ka5mt7Vk8a0L5JqOhwA28s= sha512-+f2l7T69JKgnn0+Lc8P0WpM4J34GfEIInTI+iLOQWekcR9KxXE1epKQkwzFIZ7mf12jQlCryh2HfZqS8GcpR8Q==" crossorigin="anonymous">
		<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<title>WinNow</title>
		<style>
		.quitar-float{
			float: none;
			}
		.pacifico{
		font-family: 'Pacifico', cursive;
		font-size: 2em;
		}
		}
		.no-lista{
		margin: 0px;
		padding: 0px;
		}
		.no-lista li{
		list-style-type: none;
		}
		</style>
	</head>
	<body class="text-center">
		
		<div class="container-fuid">
			<div class="row well well-sm no-lista">
				<div class="col-xs-4 text-right">
					<nav>
						<ul>
							<li><a href="" class="pacifico">WinNow</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-xs-4 text-center">
					<nav>
						<ul>
							<li><a href="" class="pacifico">Productos</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-xs-4 text-left">
					<nav>
						<ul>
							<li><a href="{{ url('/passwords/login') }}" class="pacifico">Login</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="container"> <!-- contenedor del formulario de login -->
		<div class="row">
			<div class="col-xs-4"></div>
			<div class="col-xs-4">
				
				<form class="form-horizontal">
					<div class="form-group">
						
						<div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						</div>
					</div>
					<div class="form-group">
						
						<div class="col-sm-10">
							<input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
								<label>
									<input type="checkbox"> Recordar
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-xs-4"></div>
		</div>
		
		</div><!-- fin del contenedor del formulario login -->
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
		
	</body>
</html>