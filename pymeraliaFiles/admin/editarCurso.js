function validarInputObligatorio(){
    inputObligatorio = document.getElementsByClassName("form-control obligatorio")

    if (inputObligatorio.length == 0 || /^\s+$/.test(inputObligatorio)) {
        
    }
    return true;
}