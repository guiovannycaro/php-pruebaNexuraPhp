function agregardatos(datos) {

    d = datos.split('||');

    $('#id').val(d[0]);
    $('#Nombreu').val(d[1]);


    var estado = d[2];
    var radio = document.getElementsByName('Estadou');
    radio.forEach(function(checkbox) {
        if (checkbox.value === estado) {
            checkbox.checked = true;
        } else {
            checkbox.checked = false;
        }
    });




}