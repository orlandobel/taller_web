var display = document.getElementById("display");
var operacion = document.getElementById('operacion');

function addNumero(numero) {
    let val = display.value;
    val += numero;

    display.value = val;
}

function addOperando(numero) {
    let val = display.value;
    val += numero;

    operacion.value += val;
    display.value = '';
}

function limpiar() {
    display.value = "";
    operacion.value = '';
}

function calcular() {
    let exp = operacion.value;
    exp += display.value;

    let res = eval(exp);
    console.log(res);

    operacion.value = res;
    display.value = '';
}

function punto() {
    let val = display.value;

    if(!val.includes('.')) {
        val += '.';

        display.value = val;
    }
}