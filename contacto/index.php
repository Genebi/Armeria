<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Contacto | SA-ZA</title>
		<link rel="stylesheet" href="../css/bootstrap.css" />
		<link rel="stylesheet" href="../css/styles.css" />
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		
		<div class="nav-c">
			<div class="menu-wrapper">
				<ul class="menu-c">
					<li><a href="../">INICIO</a></li>
					<li><a href="../calibre-22/">CALIBRE 22</a></li>
					<li><a href="../escopeta/">ESCOPETA</a></li>
					<li><a href="../fuego-central/">FUEGO CENTRAL</a></li>
					<li><a href="../alto-poder/">ALTO PODER</a></li>
					<li><a href="../accesorios/">ACCESORIOS</a></li>
					<li><a href="../tramites/">TRAMITES</a></li>
					<li><a href="#">PROMOCIONES</a></li>
					<li><a class="active" href="../contacto/">CONTACTO</a></li>
				</ul>
			</div>
		</div>

		<div class="main-slider">
			<img src="../img/slide.jpg" alt="imagen principal" />
		</div>
	
		<div class="olive-divider">
			<div class="sub-olive-divider"></div>
		</div>
		
		<div class="container s-container">
			<div class="row">
				<div class="col-xs-3">
					<div class="logo"><img src="../img/logo.png" alt="logo" /></div>
					<div class="menu-lateral">
						<h1><strong>SA-ZA</strong></h1>
						<h2 class="text-center">VENTA DE CARTUCHOS</h2>
						<div class="submenu">
							<h3>ACCESORIOS</h3>
							<ul class="submenu-lateral">
								<li><a href="../accesorios/">Artículos de limpieza</a></li>
								<li><a href="../accesorios/">Bolsas</a></li>
								<li><a href="../accesorios/">Chalecos</a></li>
								<li><a href="../accesorios/">Cuchillos</a></li>
								<li><a href="../accesorios/">Defensa Personal</a></li>
								<li><a href="../accesorios/">Fornituras</a></li>
								<li><a href="../accesorios/">Fundas</a></li>
								<li><a href="../accesorios/">Lámparas</a></li>
								<li><a href="../accesorios/">Portadores</a></li>
								<li><a href="../accesorios/">Vestuario</a></li>
								<li><a href="../accesorios/">Otros</a></li>
							</ul><hr />
							<a href="../tramites/"><img src="../img/registra-arma.jpg" alt="registrar arma" /></a>
						</div>
					</div>
				</div>
				<div class="col-xs-9">
					<div class="row text-center">
						<div class="col-xs-12">
							<h2 class="titulo-rojo">CONTACTO</h2>
						</div>
					</div><hr />
					<div class="row">
						<div class="col-xs-7 col-xs-offset-2">
							<form rol="form" id="form-contact" action="peticion.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="nombre">Nombre:</label>
									<input type="text" class="form-control" id="nombre" name="nombre" />
								</div>
								<div class="form-group">
									<label for="tel">Tel&eacute;fono:</label>
									<input type="text" class="form-control" id="tel" name="tel" placeholder="Ej. 3573840000" />
								</div>
								<div class="form-group">
									<label for="email">Correo electrónico:</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@dominio.com" />
								</div>
								<div class="form-group">
									<label for="mensaje">Mensaje:</label>
									<textarea class="form-control" id="mensaje" name="mensaje" rows="5"></textarea>
								</div>
								<button type="submit" id="submit" class="btn btn-danger">Enviar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer mtop-fifty">
			<div class="sub-footer">
				<div class="container">
					<div class="row text-center">
						<div class="col-xs-12">
							<p>Calle Francisco I. Madero #20 Local B</p>
							<p>Email: <a href="mailto:noe_s73@hotmail.com">noe_s73@hotmail.com</a><span> || Teléfono: 01-357-384-1308</span></p>
							<p>Todos los derechos Reservados &copy; 2014 - SA-ZA Cartuchos.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/jquery.validate.min.js"></script>
		<script src="../js/validacion.js"></script>
	</body>
</html>