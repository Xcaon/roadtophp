
    <h1> Algunos de nuestros productos</h1>
    
    <?php while($pro = $productos->fetch_object("Producto")): ?>
        <!-- <?php var_dump($pro->getNombre()); ?> -->
            <!--CONTENIDO CENTRAL -->
            <div id="central">
                <div class="product">
                    <?php if ( $pro->getImagen() != null): ?>
                        <img src="<?php base_url ?>uploads/images/<?= $pro->getImagen(); ?>" />
                    <?php else: ?>
                        <img src="assets/imagenes/camisa.png" />
                    <?php endif; ?>
                    <h2><?= $pro->getNombre(); ?></h2>
                    <p> <?= $pro->getPrecio(); ?></p>
                    <a href="#">Comprar</a>
                </div>
            </div>
             <!-- Div content -->
   
    <?php endwhile; ?>

    <?php echo "hola" ?>
   