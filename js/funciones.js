 function agregardatos(datos) {

     d = datos.split('||');

     $('#id').val(d[0]);
     $('#Nombreu').val(d[1]);
     $('#Emailu').val(d[2]);

     var sexo = d[3];


     var radio = document.getElementsByName('Sexou');
     radio.forEach(function(checkbox) {
         if (checkbox.value === sexo) {
             checkbox.checked = true;
         } else {
             checkbox.checked = false;
         }
     });


     $('#Descripcionu').val(d[5]);
     if (d[6] == '1') {
         $('#Boletinu').prop('checked', true); // Check the checkbox if value is 1
     } else {
         $('#Boletinu').prop('checked', false); // Uncheck the checkbox if value is 0
     }

     var valRol = d[7];

     var empleadoId = d[0];

     obtenerRoles(empleadoId);



     var estado = d[8];
     var radio = document.getElementsByName('Estadou');
     radio.forEach(function(checkbox) {
         if (checkbox.value === estado) {
             checkbox.checked = true;
         } else {
             checkbox.checked = false;
         }
     });

     var selectedValue = d[9];
     $('#Areau').val(selectedValue);


 }

 function obtenerRoles(IdEmpleado) {


     fetch(`js/obtenerroles.php?empleado_id=${IdEmpleado}`)
         .then(response => response.json())
         .then(roles => {

             if (roles.error) {
                 alert('Error al obtener roles: ' + roles.error);
                 return;
             }

             let selectedRoles = roles;



             selectedRoles.join(', ');


             let checkboxes = document.querySelectorAll('input[id^="Rolu_"]');
             checkboxes.forEach(function(checkbox) {
                 if (selectedRoles.includes(checkbox.value)) {
                     checkbox.checked = true;
                 } else {
                     checkbox.checked = false;

                 }
             });
         })
         .catch(error => {
             console.error('Error al obtener los roles:', error);
         });
 }