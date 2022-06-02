<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CambiosRDI</title>

    <link rel="stylesheet" href="./assets/bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
</head>
<body>

    <main>
      
        
        <?php
        //Aqui incluimos el menu
        //echo $_SERVER["DOCUMENT_ROOT"]."/sistema_remesas_dairy/modelos/personas_modelo.php<br/>";
        //echo $_SERVER["DOCUMENT_ROOT"]."/vistas/menu.php<br/>";
        //echo getcwd(). "<br/>";

        //if()
        //echo "<br/><br/>directorio: ". __DIR__;
        //echo "<br/><br/>dirname: ". dirname(__FILE__);
        //echo "<br/><br/>archivo: ". __FILE__;
        //echo "<br/><br/>nombre directorio: ".basename(dirname(__FILE__))."<br>";
        
        
        if($_SERVER["DOCUMENT_ROOT"] != "/app"){

          $_GET["ruta_fija"] = "/sistema_remesas_dairy";

          printf("Es diferente a /app y el entorno es: ");
          echo $_GET["ruta_fija"]; 
          include_once($_SERVER["DOCUMENT_ROOT"]."/sistema_remesas_dairy/vistas/menu.php");
          
        }else{

          
          $_GET["ruta_fija"] = "";

          printf("Eees igual a /app y el entorno es: ",$_GET["entorno"]);

          echo $_GET["ruta_fija"]; 
          include_once($_SERVER["DOCUMENT_ROOT"]."/vistas/menu.php");
          
        }
        
        
        //include_once("")
        
        //Incluir base de datos
        ?>

      
        <div class="container my-5">
          <div class="bg-light p-5 rounded">
            <div class="col-sm-8 py-5 mx-auto">
              <h1 class="display-5 fw-normal">Enviar dinero a Venezuela nunca fue tan facil</h1>
              <p class="fs-5">Cuente con el servicio de envío de dinero de CambiosRDI cuando necesite enviar dinero rápido a Venezuela </p>
              
              <p>
                <a class="btn btn-primary" href="#" role="button">Enviar Dinero &raquo;</a>
              </p>
          </div>
          </div>
        </div>
      </main>



    

    

    


      <script src="./assets/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js"></script>

</body>
</html>