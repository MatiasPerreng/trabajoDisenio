<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <title>Document</title>
</head>

<body>

    <!--BARRA MENU-->
    <div class="header">
        <div class="dos"><form action="" method="get">
            <input type="search" name="buscar" placeholder="Buscar" class="input2">
        </form>
       <img src="bob.png" alt="img"></div>
        <div class="nav">
            <ul class="menu">
                <li><a href="">INICIO</a></li>
                <li><a href="">MENU</a>
                    <ul class="submenu">
                        <li><a href="">PRUEBA</a></li>
                        <li><a href="">PRUEBA</a></li>
                        <li><a href="">PRUEBA</a></li>
                    </ul>
                </li>
                <li><a href="">CONTACTO</a></li>
            </ul>
        </div>
    </div>
    
    <div id="contenedor">
        <!--FORMULARIO-->
        <div class="formulario">
            <form action="registrar.php" method="post" class="form">
                Cedula: <input type="number" name="cedula" placeholder="Cedula" class="input">
                <br>
                Nombre: <input type="text" name="nombre" placeholder="Nombre" class="input">
                <br>
                Apellido : <input type="text" name="apellido" placeholder="Apellido" class="input">
                <br>
                Telefono : <input type="number" name="telefono" placeholder="Telefono" class="input">
                <br>
                <input type="submit" name="enviar" class="btn">
        </div>

        <!--ENLACES-->
        <div class="Enlaces">
            <li><a href="https://github.com/">ENLACE EXTERNO</a></li>
            <li><a href="enlanceInterno/index2.html">ENLACE INTERNO</a></li>
        </div>
    </div>
    <footer>
        <p>Pagina hecha por Matias Perreng, ??2022</p>
    </footer>
</body>

</html>