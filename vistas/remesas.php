<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remesas</title>

    
    <link rel="stylesheet" href="../assets/bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
</head>
<body>


    <?php


        include_once './menu.php';
        

    ?>
    <div class="container">

            
        <h1>Remesas Dairy</h1>

        <label for="Monto">Monto</label>
        <input type="number" for="Monto" placeholder="Ingrese Monto" id="Monto_Operacion">

        <label for="Monto">Tipo de transaccion</label>
        <select name="Tipo_Transaccion" id="Tipo_Transaccion">
            <option value="1" selected>Transferencia</option>
            <option value="2" >Pago Movil</option>
        </select>

        <input type="button" value="Calcular" id="Boton_Calcular">
        <br><br>

        
        <p>
            <label for="Monto">Porcentaje de la Comision</label>
            <input type="number" placeholder="Porcentaje Comision" id="Porcentaje_Comision">%</p>
        <label for="Monto">Comision del monto</label>
        <input type="number" placeholder="Comision del monto" id="Monto_Comision">
        <br><br>
        <label for="Monto">Comision con 2 decimales</label>
        <input type="number" placeholder="Comision con 2 decimales" id="Monto_Comision_2decimales">
        <br><br>
        <label for="Monto">Comision con precision</label>
        <input type="number" placeholder="Comision con precision" id="Monto_Comision_Precision">

        </div>



    <script src="../assets/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js"></script>
    <script src="../static/js/comision_banco.js"></script>
    
</body>
</html>