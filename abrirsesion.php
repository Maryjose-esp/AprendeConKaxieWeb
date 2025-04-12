<?php

try {
    $base = new PDO("mysql:host=localhost; dbname=aprendeconkaxiew", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM usuario WHERE NUSUARIO= :login AND CONTRASENA= :password";
    $resultado = $base->prepare($sql);
    $login = htmlentities(addslashes($_GET['NomUsrIS']));
    $password = htmlentities(addslashes($_GET['passwIS']));
    $resultado->bindValue(":login", $login);
    $resultado->bindValue(":password", $password);
    $resultado->execute();
    $nRegistro = $resultado->rowCount();
    if ($nRegistro != 0) {
        //echo "SE PUEDE INICIAR SESION";
        //QUE LAS COOOKIES, AYUDA ESPERO NO DESTRUYA EL CODIGO


        $sessionTime = 365 * 24 * 60 * 60;
        session_set_cookie_params([
            'lifetime' => $sessionTime,
            'path' => '/',
            'domain' => $_SERVER['HTTP_HOST'],
            'secure' => isset($_SERVER['HTTP_HOST']),
            'httponly' => true
        ]);
        ///FIN DE LAS COOKIES, PREVENGO UN POSIBLE ERROR
        session_start();
        $_SESSION['Usuario'] = $_GET['NomUsrIS'];

        header("location:index.php");

    } else {
        header("location:sesion.php");
    }

} catch (Exception $e) {
    die("ERROR: " . $e->getMessage());
}



?>