<!DOCTYPE html>
<html lang="es">

<head>
    @extends('components.head')
    <link rel="stylesheet" href="../resources/css/gestionTelas.css">
    <title>Portal Supervisor</title>
    
</head>


<?php
include_once "../resources/model/conexion.php";

//Telas conexion php
$sentencia = $bd->query("select * from tipo_tela");
$tipo_tela = $sentencia->fetchAll(PDO::FETCH_OBJ);


$sentencia = $bd->query("select * from hilo");
$hilo = $sentencia->fetchAll(PDO::FETCH_OBJ);

//Hilo conexion php


?>


<body style="background: #eee">
  


    @extends('components.Supervisor.headerSupervisor')

    @extends('components.Supervisor.sectionListSupervisor')
    


    
    <!--Gestion de telas-->
        <section class="option-selection" >


          <div class="col-md-3 cont">
            
            <h4 style="margin:0 0 14% 0;">Ingreso de datos</h4>

            <div class="card">
                <div class="card-header" style="background: #008000; color:#eee">
                    Ingresa Tela
                </div>
                <form class="p-4" method="POST" action="registrar_tipo_tela.php">
                    <div class="mb-3">
                        <h6>Nombre:</h6>
                        <input type="text" class="form-control" name="txtNombre" autofocus required>
                    </div>                    
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar" style="background: #33498E" required>
                    </div>
                </form>
            </div>
<br><br>
<div class="card">
  <div class="card-header" style="background: #008000; color:#eee">
      Ingresar hilo
  </div>
  <form class="p-4" method="POST" action="registrar_tipo_tela.php">
      <div class="mb-3">
          <h6>Nombre:</h6>
          <input type="text" class="form-control" name="txtNombre" autofocus required>
      </div>                    
      <div class="d-grid">
          <input type="hidden" name="oculto" value="1">
          <input type="submit" class="btn btn-primary" value="Registrar"  style="background: #33498E"  required>
      </div>
  </form>
</div>
<br><br>
<div class="img-semaforo" style="position: relative; width: 100%; display: flex; justify-content: center">
 
    <img src="../resources/img/semaforo_cantidades.png" alt="" style="width: 80%">

</div>

<br><br>

<div class="buttons-reports ml-2">

    <a href="#">Generar Reporte</a>

  </div>

        </div>

            <div class="tareas" >
  
                <h4 style="margin:0 0 10% 0;">Telas</h4>
          

                <tbody>
                  <?php
                      foreach($tipo_tela as $dato){                    
                  ?>
<ul>
<li>

<label class="p-3">
<h5><?php echo $dato->desc_tipo_tela; ?></h5> <span>Tela</span> 
</label>

<input type="text" value="2000 M" style="width: 20%; font-size: 15px" readonly>
<a class="text-success" href="editar_tipo_tela.php?codigo=<?php echo $dato->id_tipo_tela; ?>"><i class="bi bi-pencil-square"></i></a>
<a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar_tipo_tela.php?codigo=<?php echo $dato->id_tipo_tela; ?>"><i class="bi bi-trash-fill"></i></a>
</li>


</ul>

                  <?php
                      }
                  
                  ?>

              </tbody>
       

          
                
              </div>


              <div class="tareas">

                <h4 style="margin:0 0 10% 0;">Hilos</h4>
                <?php
                    foreach($hilo as $dato){ 
            ?>
                <ul>
                    <li>

                        <label class="p-3">
                        <h5><?php echo $dato->desc_hilo; ?></h5> <span>Tela</span> 
                        </label>
                        
                        <input type="text" value="2000 M" style="width: 20%; font-size: 15px" readonly>
                        <a class="text-success" href="editar_tipo_tela.php?codigo=<?php echo $dato->id_hilo; ?>"><i class="bi bi-pencil-square"></i></a>
                        <a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar_tipo_tela.php?codigo=<?php echo $dato->id_hilo; ?>"><i class="bi bi-trash-fill"></i></a>
                        </li>
                   
                    
                  </ul>
                  <?php
                }
            
            ?>

                  <br><br>
             




              </div>

    

 
        
        </section>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>