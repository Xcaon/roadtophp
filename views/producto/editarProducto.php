<?php 
if ( isset($_GET['id']) ): 
    $pro = new Producto();
    $pro = Utils::getOneProduct($_GET['id']); 
    // Imprimimos el objeto
    while ($prod = $pro->fetch_object("Producto")) :
    
   ?>
<form action="<?=base_url?>producto/edit" method="POST" enctype="multipart/form-data">

    <label for="nombre">Id</label>
    <input type="text" name="id" value="<?= $prod->getId(); ?>">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="<?= $prod->getNombre(); ?>">
    <br>
    <label for="descripcion">Descripción</label>
    <textarea name="descripcion"><?= $prod->getDescripcion(); ?></textarea>
    <br>
    <label for="precio">Precio</label>
    <input type="text" name="precio" value="<?= $prod->getPrecio(); ?>">
    <br>
    <label for="stock">Stock</label>
    <input type="text" name="stock" value="<?= $prod->getStock(); ?>">
    <br>
    <label for="oferta">Oferta</label>
    <input type="text" name="oferta" value="<?= $prod->getOferta(); ?>">
    <br>
    <label for="fecha">Fecha</label>
    <input type="date" name="fecha" value="<?= $prod->getFecha(); ?>">



    <label for="categoria">Categoría</label>
    <select name="categoria">
    <?php $categorias = Utils::showCategorias(); ?>
    <?php while ( $cat = $categorias->fetch_object("Categoria")) : ?>
        <option value="<?= $cat->getId();  ?>">
            <?= $cat->getNombre(); ?>
        </option>
        <?php endwhile; ?>
    </select>
        <br>

    <label for="Imagen">Imagen</label>
    <p> Nombre archivo seleccionado: <?= $prod->getImagen(); ?> </p>
    <img src="<?= base_url?>uploads/images/<?=$prod->getImagen();?>" width="250" height="250" />
    <input type="file" name="imagen" >
<?php endwhile; ?>
<?php endif; ?>

    <input type="submit" value="Editar Producto">


</form>
<?php


