<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Prueba Tecnica</title>
<link href="estilos/boilerplate.css" rel="stylesheet" type="text/css">

<link href="estilos/estilos.css" rel="stylesheet" type="text/css">
<link href="estilos/fuentes.css" rel="stylesheet" type="text/css" />

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"><!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="barranavegacion/css/styles.css">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-example" crossorigin="anonymous" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css">


<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
  <script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
<!-- 
Para obtener más información sobre los comentarios condicionales situados alrededor de las etiquetas html en la parte superior del archivo:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/
  
Haga lo siguiente si usa su compilación personalizada de modernizr (http://www.modernizr.com/):
* inserte el vínculo del código js aquí
* elimine el vínculo situado debajo para html5shiv
* añada la clase "no-js" a las etiquetas html en la parte superior
* también puede eliminar el vínculo con respond.min.js si ha incluido MQ Polyfill en su compilación de modernizr 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="js/funciones.js"></script>
<script src="js/respond.min.js"></script>
</head>
<body  class="gridContainer clearfix">

  <div id="MarcoContenedor">
     
     <div id="contenedorsuperior"><!--inicio_contenedorsuperior-->
     <div id="logo"></div>
     <div id="cuadrocont">
        <div id="textoTitulo">
            <center><h1> <b>Empleados - Prueba Tecnica</b></h1></center>
        </div>
        <div id="logueo">
        </div>
     </div>
     </div>
  <!--final_contenedorsuperior-->
  <!--inicio_contenedormedio-->
     <div id="contenedormedio">
     <!--inicio_izquierda-->
        <div id="izquierda">
        <!--inicio_contenedormenu-->
        <div id="contenedormenu">
          
    <div class="row">
        <div id="content" class="col-lg-3">
            <div id="menu">
                <ul>
                 <li class="has-sub"><a title="" href="index.php">Inicio</a>
                    <li class="has-sub"><a title="" href="#">Gestion <i class="fa fa-angle-right"></i></a>
                        <ul>
                        <li class="has-sub"><i class="fa-solid fa-building"></i> <a title="" href="areas.php">Areas</i></a></li>
                            <li class="has-sub"> <i class="fa-solid fa-users"></i> <a title="" href="roles.php">Roles</i></a></li> 
                            <li class="has-sub"><i class="fa-solid fa-user-tie"></i><a title="" href="empleado.php">Empleados</a></li>
                         </ul>
                    </li>
                   
                  
                </ul>
            </div>
        </div>
        <div id="content" class="col-lg-9">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Bloque de anuncios adaptable -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-6676636635558550"
                 data-ad-slot="8523024962"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
         
        </div>
    </div>
            </div>
        <!--fin_contenedormenu-->
        </div>
        <!--fin_izquierda-->
        <!--inicio_derecha-->
         <div id="derecha">
            <div id="titulocont">
                <div id="titulonoticia"> <h3><b>Empleados</b><h3> </div>
            </div>
            <div id="contcont">
            &nbsp;
              <div id="btnCrear">

              <button class="btn btn-primary add" data-toggle="modal" name="add" data-target="#RegistrarClienteModal	" id="Agregar" style="width:100%;height:43px;margin: 0% 0% 0% 0%" >AGREGAR</button> 
            
              </div>
   <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm"><i class="fa-solid fa-hashtag"></i>  
      </th>
      <th class="th-sm"><i class="fa-solid fa-user"></i> Nombre
      </th>
      <th class="th-sm"><i class="fa-solid fa-envelope"></i> Email
      </th>
      <th class="th-sm"> <i class="fa-solid fa-mars-and-venus"></i> Sexo
      </th>
      <th class="th-sm"><i class="fa-solid fa-layer-group"></i> Area
      </th>
      <th class="th-sm"><i class="fa-solid fa-ellipsis-vertical"></i> Boletin
      </th>
      <th class="th-sm"><i class="fa-solid fa-audio-description"></i> Descripcion
      </th>
      <th class="th-sm"><i class="fa-solid fa-location-arrow"></i> Acciones
      </th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($this->model->Listar()  as $r): 
    
     $datos =  $r->id."||".$r->nombre."||".$r->email."||".$r->sexo."||"
    .$r->areaId."||".$r->descripcion."||".$r->boletin."||".$r->rol."||".$r->estado."||".$r->aname;
  
    ?>
    <tr>
      <td data_id="<?php echo  $r->id;?>" ><?php echo $r->id; ?></td>
      <td data_id="<?php echo  $r->nombre;?>"><?php echo $r->nombre; ?></td>
      <td data_id="<?php echo  $r->email;?>"><?php echo $r->email; ?></td>
      <td data_id="<?php echo  $r->sexo;?>"><?php echo $r->sexo; ?></td>
      <td data_id="<?php echo  $r->areaId;?>"><?php echo $r->areaId; ?></td>
      <td data_id="<?php echo  $r->boletin;?>"><?php
          if($r->boletin == 1){

            echo "si";
          }else{
            echo "no";

          }
     
      
      ?></td>
      <td data_id="<?php echo  $r->descripcion;?>"><?php echo $r->descripcion; ?></td>
    
      <td>   
      <button  data-toggle="modal" data-target="#EditarClienteModal"
       onclick="agregardatos('<?php echo $datos; ?>')" name="edit" class="btn btn-primary btn-xs edit edit-link"><i class="fa-solid fa-pen"></i></button>  
      
      -   
      <button  data-toggle="modal" data-target="#EliminarClienteModal" id="<?php echo $r->id ?>" name="drop" class="btn btn-primary btn-xs drop drop-link"><i class="fa-solid fa-trash"></i></button> 
    
    
    </td>
    </tr>
    <?php endforeach; ?>
  
  </tbody>
  <tfoot>
    <tr>
    <th class="th-sm"><i class="fa-solid fa-hashtag"></i> 
      </th>
      <th class="th-sm"><i class="fa-solid fa-user"></i> Nombre
      </th>
      <th class="th-sm"><i class="fa-solid fa-envelope"></i> Email
      </th>
      <th class="th-sm"> <i class="fa-solid fa-mars-and-venus"></i> Sexo
      </th>
      <th class="th-sm"><i class="fa-solid fa-layer-group"></i> Area
      </th>
      <th class="th-sm"><i class="fa-solid fa-ellipsis-vertical"></i> Boletin
      </th>
      <th class="th-sm"> <i class="fa-solid fa-audio-description"></i> Descripcion
      </th>
      <th class="th-sm"><i class="fa-solid fa-location-arrow"></i> Acciones
      </th>
    </tr>
  </tfoot>
</table>
            
            </div>
         </div>
        <!--fin_derecha-->
     </div>
  <!--final_contenedormedio-->
  <!--inicio_contenedorfooter-->
      <div id="contenedorfooter">
        <div id="contenedorfff">
          <div id="datosp" class="Estilo9">Diseño y desarrollo Guiovanny Caro<br/> Bogotá D.C. - Colombia.<br/> Derechos Reservados © 2025.</div>
          <div id="datospersonales" class="Estilo10">guiovanny.caro@outlook.com <br/>Telefono:3160405672. Bogota <br/>Cedula. 79848026 </div>
        </div>
     </div>
   <!--final_contenedorfooter-->
   </div>
<script>
$(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap4.js"></script>


</body>
</html>


<div id="RegistrarClienteModal" class="modal fade" role="dialog">
 <div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">×</button>
 <h4 class="modal-title">Agregar Empleado</h4>
 </div>
 <div class="modal-body">

		 <div class="form-group">
			   <label class="control-label" for="inputPatient">Nombre Completo</label>
			   <div class="field desc">
			  	 <input class="form-control" id="Nombre" name="Nombre" placeholder="Nombre completo del empleado" type="text" value="" required>
                 
           
			  </div>
     	 </div>

          <div class="form-group">
			   <label class="control-label" for="inputPatient">Correo Electronico</label>
			   <div class="field desc">
			  	 <input class="form-control" id="Email" name="Email" placeholder="Correo electronico" type="email" value="" required>
                 
           
			  </div>
     	 </div>

        <div class="form-group">
			   <label class="control-label" for="inputPatient">Sexo</label>
			   <div class="field desc">
			      <div style="width: 22%;height: 52px;">
              <input type="radio" name="Sexo" id="Sexo" value="M" /> Masculino 
             <input type="radio" name="Sexo" id="Sexo" value="F" />  Femenino 
             </div>
			  </div>
     	 </div>


        <div class="form-group">
			   <label class="control-label" for="inputPatient">Area</label>
			   <div class="field desc">
         <select name="Area" id="Area" class="form-select" aria-label="Default select example" style="width: 100%; height: 41px;">
    <option value="" selected>Seleccione una Opcion..</option> <!-- Valor vacío para opción predeterminada -->
    <?php foreach($this->area->Listar() as $a): ?>
        <option value="<?php echo $a->id; ?>"><?php echo $a->nombre; ?></option>
    <?php endforeach; ?>
</select>
			  </div>
     	 </div>


          <div class="form-group">
			   <label class="control-label" for="inputPatient">Descripcion</label>
			   <div class="field desc">
         <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3"></textarea>      
               
			  </div>
     	 </div>

          <div class="form-group">
			   <label class="control-label" for="inputPatient">Boletines </label>
			   <div class="field desc">
			     <div style="width: 90%;height: 41px;margin: 0% 0% 0% 5%">
              <input class="form-check-input" type="checkbox" value="1" id="Boletin" name="Boletin">
              Deseo Recibir boletin informativo
           </div>        	
			  </div>
     	 </div>

   
        <div class="form-group">
			   <label class="control-label" for="inputPatient">Roles</label>
			   <div class="field desc">
			     <div style="width: 90%;height: auto;margin: 0% 0% 0% 5%">
           <?php foreach($this->rol->Listar() as $ro): ?>
    <input class="form-check-input" type="checkbox" value="<?php echo $ro->id; ?>" id="Rol_<?php echo $ro->id; ?>" name="Rol[]">
    <?php echo $ro->nombre; ?><br>
<?php endforeach; ?>
           </div>        	
			  </div>
     	 </div>

        <div class="form-group">
			   <label class="control-label" for="inputPatient">Estado </label>
			   <div class="field desc">
			     <div style="width: 90%;height: 41px;margin: 0% 0% 0% 5%">
              <input class="form-check-input" type="radio" value="true" id="Estado" name="Estado">
              Activo
              <input class="form-check-input" type="radio" value="false" id="Estado" name="Estado">
              No Activo
           </div>        	
			  </div>
     	 </div>
		
		 
 </div>
 <div class="modal-footer">
 <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
 <button type="submit" class="btn btn-primary Registrar"  data-dismiss="modal" id="Registrar">Registrar</button>
  
 </div>
 </div>
 </div>
 </div>



 <div id="EditarClienteModal" class="modal fade" role="dialog">
 <div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">×</button>
 <h4 class="modal-title">Editar Empleado</h4>
 </div>
 <div class="modal-body">

		 <div class="form-group">
			   <label class="control-label" for="inputPatient">Nombre Completo</label>
			   <div class="field desc">
			  	 <input class="form-control" id="Nombreu" name="Nombreu" placeholder="Nombre completo del empleado" type="text" value="" required>
                 
           
			  </div>
     	 </div>

          <div class="form-group">
			   <label class="control-label" for="inputPatient">Correo Electronico</label>
			   <div class="field desc">
			  	 <input class="form-control" id="Emailu" name="Emailu" placeholder="Correo electronico" type="email" value="" required>
                 
           
			  </div>
     	 </div>

        <div class="form-group">
			   <label class="control-label" for="inputPatient">Sexo</label>
			   <div class="field desc">
			      <div style="width: 22%;height: 52px;">
              <input type="radio" name="Sexou" id="Sexou" value="M" /> Masculino 
             <input type="radio" name="Sexou" id="Sexou" value="F" />  Femenino 
             </div>
			  </div>
     	 </div>


        <div class="form-group">
			   <label class="control-label" for="inputPatient">Area</label>
			   <div class="field desc">
         <select name="Areau" id="Areau" class="form-select" aria-label="Default select example" style="width: 100%; height: 41px;">
    <option value="" selected>Seleccione una Opcion..</option> <!-- Valor vacío para opción predeterminada -->
    <?php foreach($this->area->Listar() as $a): ?>
        <option value="<?php echo $a->id; ?>"><?php echo $a->nombre; ?></option>
    <?php endforeach; ?>
</select>
			  </div>
     	 </div>


          <div class="form-group">
			   <label class="control-label" for="inputPatient">Descripcion</label>
			   <div class="field desc">
         <textarea class="form-control" id="Descripcionu" name="Descripcionu" rows="3"></textarea>      
               
			  </div>
     	 </div>

          <div class="form-group">
			   <label class="control-label" for="inputPatient">Boletines </label>
			   <div class="field desc">
			     <div style="width: 90%;height: 41px;margin: 0% 0% 0% 5%">
              <input class="form-check-input" type="checkbox" value="1" id="Boletinu" name="Boletinu">
              Deseo Recibir boletin informativo
           </div>        	
			  </div>
     	 </div>

   
        <div class="form-group">
			   <label class="control-label" for="inputPatient">Roles</label>
			   <div class="field desc">
			     <div style="width: 90%;height: auto;margin: 0% 0% 0% 5%">
        
           <?php foreach($this->rol->Listar() as $ro): ?>
    <input class="form-check-input" type="checkbox" value="<?php echo $ro->id; ?>" id="Rolu_<?php echo $ro->id; ?>" name="Rolu[]">
    <?php echo $ro->nombre; ?><br>
<?php endforeach; ?>
           </div>        	
			  </div>
     	 </div>

        <div class="form-group">
			   <label class="control-label" for="inputPatient">Estado </label>
			   <div class="field desc">
			     <div style="width: 90%;height: 41px;margin: 0% 0% 0% 5%">
              <input class="form-check-input" type="radio" value="t" id="Estadou" name="Estadou">
              Activo
              <input class="form-check-input" type="radio" value="f" id="Estadou" name="Estadou">
              No Activo
           </div>        	
			  </div>
     	 </div>
        <div class="form-group">
			 
       <div class="field desc">
      <input class="form-control" id="id" name="id"  type="hidden">
      </div>
      </div>
		 
 </div>
 <div class="modal-footer">
 <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
 <button type="submit" class="btn btn-primary Registrar"  data-dismiss="modal" id="Editar">Editar</button>
  
 </div>
 </div>
 </div>
 </div>


  
 <div id="EliminarClienteModal" class="modal fade" role="dialog">
 <div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">×</button>
 <h4 class="modal-title">Eliminar Cliente</h4>
 </div>
 <div class="modal-body">

		 seguro de eliminar?
 </div>
 <div class="modal-footer">
 <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
 <button type="submit" class="btn btn-primary Registrar"  data-dismiss="modal" id="Eliminar">Eliminar</button>
  
 </div>
 </div>
 </div>
 </div>


 <script> 
 $(document).ready(function(){  

     $(document).on('click', '.add', function(){  
	     $('#Registrar').click(function(){

        var nombre = $('#Nombre').val();
        var email = $('#Email').val();
        var sexo  = '';
        var sexo  = $('input[name="Sexo"]:checked').val();
        var area = $('#Area').val();
        var descripcion = $('#Descripcion').val();
        var boletin = $('#Boletin').prop('checked') ? 1 : 2;

        var selectedRoles = [];
        $('input[name="Rol[]"]:checked').each(function() {
            selectedRoles.push($(this).val());  
        });
     
        var estado = '';
        var estado = $('input[name="Estado"]:checked').val();

        if (!nombre === "" || !email === "" || !sexo === undefined || !area === "" || !descripcion === "" || !selectedRoles.length === 0 || !estado === undefined) {
          alertify.success("Por favor, complete todos los campos requeridos.");
          return false;  
        }

        var regex1 = /^[A-Za-z\s]+$/;
            if (!regex1.test(nombre))  {
              alertify.success('Por favor, ingresa un nombre válido (solo letras y espacios)');
              return false;  
            }

           var regex2 = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
           if (!regex2.test(email))  {
             alertify.success('Por favor, ingresa un correo electrónico válido');
             return false;  
           }

           if (!sexo) {
            alertify.success("Por favor, seleccione un sexo.");
            return false;   
          }
 
          if (area === "" || area === null) {
            alertify.success("Por favor, seleccione un área.");
            return false;  
         } 
         

         if (descripcion === "" || descripcion === null) {
          alertify.success("Por favor, ingrese una descripción.");
          return false;  
         } 

         if (boletin === 2) {
           alertify.success("Por favor, marque si desea recibir el boletín informativo.");
           return false;  
         }

           if (selectedRoles.length === 0) {
             alertify.success("Por favor, seleccione al menos un rol.");
         return ;  
         } 


         if (!estado) {
            alertify.success("Por favor, seleccione un estado.");
            return false;  
          } 
      
       var cadena=  "nombre=" + nombre + "&email=" + email
        + "&sexo=" + sexo + "&area=" + area+ "&descripcion=" 
        + descripcion+ "&boletin=" + boletin + "&rol=" + selectedRoles + "&estado=" + estado;


      $.ajax({
							type: "POST",
							url: '?c=empleados&a=Guardar',
              data: cadena,
							success: function(data)
							{
                alertify.success(data);
                  window.location.href = 'empleado.php';
							}, error: function(xhr, status, error) {
                alertify.success("Error en la solicitud AJAX: " + error);
                    window.location.href = 'empleado.php';
              }
			    });
       });
    });

    $(document).on('click', '.edit', function() {  
    var id = $(this).attr("id");


    $('#Editar').click(function(){
        var id = $('#id').val();
        var nombre = $('#Nombreu').val();
        var email = $('#Emailu').val();
        var sexo  = '';
        var sexo  = $('input[name="Sexou"]:checked').val();
        var area = $('#Areau').val();
        var descripcion = $('#Descripcionu').val();
        var boletin = $('#Boletinu').prop('checked') ? 1 : 2;
      
        var selectedRoles = [];
        $('input[name="Rolu[]"]:checked').each(function() {
            selectedRoles.push($(this).val());  
        });
     
        var estado = '';
        var estado = $('input[name="Estadou"]:checked').val();

        if (!nombre === "" || !email === "" || !sexo === undefined || !area === "" || !descripcion === "" || !selectedRoles.length === 0 || !estado === undefined) {
          alertify.success("Por favor, complete todos los campos requeridos.");
          return false;  
        }

        var regex1 = /^[A-Za-z\s]+$/;
            if (!regex1.test(nombre))  {
              alertify.success('Por favor, ingresa un nombre válido (solo letras y espacios)');
              return false;  
            }

           var regex2 = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
           if (!regex2.test(email))  {
             alertify.success('Por favor, ingresa un correo electrónico válido');
             return false;  
           }

           if (!sexo) {
            alertify.success("Por favor, seleccione un sexo.");
            return false;   
          }
 
          if (area === "" || area === null) {
            alertify.success("Por favor, seleccione un área.");
            return false;  
         } 
         

         if (descripcion === "" || descripcion === null) {
          alertify.success("Por favor, ingrese una descripción.");
          return false;  
         } 

         if (boletin === 2) {
           alertify.success("Por favor, marque si desea recibir el boletín informativo.");
           return false;  
         }

        if (selectedRoles.length === 0) {
             alertify.success("Por favor, seleccione al menos un rol.");
         return false;  
         } 

         if (!estado) {
            alertify.success("Por favor, seleccione un estado.");
            return false;  
          } 
      
        var cadena =  "id=" + id +
                      "&nombre=" + nombre + 
                      "&email=" + email +
                      "&sexo=" + sexo +
                      "&area=" + area + 
                      "&descripcion=" + descripcion + 
                      "&boletin=" + boletin + 
                      "&roles=" + selectedRoles.join(',') + // Unimos los roles seleccionados en un solo string
                      "&estado=" + estado;

        $.ajax({
            type: 'POST',
            url: '?c=empleados&a=Updated',
            data: cadena,
            success: function(data) {
              alertify.success(data); // Muestra el resultado del servidor
                window.location.href = 'empleado.php'; // Redirige a la página de empleados
            },
            error: function(xhr, status, error) {
              alertify.success("Error en la solicitud AJAX: " + error);
                window.location.href = 'empleado.php'; // Redirige en caso de error
            }
        });
    });
});



$(document).on('click', '.drop', function(){
			
      var id = $(this).attr("id");
       
           $('#Eliminar').click(function(){
    
          $.ajax({
             type: "GET",
             url: '?c=empleados&a=Drop',
             data: 'id='+id,
               success: function(data)
               {	
                alertify.success(data); 
                 window.location.href = 'empleado.php';
               }
               });
       
     });
 });




});
 </script>