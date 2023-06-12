

<?php if (isset($categoria)): ?>
    <h1><?= $categoria->nombre; ?> </h1>
    <?php while($pro = $productos->fetch_object("Producto")): ?>
    
            <!--CONTENIDO CENTRAL -->
            <div id="central">
                <div class="product">
                    <?php if ( $pro->getImagen() != null): ?>
                        <img src="<?= base_url ?>uploads/images/<?= $pro->getImagen(); ?>" />
                    <?php else: ?>
                        <img src="<?= base_url ?>assets/imagenes/camisa.png" />
                    <?php endif; ?>
                    <h2><?= $pro->getNombre(); ?></h2>
                    <p> <?= $pro->getPrecio(); ?></p>
                    <a href="#">Comprar</a>
                </div>
            </div>
             <!-- Div content -->
   
    <?php endwhile; ?>
<?php else: ?>
    <h1> La categoría no existe</h1>    
<?php endif; ?>