<!DOCTYPE html>
<html lang="es">

<head>
    @extends('components.head')
    <link rel="stylesheet" href="../resources/css/gestionTelas.css">
    <title>Portal Supervisor</title>
    
</head>

<?php
include_once "../resources/model/conexion.php";
$sentencia = $bd->query("select * from cliente");
$cliente = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>

<body>
  
    @extends('components.Supervisor.headerSupervisor')
    @extends('components.Supervisor.sectionListSupervisor')
    


    
    <!--Gestion de telas-->
        <section class="option-selection" >


            <div class="container">


                <table class="table table-bordered grocery-crud-table table-hover">
         

                  <thead>
                    <tr>
                      <th>Cliente</th>
                      <th>Rollos (unidad)</th>
                      <th>Color</th>
                      <th>Fecha Actualizacion</th>
                      <th>Fecha Entrega</th>
                      <th>Estado</th>
                    </tr>
                  </thead>
                  <tbody>
              
                    <tr>
                      <td>
                        Marqués de Riscal
                      </td>
                      <td>
                        Marqués de Riscal </td>
                      <td>
                        Marqués de Riscal </td>
                      <td>
                        Marqués de Riscal </td>
                      <td>
                        Marqués de Riscal </td>
                      
                        <td>                    Marqués de Riscal</td>
                    </tr>
             
                  </tbody>
                </table>
               
              
              </div>


        </section>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>