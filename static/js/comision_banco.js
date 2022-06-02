
var Monto = document.getElementById("Monto_Operacion");
var Tipo_Transaccion = document.getElementById("Tipo_Transaccion");
var Porcentaje_Comision = document.getElementById("Porcentaje_Comision");
var Monto_Comision = document.getElementById("Monto_Comision");
var Monto_Comision_2decimales = document.getElementById("Monto_Comision_2decimales");
var Monto_Comision_Precision = document.getElementById("Monto_Comision_Precision");
var Boton_Calcular = document.getElementById("Boton_Calcular");








//Funcion de redondeo
function redondeo(num) {
    var m = Number((Math.abs(num) * 100).toPrecision(15));
    return Math.round(m) / 100 * Math.sign(num);
}








Boton_Calcular.addEventListener("click",function(){

    console.clear();

    var planElegido = Tipo_Transaccion.options[Tipo_Transaccion.selectedIndex].value;
    if(planElegido == 1){
        console.log("Plan Elegido:",planElegido);
    }else{
        console.log("Plan Elegido:",planElegido);
    }

    var Comision = planElegido == 1 ? 0.11 : 0.3;

    //Asignamos valores a sus campos
    Porcentaje_Comision.value = Comision;

    console.log("Porcentaje de la comision: ",Comision+"%");
    console.log("Monto: "+Monto.value);
    console.log("Comision: "+(Monto.value*(Comision/100)));
    console.log("Comision 2 decimales: "+(Monto.value*(Comision/100)).toFixed(2));
    console.log("Comision 1 decimales: "+(Monto.value*(Comision/100)).toFixed(1));


    var numb= (Monto.value*(Comision/100));
    var numb2= (Monto.value*(Comision/100)).toFixed(2);

    //Monto_Comision.value = parseFloat(numb2);
    Monto_Comision.value = (Monto.value*(Comision/100));
    Monto_Comision_2decimales.value = Math.round(numb*100)/100;
    Monto_Comision_Precision.value = parseFloat(numb2).toPrecision(1);


    var rounded = Math.round((parseFloat(numb) + Number.EPSILON) * 100) / 100;
    console.log("Precision: ",parseFloat(numb2).toPrecision(1));

    console.log(Math.round(numb*100)/100);



    var respuesta = redondeo((Monto.value*(Comision/100)));
    console.log(typeof respuesta, respuesta);
    
    
    

});