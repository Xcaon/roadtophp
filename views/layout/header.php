<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url ?>views/assets/css/styles.css" />
</head>
<body>
<div id="container">
        <!-- CABECERO -->
    <header id="header">
        <div id="logo">
            <img src="<?= base_url ?>/views/assets/imagenes/percha.png" alt="logo camiseta" />
            <a class="tituloPrin" href="index.php">
                Tienda de camisetas
            </a>    
        </div>
    </header>
    <?php $categorias = Utils::showCategorias(); ?>
    <!-- MENU, se usa la etiqueta nav para los menuis -->
    <nav class="cabecero">
        <ul class="listado">
        <li>
                <a href="#">Inicio</a>
        </li>
        <?php while ($cat = $categorias->fetch_object('Categoria') ) : ?>
            <li>
                <a href="#"><?= $cat->getNombre(); ?></a>
        </li>
        <?php endwhile; ?>

        </ul>
    </nav>