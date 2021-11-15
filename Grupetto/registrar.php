<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Grupetto</title>
    <link rel="icon" href="img/iconologo.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<header class="header1">       
        <h1><img id="logobici" src="img/logoSinNombre.png" alt="logo Grupetto"> Grupetto</h1>
    </header>   

    <nav>
        <div class="navbar">
            <ul>
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="calcu.html">Calc.Tiempo</a></li>
            </ul>
        </div>
    </nav>

    <main>

       <div class="container">
       <?php
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $direccion = $_POST["email"];
            $usuarioF = $_POST["usuario"];

            echo print "  <p>Su Usuario es <strong>$usuarioF</strong>.</p>\n";
            print "\n";
            print "  <p>Su nombre es <strong>$nombre</strong>.</p>\n";
            print "\n";
            print "  <p>Su apellido es <strong>$apellido</strong> .</p>\n";
            print "\n";
            print "  <p>Su mail es <strong>$direccion</strong>.</p>\n";
            print "\n";
        ?>  
        </div>

    
    </main>

    <footer>
        <div class="footer">
        <ul>
            <li>Grupetto®️ 2021 todos los derechos reservados </li> <br>
            
        <a id="smbuttons" class="btn btn-sm btn-default" href="https://www.instagram.com/?hl=es" target="blank" role="button"><img src="img/InstagramLogo.png" alt="" width="20" height="20"> Instagram</a>
        <a id="smbuttons" class="btn btn-sm btn-default" href="https://www.facebook.com/" target="blank" role="button"><img src="img/FacebookLogo.png" alt="" width="20" height="20"> Facebook</a>         
        <a id="smbuttons" class="btn btn-sm btn-default" href="https://twitter.com/?lang=es" target="blank" role="button"><img src="img/twitter-logo.png" alt="" width="20" height="20"> Twitter</a>
        <a id="DescargaApp" class="btn btn-sm btn-default" href="https://play.google.com/store/apps?hl=es_AR&gl=US" target="blank" role="button"><img src="img/PlayStoreLogo.png" alt="" width="20" height="20"> <b> DESCARGÁ NUESTRA APP</b></a>

        </ul>
        
        </div>

    </footer>

</body>
</html>

