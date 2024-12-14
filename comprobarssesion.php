
<html>
    <head><title>doc</title></head>
    <body>

        <?php 
        session_start();
        if(!isset($_SESSION['Usuario'])){
            header("Location:sesion.php");
        }
        ?>

        HOLAAAA usuario
    </body>
</html>