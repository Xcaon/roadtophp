

<form action="<?=base_url?>producto/save" method="POST">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    <br>
    <label for="descripcion">Descripción</label>
    <textarea name="descripcion"></textarea>
    <br>
    <label for="precio">Precio</label>
    <input type="text" name="precio">
    <br>
    <label for="stock">Stock</label>
    <input type="text" name="stock">
    <br>
    <label for="oferta">Oferta</label>
    <input type="text" name="oferta">
    <br>
    <label for="fecha">Fecha</label>
    <input type="date" name="fecha">

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
    <input type="file" name="imagen">

    <input type="submit" value="Guardar">

    <?php echo $_SESSION['producto']; ?>

</form>
<?php


