<!DOCTYPE html>
<html lang="es">

<head>
    @extends('components.head')
    <link rel="stylesheet" href="../resources/css/gestionTelas.css">
    <title>Portal Supervisor</title>
    
</head>


<?php
include_once "../resources/model/conexion.php";
$sentencia = $bd->query("SELECT articulo.id_articulo, articulo.id_tipo_tela, tipo_tela.desc_tipo_tela, articulo.id_hilo, hilo.desc_hilo,articulo.desc_articulo, articulo.longitud_malla, articulo.ancho
FROM articulo
INNER JOIN tipo_tela ON articulo.id_tipo_tela=tipo_tela.id_tipo_tela
INNER JOIN hilo ON articulo.id_hilo=hilo.id_hilo
ORDER BY articulo.id_articulo ASC;");
$articulo = $sentencia->fetchAll(PDO::FETCH_OBJ);


?>


<body style="background: #eee">
  


    @extends('components.Supervisor.headerSupervisor')

    @extends('components.Supervisor.sectionListSupervisor')
    


    
    <!--Gestion de telas-->
        <section class="option-selection" >


            <form class="p-4" method="POST" action="registrar_articulo.php">
                    
                <div class="mb-3">
                <label class="form-label">Tipo tela</label>
                <select class="form-control" name="txtTipoTela" >
                <option value="">Seleccione:</option>
                <?php
                $query = $bd->prepare("SELECT * FROM tipo_tela");
                $query->execute();
                $data = $query->fetchAll();

                foreach ($data as $valores):
                echo '<option value="'.$valores["id_tipo_tela"].'">'.$valores["desc_tipo_tela"].'</option>';
                endforeach;
                ?>
                </select>
                </div> 

               
                <div class="mb-3">
                <label class="form-label">Hilo</label>
                <select class="form-control" name="txtHilo" >
                <option value="">Seleccione:</option>
                <?php
                $query = $bd->prepare("SELECT * FROM hilo");
                $query->execute();
                $data = $query->fetchAll();

                foreach ($data as $valores):
                echo '<option value="'.$valores["id_hilo"].'">'.$valores["desc_hilo"].'</option>';
                endforeach;
                ?>
                </select>
                </div> 

                <div class="mb-3">
                    <label class="form-label">Desc. Articulo</label>
                    <input type="text" class="form-control" name="txtDescArticulo" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Long. Malla</label>
                    <input type="number" step="any" class="form-control" name="txtLongMalla" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ancho</label>
                    <input type="number" step="any" class="form-control" name="txtAncho" required>
                </div>
                
                                
                <div class="d-grid">
                    <input type="hidden" name="oculto" value="1">
                    <input type="submit" class="btn btn-primary" value="Registrar" required>
                </div>
            </form>
 
        
        </section>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>