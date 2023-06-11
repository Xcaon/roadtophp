<h1>Gestionar Productos</h1>

<a href="<?= base_url ?>producto/crear" class="button">
    Crear producto
</a>



<?php if ( isset($_SESSION['producto']) && isset($_SESSION['producto']) == 'complete'  ): ?>
    <strong class="alert_green">El producto se ha creado correctamente</strong>
<?php elseif ( isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete' ): ?>
    <strong class="alert_red">El producto no se ha creado correctamente</strong>
    <?php endif; ?>
    <?php Utils::deleteSession('producto'); ?>

    <?php if ( isset($_SESSION['delete']) && isset($_SESSION['delete']) == 'complete'  ): ?>
    <strong class="alert_green">El producto se ha eliminado correctamente</strong>
<?php elseif ( isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete' ): ?>
    <strong class="alert_red">El producto no se ha eliminado correctamente</strong>
    <?php endif; ?>
    <?php Utils::deleteSession('delete'); ?>

    <?php if ( isset($_SESSION['edit']) && isset($_SESSION['edit']) == 'complete'  ): ?>
    <strong class="alert_green">El producto se ha editado correctamente</strong>
<?php elseif ( isset($_SESSION['edit']) && $_SESSION['edit'] != 'complete' ): ?>
    <strong class="alert_red">El producto no se ha editado correctamente</strong>
    <?php endif; ?>
    <?php Utils::deleteSession('edit'); ?>



<br>
<div>
    <table>
        <tr>
            <th>ID</th>
            <th>Categoría</th>
            <th>Nombre</th>
            <th>Descrpción</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Oferta</th>
            <th>Fecha</th>
            <th>Imagen</th>
            <th>ACCIONES</th>
        </tr>
        
    <?php while ( $pro = $productos->fetch_object("Producto")): ?>
        <tr>
            <td><?= $pro->getId();  ?></td>
            <td><?= $pro->getCategoria_id();   ?></td>    
            <td><?= $pro->getNombre();   ?></td>
            <td><?= $pro->getDescripcion();   ?></td> 
            <td><?= $pro->getPrecio();   ?></td> 
            <td><?= $pro->getStock();   ?></td> 
            <td><?= $pro->getOferta();   ?></td> 
            <td><?= $pro->getFecha();   ?></td> 
            <td><?= $pro->getImagen();   ?></td> 
            <td>
                <a href="<?= base_url ?>producto/editar&id=<?= $pro->getId(); ?>" class="button ">Editar</a>
                <a href="<?= base_url ?>producto/eliminar&id=<?= $pro->getId(); ?>" class="button button-eliminar">Eliminar</a>
            </td>
        </tr>
    <?php endwhile; ?>


    </table>
</div>