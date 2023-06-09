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
        </tr>
        
    <?php while ( $pro = $productos->fetch_object("Producto")): ?>
        <tr>
            <td><?= $pro->getId();  ?></td>
            <td><?= $pro->getCategoria_id();   ?></td>    
            <td><?= $pro->getDescripcion();   ?></td> 
            <td><?= $pro->getPrecio();   ?></td> 
            <td><?= $pro->getStock();   ?></td> 
            <td><?= $pro->getOferta();   ?></td> 
            <td><?= $pro->getFecha();   ?></td> 
            <td><?= $pro->getImagen();   ?></td> 
        </tr>
    <?php endwhile; ?>


    </table>
</div>