<?php require ('ifSession.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style5.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style4.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/close.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
    <script src='js/jquery-3.7.1.js'></script>
    <link rel="icon" href="images/logo.ico" type= "image/x-icon">
    <title>Mi avance - Aprende Con Kaxie</title>
</head>
<body>
     <script src="js/script7.js"></script>
    <script>
        var DatosFinalesPDF = "<?php DatosPDF();?>"
    </script>
 
    <section style="margin-top: 30px;">
    <center><h1 class="AvanceTitle" >Mi avance - Progresiones</h1></center>
    <BR>

        <center><label onclick="pdfForAll(DatosFinalesPDF)" class = "descargarCert"><i class="fa-solid fa-file-pdf" style = "color: white"></i>   Descargar PDF con tus resultados</label>
        </center><br><br>
        
    <div class="progre">
        <CENTER><h1>Progresión 1 &emsp; <a href="progresion1.php">Ir a la progresión</a></h1></CENTER>
        <img src="images/P1.png" WIDTH=35%> 
        <div class="avance">Tu calificación es 
        <?php    
        $num="1";
        $calif=true;
            require("avaProgre.php");
        ?></div>
        <div class="porce" >
            <div class="fill a" style='width: 
            <?php 
                $num="1";
                $calif=false;
                require("avaProgre.php");
            ?>%;'></div>
        </div>
    </div>

    <div class="progre">
        <CENTER><h1>Progresión 2 &emsp; <a href="progresion2.php">Ir a la progresión</a></h1></CENTER>
        <img src="images/P2.png" WIDTH=35%> 
        <div class="avance">Tu calificación es 
        <?php    
        $num="2";
        $calif=true;
            require("avaProgre.php");
        ?></div>
        <div class="porce" >
            <div class="fill a" style='width:
            <?php 
                $num="2";
                $calif=false;
                require("avaProgre.php");
            ?>%;'></div>
        </div>
    </div>

    <div class="progre">
        <CENTER><h1>Progresión 3 &emsp; <a href="progresion3.php">Ir a la progresión</a></h1></CENTER>
        <img src="images/P3.png" WIDTH=35%> 
        <div class="avance">Tu calificación es 
        <?php    
        $num="3";
        $calif=true;
            require("avaProgre.php");
        ?></div>
        <div class="porce" >
            <div class="fill a" style="width:  
            <?php 
                $num="3";
                $calif=false;
                require("avaProgre.php");
            ?>%;"></div>
        </div>
    </div>

    <div class="progre">
        <CENTER><h1>Progresión 4 &emsp; <a href="progresion4.php">Ir a la progresión</a></h1></CENTER>
        <img src="images/P4.png" WIDTH=35%> 
        <div class="avance">Tu calificación es 
        <?php    
        $num="4";
        $calif=true;
            require("avaProgre.php");
        ?></div>
        <div class="porce" >
            <div class="fill a" style="width:  
            <?php 
                $num="4";
                $calif=false;
                require("avaProgre.php");
            ?>%;"></div>
        </div>
    </div>

    <div class="progre">
        <CENTER><h1>Progresión 5 &emsp; <a href="progresion5.php">Ir a la progresión</a></h1></CENTER>
        <img src="images/P5.png" WIDTH=35%> 
        <div class="avance">Tu calificación es 
        <?php    
        $num="5";
        $calif=true;
            require("avaProgre.php");
        ?></div>
        <div class="porce" >
            <div class="fill a" style="width:  
            <?php 
                $num="5";
                $calif=false;
                require("avaProgre.php");
            ?>%;"></div>
        </div>
    </div>

    <div class="progre">
        <CENTER><h1>Progresión 6 &emsp; <a href="progresion6.php">Ir a la progresión</a></h1></CENTER>
        <img src="images/P6.png" WIDTH=35%> 
        <div class="avance">Tu calificación es 
        <?php    
        $num="6";
        $calif=true;
            require("avaProgre.php");
        ?></div>
        <div class="porce" >
            <div class="fill a" style="width:  
            <?php 
                $num="6";
                $calif=false;
                require("avaProgre.php");
            ?>%;"></div>
        </div>
    </div>

    <div class="progre">
        <CENTER><h1>Progresión 7 &emsp; <a href="progresion7.php">Ir a la progresión</a></h1></CENTER>
        <img src="images/P7.png" WIDTH=35%> 
        <div class="avance">Tu calificación es 
        <?php    
        $num="7";
        $calif=true;
            require("avaProgre.php");
        ?></div>
        <div class="porce" >
            <div class="fill a" style="width:  
            <?php 
                $num="7";
                $calif=false;
                require("avaProgre.php");
            ?>%;"></div>
        </div>
    </div>
 
    <div class="progre">
        <CENTER><h1>Progresión 8 &emsp; <a href="progresion8.php">Ir a la progresión</a></h1></CENTER>
        <img src="images/P8.png" WIDTH=35%> 
        <div class="avance">Tu calificación es 
        <?php    
        $num="8";
        $calif=true;
            require("avaProgre.php");
        ?></div>
        <div class="porce" >
            <div class="fill a" style="width:  
            <?php 
                $num="8";
                $calif=false;
                require("avaProgre.php");
            ?>%;"></div>
        </div>
    </div>

    <div class="progre">
        <CENTER><h1>Progresión 9 &emsp; <a href="progresion9.php">Ir a la progresión</a></h1></CENTER>
        <img src="images/P9.png" WIDTH=35%> 
        <div class="avance">Tu calificación es 
        <?php    
        $num="9";
        $calif=true;
            require("avaProgre.php");
        ?></div>
        <div class="porce" >
            <div class="fill a" style="width:  
            <?php 
                $num="9";
                $calif=false;
                require("avaProgre.php");
            ?>%;"></div>
        </div>
    </div>

    <div class="progre">
        <CENTER><h1>Progresión 10 &emsp; <a href="progresion10.php">Ir a la progresión</a></h1></CENTER>
        <img src="images/P10.png" WIDTH=35%> 
        <div class="avance">Tu calificación es 
        <?php    
        $num="10";
        $calif=true;
            require("avaProgre.php");
        ?></div>
        <div class="porce" >
            <div class="fill a" style="width:  
            <?php 
                $num="10";
                $calif=false;
                require("avaProgre.php");
            ?>%;"></div>
        </div>
    </div>

    <div class="progre">
        <CENTER><h1>Progresión 11 &emsp; <a href="progresion11.php">Ir a la progresión</a></h1></CENTER>
        <img src="images/P11.png" WIDTH=35%> 
        <div class="avance">Tu calificación es  
        <?php    
        $num="11";
        $calif=true;
            require("avaProgre.php");
        ?></div>
        <div class="porce" >
            <div class="fill a" style="width:  
            <?php 
                $num="11";
                $calif=false;
                require("avaProgre.php");
            ?>%;"></div>
        </div>
    </div>

    <div class="progre">
        <CENTER><h1>Progresión 12 &emsp; <a href="progresion12.php">Ir a la progresión</a></h1></CENTER>
        <img src="images/P12.png" WIDTH=35%> 
        <div class="avance">Tu calificación es 
        <?php    
        $num="12";
        $calif=true;
            require("avaProgre.php");
        ?></div>
        <div class="porce" >
            <div class="fill a" style="width:  
            <?php 
                $num="12";
                $calif=false;
                require("avaProgre.php");
            ?>%;"></div>
        </div>
    </div>

    <div class="progre">
        <CENTER><h1>Progresión 13 &emsp; <a href="progresion13.php">Ir a la progresión</a></h1></CENTER>
        <img src="images/P13.png" WIDTH=35%> 
        <div class="avance">Tu calificación es 
        <?php    
        $num="13";
        $calif=true;
            require("avaProgre.php");
        ?></div>
        <div class="porce" >
            <div class="fill a" style="width:  
            <?php 
                $num="13";
                $calif=false;
                require("avaProgre.php");
            ?>%;"></div>
        </div>
    </div>

    <div class="progre">
        <CENTER><h1>Progresión 14 &emsp; <a href="progresion14.php">Ir a la progresión</a></h1></CENTER>
        <img src="images/P14.png" WIDTH=35%> 
        <div class="avance">Tu calificación es 
        <?php    
        $num="14";
        $calif=true;
            require("avaProgre.php");
        ?></div>
        <div class="porce" >
            <div class="fill a" style="width:  
            <?php 
                $num="14";
                $calif=false;
                require("avaProgre.php");
            ?>%;"></div>
        </div>
    </div>

    </section>
<?php include('footer.php');?>
</body>
</html>