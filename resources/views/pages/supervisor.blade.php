<!DOCTYPE html>
<html lang="es">

<head>
    @extends('components.head')
    <title>Portal Supervisor</title>
    <link rel="stylesheet" href="../resources/css/ordenPedido.css">
    
</head>

<?php
include_once "../resources/model/conexion.php";

//Pedido
$sentencia = $bd->query("SELECT pedido.id_pedido, pedido.id_cliente, cliente.nombre, pedido.fecha_pedido, pedido.id_estado, estado.desc_estado 
FROM pedido 
INNER JOIN cliente ON pedido.id_cliente=cliente.id_cliente 
INNER JOIN estado ON pedido.id_estado=estado.id_estado
ORDER BY pedido.id_pedido ASC;");
$pedido = $sentencia->fetchAll(PDO::FETCH_OBJ);



/*Detalle Pedido


$sentencia = $bd->query("SELECT detalle_pedido.id_detalle,detalle_pedido.id_pedido ,detalle_pedido.id_articulo, articulo.desc_articulo, detalle_pedido.id_color, color.descripcion, detalle_pedido.cantidad_rollos_art, detalle_pedido.cantidad_rollos_rib, detalle_pedido.long_malla, detalle_pedido.ancho, detalle_pedido.precio_kg,detalle_pedido.fecha_entrega 
FROM detalle_pedido 
INNER JOIN articulo ON detalle_pedido.id_articulo=articulo.id_articulo 
INNER JOIN color ON detalle_pedido.id_color=color.id_color 
ORDER BY detalle_pedido.id_detalle ASC;");
$detalle_pedido = $sentencia->fetchAll(PDO::FETCH_OBJ);
*/
?>



<body style="background: #eee">
  

    @extends('components.Supervisor.headerSupervisor')

    @extends('components.Supervisor.sectionListSupervisor')
    
    
    <section class="option-selection" style="display: flex">


        <div class="form" method="POST" action="../resources/model/registrar_pedido.php">
            <h3>Orden de Producción</h3>
            <div class="form--type">






                <label class="lab">Cliente<span> * </span></label>
              
                <select class="in" name="txtCliente" >
                    <option value="">Seleccione:</option>
                    <?php
                    $query = $bd->prepare("SELECT * FROM cliente");
                    $query->execute();
                    $data = $query->fetchAll();

                    foreach ($data as $valores):
                    echo '<option value="'.$valores["id_cliente"].'">'.$valores["nombre"].'</option>';
                    endforeach;
                    ?>
                    </select>

                    <label class="lab">Fecha<span> * </span></label>
                    <input id="fecha" class="in" type="date" name="txtFecha" placeholder="" >

                    <label class="lab">Estado<span> * </span></label>
                    <select class="in" name="txtEstado" >
                        <option value="">Seleccione:</option>
                        <?php
                        $query = $bd->prepare("SELECT * FROM estado");
                        $query->execute();
                        $data = $query->fetchAll();
    
                        foreach ($data as $valores):
                        echo '<option value="'.$valores["id_estado"].'">'.$valores["desc_estado"].'</option>';
                        endforeach;
                        ?>

                        </select>     
                        <div class="d-grid">
                            <input type="hidden" name="oculto" value="1">
                            <input type="submit" class="btn btn-primary" value="Registrar" required>
                        </div>
                    
                        

            </div>

      

        </div>


        <div class="tareas">


            <form class="p-4" method="POST" action="../resources/model/registrar_detallePedido.php">

            <label class="lab">Articulo<span> * </span></label>


            <select class="in" name="txtArticulo" >
                <option value="">Seleccione:</option>
                <?php
                $query = $bd->prepare("SELECT * FROM articulo");
                $query->execute();
                $data = $query->fetchAll();

                foreach ($data as $valores):
                echo '<option value="'.$valores["id_articulo"].'">'.$valores["desc_articulo"].'</option>';
                endforeach;
                ?>
                </select>

                <label class="lab">Color<span> * </span></label>
<br>
                <select class="in" name="txtColor" ><br>
                    <option value="">Seleccione:</option>
                    <?php
                    $query = $bd->prepare("SELECT * FROM color");
                    $query->execute();
                    $data = $query->fetchAll();

                    foreach ($data as $valores):
                    echo '<option value="'.$valores["id_color"].'">'.$valores["descripcion"].'</option>';
                    endforeach;
                    ?>
                    </select>
<br>
                    
            <label class="lab">Rollos<span> * </span></label>
<br>
            <input type="number" class="in" name="txtRollos" autofocus required>
            <br>
            <label class="lab">Rollos Rib<span> * </span></label><br>
            <input type="number" class="in" name="txtRib"  required><br>

               
            <label class="lab">Longitud Malla<span> * </span></label><br>
            <input type="number" step="any" class="form-control" name="txtMalla"  required>

            <label class="lab">Ancho<span> * </span></label>
            <input type="number" class="form-control" name="txtAncho"  required>

            <label class="lab">Precio<span> * </span></label>
            <input type="number" step="any" class="form-control" name="txtPrecio"  required>

            <label class="lab">Fecha Entrega Est<span> * </span></label>
            <input type="date" class="form-control" name="txtFecha"  required>

<br>
            <div class="d-grid">
                <input type="hidden" name="idPedido" value="1">
                <input type="submit" class="btn btn-primary" value="Registrar" required>
            </div>

            </form>


        </div>

     </section>
    
<script>

document.getElementById('fecha').valueAsDate = new Date();

</script>

</body>
</html>