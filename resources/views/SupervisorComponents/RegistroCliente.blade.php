<!DOCTYPE html>
<html lang="es">

<head>
    @extends('components.head')
    <link rel="stylesheet" href="../resources/css/ordenPedido.css">
    <title>Portal Supervisor</title>
    
</head>


<?php
include_once "../resources/model/conexion.php";
$sentencia = $bd->query("select * from cliente");
$cliente = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>


<body style="background: #eee">
  


    @extends('components.Supervisor.headerSupervisor')

    @extends('components.Supervisor.sectionListSupervisor')
    


    
    <!--Gestion de telas-->
        <section class="option-selection" >

            <div class="form" >


                <form class="p-4" method="POST" action="../resources/model/registrar_cliente.php">
                    <div class="form--text" style="border-left: none">
                        <label class="lab">Nombre Cliente<span> * </span></label>
                        <input class="in" type="text" name="txtNombres" placeholder="Type a Complex Password" required >
        
                        <label class="lab">RUC / DNI<span> * </span></label>
                        <input class="in" type="text" name="txtRucDni" placeholder="Type a Complex Password" required >
        
                        <label class="lab">Provincia<span> * </span></label>
                        <input class="in" type="text" name="txtProvincia" placeholder="Type a Complex Password" required >
        
        
                        <label class="lab">Ciudad<span> * </span></label>
                        <input class="in" type="text" name="txtCiudad" placeholder="Type a Complex Password" required >
        
        
                        <label class="lab">Distrito<span> * </span></label>
                        <input class="in" type="text" name="txtDistrito" placeholder="Type a Complex Password" required >
        
                        <label class="lab">Teléfono<span> * </span></label>
                        <input class="in" type="text"  name="txtTelefono"  placeholder="Type a Complex Password" required >
        
        
                        <label class="lab">Correo<span> * </span></label>
                        <input class="in" type="text"  name="txtEmail" value="txtEmail"   placeholder="Type a Complex Password" required >
        
                        <br>
        
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary ml-5" value="Crear Registro" required>
                    </div>
        
                    </form>
                    
            </div>


    

 
        
        </section>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>