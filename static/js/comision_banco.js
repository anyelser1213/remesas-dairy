
var Monto = document.getElementById("Monto_Operacion");
var Tipo_Transaccion = document.getElementById("Tipo_Transaccion");
var Porcentaje_Comision = document.getElementById("Porcentaje_Comision");
var Monto_Comision = document.getElementById("Monto_Comision");
//var Monto_Comision_2decimales = document.getElementById("Monto_Comision_2decimales");
//var Monto_Comision_Precision = document.getElementById("Monto_Comision_Precision");
var Boton_Calcular = document.getElementById("Boton_Calcular");













Boton_Calcular.addEventListener("click",function(){

    console.clear();

    var planElegido = Tipo_Transaccion.options[Tipo_Transaccion.selectedIndex].value;
    if(planElegido == 1){
        console.log("Plan Elegido:",planElegido);
    }else{
        console.log("Plan Elegido:",planElegido);
    }

    //1era opcion: transferencia y 2da opcion: pago movil
    var Comision = planElegido == 1 ? 0.12 : 0.3;

    //Asignamos valores a sus campos

    //Asignamos el porcentaje de la comision
    Porcentaje_Comision.value = Comision;

    console.log("Porcentaje de la comision: ",Comision+"%");
    console.log("Monto: "+Monto.value);
    console.log("Comision: "+(Monto.value*(Comision/100)));
    //console.log("Comision 2 decimales: "+(Monto.value*(Comision/100)).toFixed(2));


    //Esta expresion regular(requieres convertir los numeros a string)
    const exprRegular = /\d+.\d{2}/;

    var consulta = (Monto.value*(Comision/100)).toString().match(exprRegular);
    console.log("comision con expresion regular: "+consulta);
    //console.log("Comision com expresion decimal: ",(Monto.value*(Comision/100).math(exprRegular)));


    if(Monto.value < 20 ){
        console.log("El monto es inferior a 20");
        //1era opcion: transferencia y 2da opcion: pago movil
    Monto_Comision.value = 0.05;
    
    }else{
        
        console.log("El monto es superior a 20");
        //1era opcion: transferencia y 2da opcion: pago movil
        Monto_Comision.value = planElegido == 1 ? (Monto.value*(Comision/100)).toString().match(exprRegular) : (Monto.value*(Comision/100)).toFixed(2);
    

    }



    //Monto_Comision.value = (Monto.value*(Comision/100)).toString().match(exprRegular);


    



});