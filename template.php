<?php
//Iniciamos o continuamos la sesi�n encargada de evitar el bucle infinito
session_name("url_amigable");
session_start();
//Almacenamos datos del server, script y variables (pasadas por GET)
$Server=$_SERVER['SERVER_NAME'];
$Script=$_SERVER['PHP_SELF'];
$Variables=$_SERVER['QUERY_STRING'];

//Verificando si tiene variables por GET 
//y no se han pasado datos mediante un form por POST
//ya q al redireccionar un  post puede ocasionar errores.
//Tambien verificamos que la variable de sesi�n 'Listo' 
//sea diferente a 1, esto nos eviara un bucle infinito.

if(!empty($Variables) && $_SERVER['REQUEST_METHOD']=='GET' && $_SESSION['Listo']!=1){ 
	//Si tiene variables pasadas por GET:
	$_SESSION['Listo']=1;
  //6. Redireccionando a la url amigable
  if (isset($_GET["ruta"])) {
      if ($_GET["ruta"] == "productos" ||
          $_GET["ruta"] == "cctv" ||
          $_GET["ruta"] == "ca" ||
          $_GET["ruta"] == "alarmas" ||
          $_GET["ruta"] == "kits") {
          header('Location:' . $_GET["ruta"] . '.php');
            // include "" . $_GET["ruta"] . ".php";
      } else {
            include "404.php";
        }
    } 
	// header("Location: $URL_AMIGABLE");
	//7. Exit har� que culmine hasta este punto el script, si no estuviera 'exit'
	// el script continuar�a ejecut�ndose y llegar�a hasta el final del mismo, es decir,
	// a la parte donde colocamos a la variable de sesi�n 'Listo' en cero, originandose 
	// entonces un bucle infinito.
	exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Tecseel | Tecnología y Seguridad Elctrónica</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700|Comfortaa:300,400,700"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/fontawesome/css/all.css" rel="stylesheet">
  <link href="lib/fontello/css/fontello.css" rel="stylesheet">
  <!-- <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/404.css" rel="stylesheet">

</head>

<body>

  <?php
  include "header.php";
  // <!--==========================
    // main
  // ============================-->
  echo '  <main id="main">';
    include "intro.php";
    include "destacados.php";
    include "nosotros.php";
    include "servicios.php";
    include "hechos.php";
    include "trabajos.php";
    include "clientes.php";
    include "equipo.php";
    include "contacto.php";

  echo '  </main>';
  // <!-- #main -->

    include "footer.php";
  ?>


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>
<?php
//Limpia el Posible Bucle, es decir se puede volver a hacer el envio
$_SESSION['Listo']=0; 
?>