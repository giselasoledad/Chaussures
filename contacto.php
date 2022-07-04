<?php
session_start();
 ?>

<html lang="es-ESP"><head>
  	<title>Contacto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/styleContacto.css">
	<body>
        <!-- Header-->
        <header class="py-5" style="background-image: url(img/bg1.jpg); background-size: cover;">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <img src="img/logo.png" alt="logo" style="height: 300px; width: 370px;">
                    <h1 class="lead fw-normal text-white bold mb-0">Calzado con calidad superior</h1>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(96, 22, 22); font-size: x-large; font-weight: bold;">
            <div class="container px-4 px-lg-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="sobrenosotros.html">Sobre nosotros</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdown" href="contacto.php">Contacto</a>
                        </li>
                        <li class="nav-item dropdown">
						<?php
                            if(!isset($_SESSION)){
                                ?>
                                <a class="nav-link" id="navbarDropdown1" href="login.html ">Login</a>
                                <?php
                            }
                            if(isset($_SESSION)){
                                ?>
                                <a class="nav-link" id="navbarDropdown1" href="deslogueo.php">Desloguear</a>
                                <?php
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div id="contacto"> 

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Formulario de contacto</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-11">
					<div class="wrapper">
                        <center>
						<div class="row no-gutters justify-content-center">
							<div class="col-lg-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5">
									<h3 class="mb-4">Contactanos:</h3>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-4">
					            <p><span>Dirección:</span> Avenida Santa Fe 2655</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-4">
					            <p><span>Telefono:</span> <a href="tel://1234567920">(011) 4581-8948</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text pl-4">
					            <p><span>Email:</span> <a href="mailto:chaussurescalzados@gmail.com">chaussurescalzados@gmail.com</a></p>
					          </div>
				          </div>
				          </div>
			          </div>
							</div>
							<div class="col-lg-5">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Ponte en contacto</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Tu mensaje fue enviado!! Muchas Gracias!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Mensaje"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Enviar" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>
<div at-magnifier-wrapper=""><div class="at-theme-light"><div class="at-base notranslate" translate="no"><div class="Z1-AJ" style="top: 0px; left: 0px;"></div></div></div></div>
<div id="sobrenosotros2">
                            </button>
                            <button class="btn btn-outline-dark flex-shrink-0" type="button"><a href="index.php">Volver</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Clase Conrado 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body></html>