<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>

    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css">

    <script src="public/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/js/jquery-3.7.1.min.js"></script>
</head>

<body>
    <?php
    //require "./app/config/database.php";
    // $db = new Database();
    
    //Inicializa la variable get vista, para mostrar las vistas de forma dinamica
    
    if (!isset($_GET['vista']) || $_GET['vista'] == "") {
        $_GET['vista'] = "login";
    }

    //Verifica que la vista actual exista en la carpeta de vistas, y luego verifica que
    //la vista no sea ni login ni el error 404
    
    if (is_file("app/views/" . $_GET['vista'] . ".php") && $_GET['vista'] != "login" && $_GET['vista'] != "404") {

        // Cerrar sesion
        if ((!isset($_SESSION['cedula']) || $_SESSION['cedula'] == "") || (!isset($_SESSION['usuario']) || $_SESSION['usuario'] == "")) {
            //session_destroy();
            // header ("Location: ../login/login_perro.php");
            //exit();
        }

        // Incluye la vista actual
        include "app/views/" . $_GET['vista'] . ".php";


    } else {
        if ($_GET['vista'] == "login") {
            include "./app/views/login.php";
            //include "../login/login_perro.php";
        }/*else{
include "./vistas/404.php";
*/
    }
    ?>

</body>

</html>