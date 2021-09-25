<!DOCTYPE html>
<html>
<title>Crud Curriculum</title>
<head>
  <link rel="stylesheet" href="css/estilos.css">
  <?php require_once "css/dependencias.php"; ?>  
  
<?php
require_once "configura/config.php";
require_once "controller/C_ninios.php";
require_once "css/dependencias.php";
$control = new CoNinio();
$control->c();
?>

</head>
<body>
	<div class="container">
		<br>
		<h1>Lista Nombres</h1>
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<div id="tablastores"></div>
			</div>
		</div>
	</div>


  <!--************************************************* agregar datosmodal ***********************************************-->
  <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Postulante</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
<div id="contenedor">

<form id="frmAgrega" method="POST" class="row g-3 needs-validation" novalidate>

     <div class="col-md-3">
        <label for="cuiN" class="form-label">* Numero DPI</label>
        <input min="999999999999" type="number" class="form-control" name="cuiN" id="cuiN" required >
        <div class="invalid-feedback">
            Ingresa 13 digitos dpi
        </div>
    </div>

    <div class="col-md-3">
        <label for="nombreN" class="form-label">* Nombre</label>
        <input type="text" class="form-control" name="nombreN" id="nombreN" required>
        <div class="invalid-feedback">
            Ingresa nombre
        </div>
    </div>

    <div class="col-md-3">
        <label for="fechaNacN" class="form-label">Fecha Nacimiento</label>
        <input type="date" class="form-control" name="fechaNacN" id="fechaNacN">
        <div class="valid-feedback">
            Ok!!
        </div>
    </div>

    <div class="col-md-4">
        <label for="emailN" class="form-label">* Correo</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="email" class="form-control" name="emailN" id="emailN" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                    Ingrese correo!!
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <label for="direccionN" class="form-label">Direccion</label>
        <div class="input-group has-validation">
            <input type="text" class="form-control" name="direccionN" id="direccionN" aria-describedby="inputGroupPrepend">
            <div class="valid-feedback">
            Ok!!
        </div>
        </div>
    </div>

    <div class="col-md-3">
        <label for="nacionalidadN" class="form-label">Nacionalidad</label>
        <select class="form-select" name="nacionalidadN" id="nacionalidadN">
            <option selected disabled value="">Elegir...</option>
            <option>Guatemaltec@</option>
            <option>American@</option>
            <OPTION>Mexican@</OPTION>
      </select>
    </div>

    <div class="col-md-3">
        <label for="departamentoN" class="form-label">* Departamento</label>
        <select class="form-select" name="departamentoN" id="departamentoN" required>
            <option selected disabled value="">Elegir...</option>
            <option>Alta Verapaz</option>
            <option>Baja Verapaz</option>
            <OPTION>Chimaltenango</OPTION>
            <option>Chiquimula</option>
            <option>Escuintla</option>
            <option>Guatemala</option>
            <option>Huehuetenango</option>
            <option>Izabal</option>
            <option>Jalapa</option>
            <option>Jutiapa</option>
            <option>Peten</option>
            <option>El Progreso</option>
            <option>Quetzaltenango</option>
            <option>Quiche</option>
            <option>Retalhuleu</option>
            <option>Sacatepequez</option>
            <option>San Marcos</option>
            <option>Santa Rosa</option>
            <option>Solola</option>
            <option>Suchitepequez</option>
            <option>Totonicapan</option>
            <option>Zacapa</option>
            <div class="invalid-feedback">
                  Seleccione un Departamento.
              </div>
      </select>
    </div>

    <div class="col-md-4">
        <label for="telefonoN" class="form-label">* Numero de telefono</label>
        <input min="9999999" type="number" class="form-control" name="telefonoN" id="telefonoN" required>
        <div class="invalid-feedback">
            Ingrese numero de telefono.
        </div>
    </div>

    <div class="col-md-3">
        <label for="profesionN" class="form-label">* Profesion</label>
        <select class="form-select" name="profesionN" id="profesionN" required>
            <option selected disabled value="">Elegir...</option>
            <option>Ingeniero en Sistemas</option>
            <option>Licenciado Derecho</option>
            <OPTION>Desarrollador</OPTION>
      </select>
      <div class="invalid-feedback">
            Ingrese Profesion
        </div>
    </div>

    <div class="col-md-3">
        <label for="pretSalarioN" class="form-label">* Ingrese Pretension Salarial</label>
        <input min='99' type="number" class="form-control" name='pretSalarioN' id="pretSalarioN" required>
        <div class="invalid-feedback">
            Ingrese Pret Salario
        </div>
    </div>

    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
          Aceptar terminos y condiciones
        </label>
            <div class="invalid-feedback">
                Debe aceptar terminos y condiciones
            </div>
        </div>
    </div>

       <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-raised btn-primary" onclick="funcion()" id="btnAgregarJuego">Agregar</button>
        </div>

  </form>
</div>
      </div>
    </div>
  </div>
  <!--************************************************* agregar datosmodal ***********************************************-->







  <!--************************************************* updatemodal ***********************************************-->
  <div class="modal fade" id="updatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Actualiza Postulante</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div id="contenedor">
            <form id="frmactualiza">
            <div class="col-md-5">
        <label for="cuiNU" class="form-label">* Numero DPI</label>
        <input min="999999999999" type="number" class="form-control" name="cuiNU" id="cuiNU" required >
        <div class="invalid-feedback">
            Ingresa 13 digitos dpi
        </div>
    </div>

    <div class="col-md-5">
        <label for="nombreNU" class="form-label">* Nombre</label>
        <input type="text" class="form-control" name="nombreNU" id="nombreNU" required>
        <div class="invalid-feedback">
            Ingresa nombre
        </div>
    </div>

    <div class="col-md-5">
        <label for="fechaNacNU" class="form-label">Fecha Nacimiento</label>
        <input type="date" class="form-control" name="fechaNacNU" id="fechaNacNU">
        <div class="valid-feedback">
            Ok!!
        </div>
    </div>

    <div class="col-md-5">
        <label for="emailNU" class="form-label">* Correo</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="email" class="form-control" name="emailNU" id="emailNU" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Ingrese correo!!
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <label for="direccionNU" class="form-label">Direccion</label>
        <div class="input-group has-validation">
            <input type="text" class="form-control" name="direccionNU" id="direccionNU" aria-describedby="inputGroupPrepend">
        </div>
    </div>

    <div class="col-md-5">
        <label for="nacionalidadNU" class="form-label">Nacionalidad</label>
        <select class="form-select" name="nacionalidadNU" id="nacionalidadNU">
            <option selected disabled value="">Elegir...</option>
            <option>Guatemaltec@</option>
            <option>American@</option>
            <OPTION>Mexican@</OPTION>
      </select>
    </div>

    <div class="col-md-3">
        <label for="departamentoNU" class="form-label">* Departamento</label>
        <select class="form-select" name="departamentoNU" id="departamentoNU" required>
            <option selected disabled value="">Elegir...</option>
            <option>Alta Verapaz</option>
            <option>Baja Verapaz</option>
            <OPTION>Chimaltenango</OPTION>
            <option>Chiquimula</option>
            <option>Escuintla</option>
            <option>Guatemala</option>
            <option>Huehuetenango</option>
            <option>Izabal</option>
            <option>Jalapa</option>
            <option>Jutiapa</option>
            <option>Peten</option>
            <option>El Progreso</option>
            <option>Quetzaltenango</option>
            <option>Quiche</option>
            <option>Retalhuleu</option>
            <option>Sacatepequez</option>
            <option>San Marcos</option>
            <option>Santa Rosa</option>
            <option>Solola</option>
            <option>Suchitepequez</option>
            <option>Totonicapan</option>
            <option>Zacapa</option>
      </select>
      <div class="invalid-feedback">
            Seleccione un Departamento.
        </div>
    </div>

    <div class="col-md-4">
        <label for="telefonoNU" class="form-label">* Numero de telefono</label>
        <input min="9999999" type="number" class="form-control" name="telefonoNU" id="telefonoNU" required>
        <div class="invalid-feedback">
            Ingrese numero de telefono.
        </div>
    </div>

    <div class="col-md-3">
        <label for="profesionNU" class="form-label">* Profesion</label>
        <select class="form-select" name="profesionNU" id="profesionNU" required>
            <option selected disabled value="">Elegir...</option>
            <option>Ingeniero en Sistemas</option>
            <option>Licenciado Derecho</option>
            <OPTION>Desarrollador</OPTION>
      </select>
    </div>

    <div class="col-md-3">
        <label for="pretSalarioNU" class="form-label">* Ingrese Pretension Salarial</label>
        <input min='99' type="number" class="form-control" name='pretSalarioNU' id="pretSalarioNU" required>
        <div class="invalid-feedback">
            Ingrese nota.
        </div>
    </div>
            </form> 
          </div>
      
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-raised btn-warning" id="btnactualizar">Actualizar</button>
        </div>
      </div>
    </div>
  </div>
  <!--************************************************* updatemodal ***********************************************-->


  <!--************************************************* curriculum ***********************************************-->
  <div class="modal fade" id="curriculum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Curriculum Postulante</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div id="contenedor">
            <form id="frmactualizaV">
            <div class="col-md-5">
        <label for="cuiNV" class="form-label">Numero DPI</label>
        <input min="999999999999" type="number" class="form-control" name="cuiNV" id="cuiNV" disabled>
    </div>

    <div class="col-md-5">
        <label for="nombreNV" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombreNV" id="nombreNV" disabled>
    </div>

    <div class="col-md-5">
        <label for="fechaNacNV" class="form-label">Fecha Nacimiento</label>
        <input type="date" class="form-control" name="fechaNacNV" id="fechaNacNV" disabled>
    </div>

    <div class="col-md-5">
        <label for="emailNV" class="form-label">Correo</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="email" class="form-control" name="emailNV" id="emailNV" aria-describedby="inputGroupPrepend" disabled>
        </div>
    </div>

    <div class="col-md-6">
        <label for="direccionNV" class="form-label">Direccion</label>
        <div class="input-group has-validation">
            <input type="text" class="form-control" name="direccionNV" id="direccionNV" aria-describedby="inputGroupPrepend" disabled>
        </div>
    </div>

    <div class="col-md-5">
        <label for="nacionalidadNV" class="form-label">Nacionalidad</label>
        <select class="form-select" name="nacionalidadNV" id="nacionalidadNV" disabled>
            <option selected disabled value="">Elegir...</option>
            <option>Guatemaltec@</option>
            <option>American@</option>
            <OPTION>Mexican@</OPTION>
      </select>
    </div>

    <div class="col-md-3">
        <label for="departamentoNV" class="form-label">Departamento</label>
        <select class="form-select" name="departamentoNV" id="departamentoNV" disabled>
            <option selected disabled value="">Elegir...</option>
            <option>Alta Verapaz</option>
            <option>Baja Verapaz</option>
            <OPTION>Chimaltenango</OPTION>
            <option>Chiquimula</option>
            <option>Escuintla</option>
            <option>Guatemala</option>
            <option>Huehuetenango</option>
            <option>Izabal</option>
            <option>Jalapa</option>
            <option>Jutiapa</option>
            <option>Peten</option>
            <option>El Progreso</option>
            <option>Quetzaltenango</option>
            <option>Quiche</option>
            <option>Retalhuleu</option>
            <option>Sacatepequez</option>
            <option>San Marcos</option>
            <option>Santa Rosa</option>
            <option>Solola</option>
            <option>Suchitepequez</option>
            <option>Totonicapan</option>
            <option>Zacapa</option>
      </select>
    </div>

    <div class="col-md-4">
        <label for="telefonoNV" class="form-label">Numero de telefono</label>
        <input min="9999999" type="number" class="form-control" name="telefonoNV" id="telefonoNV" disabled>
    </div>

    <div class="col-md-3">
        <label for="profesionNV" class="form-label">Profesion</label>
        <select class="form-select" name="profesionNV" id="profesionNV" disabled>
            <option selected disabled value="">Elegir...</option>
            <option>Ingeniero en Sistemas</option>
            <option>Licenciado Derecho</option>
            <OPTION>Desarrollador</OPTION>
      </select>
    </div>

    <div class="col-md-3">
        <label for="pretSalarioNV" class="form-label">Pretension Salarial</label>
        <input min='99' type="number" class="form-control" name='pretSalarioNV' id="pretSalarioNV" disabled>
    </div>

    

    <div class="col-md-3">
        <label for="pretSalarioUSD" class="form-label">Pretension Salarial USD</label>
        <input type="text" class="form-control" name='pretSalarioUSD' id="pretSalarioUSD" disabled>
    </div>
        
            </form> 
          </div>
      
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <!--************************************************* curriculum ***********************************************-->



  <script src="controller/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


</body>
</html>



<script src="controller/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


<script type="text/javascript">
	$(document).ready(function(){
		$('#tablastores').load('view/tabla.php');

    $('#btnAgregarJuego').click(function(){
      if(validarFormVacio('frmAgrega') == 0){
       alertify.alert("Debes llenar todos los campos por favor!");
        return false;
      }

      datos=$('#frmAgrega').serialize();

      $.ajax({
        type:"POST",
        data:datos,
        url:"controller/insertar.php",
        success:function(r){
          if(r==1){
           $('#frmAgrega')[0].reset();
           $('#tablastores').load('view/tabla.php');
           alertify.success("Agregado con exito :)");
         }else{
          alertify.error("No se pudo agregar :(");
        }
      }
    });
    });


  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#btnactualizar').click(function(){

      datos=$('#frmactualiza').serialize();
        $.ajax({
          type:"POST",
          data:datos,
          url:"controller/actualizar.php",
          success:function(r){
            if(r==1){
             $('#tablastores').load('view/tabla.php');
               alertify.success("Actualizado con exito :)");
            }else{
               alertify.error("No se pudo actualizar :(");
            }
           }
        });
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#btnactualizarV').click(function(){

      datos=$('#frmactualizaV').serialize();
        $.ajax({
          type:"POST",
          data:datos,
          url:"controller/actualizar.php",
          success:function(r){
            if(r==1){
             $('#tablastores').load('view/tabla.php');
               alertify.success("Actualizado con exito :)");
            }else{
               alertify.error("No se pudo actualizar :(");
            }
           }
        });
    });
  });
</script>

<script type="text/javascript">

function obtenDatos(cui){
    $.ajax({
      type:"POST",
      data:"cui=" + cui,
      url:"controller/obtenerRegistro.php",
      success:function(r){
        datos=jQuery.parseJSON(r);

        $('#cuiNU').val(datos['cuiNU']);
        $('#nombreNU').val(datos['nombreNU']);
        $('#fechaNacNU').val(datos['fechaNacNU']);
        $('#emailNU').val(datos['emailNU']);
        $('#direccionNU').val(datos['direccionNU']);
        $('#nacionalidadNU').val(datos['nacionalidadNU']);
        $('#departamentoNU').val(datos['departamentoNU']);
        $('#telefonoNU').val(datos['telefonoNU']);
        $('#profesionNU').val(datos['profesionNU']);
        $('#pretSalarioNU').val(datos['pretSalarioNU']);
      }
    });
  }


  function obtenDatosV(cui){
    $.ajax({
      type:"POST",
      data:"cui=" + cui,
      url:"controller/obtenerRegistroV.php",
      success:function(r){
        datos=jQuery.parseJSON(r);
        
        
        dollar = 7.75

        
        $('#cuiNV').val(datos['cuiNV']);
        $('#nombreNV').val(datos['nombreNV']);
        $('#fechaNacNV').val(datos['fechaNacNV']);
        $('#emailNV').val(datos['emailNV']);
        $('#direccionNV').val(datos['direccionNV']);
        $('#nacionalidadNV').val(datos['nacionalidadNV']);
        $('#departamentoNV').val(datos['departamentoNV']);
        $('#telefonoNV').val(datos['telefonoNV']);
        $('#profesionNV').val(datos['profesionNV']);
        $('#pretSalarioNV').val(datos['pretSalarioNV']);
        $('#pretSalarioUSD').val((datos['pretSalarioNV'])/dollar);               
      }
    });
  }

  function validarFormVacio(formulario){
    datos=$('#' + formulario).serialize();
    d=datos.split('&');
    vacios=0;
    for(i=0;i< d.length;i++){
      controles=d[i].split("=");
      if(controles[1]=="A" || controles[1]==""){
        vacios++;
        console.log('vacios');
      }
    }
    return vacios;
  }

  function elimina(cui){
      alertify.confirm('Eliminar ninio', '¿Desea eliminar este registro?', 
              function(){ 
                  $.ajax({
                     type:"POST",
                      data:"cui=" + cui,
                      url:"controller/eliminar.php",
                      success:function(r){
                          if(r==1){     
                              $('#tablastores').load('view/tabla.php');
                              alertify.success("Eliminado con exito :)");
                          }else{
                               alertify.error("No se pudo eliminar :(");
                          }
                      }
                  });
              }
              ,function(){ 
                alertify.error('Cancelo')
              });
  }

</script>
