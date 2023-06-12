

<div id="content">
            <!-- BARRA LATERAL -->
            <aside id="lateral">
            <div id="login" class="block_aside">

                <?php if ( !isset($_SESSION['identity']) ): ?>
                <h2 class="entrada">Entrar en la web</h2>
                <form action="<?= base_url ?>usuario/login" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                    <input type="submit" value="Enviar">
                </form>
                <a href="<?= base_url ?>/usuario/registro">Registrate aqui</a>
                <?php else: ?>
                    <h3> <?= $_SESSION['identity']->nombre ?></h3>
                <?php endif; ?>
                
                    <div class="enlaces">
                   
                    <?php if ( isset($_SESSION['admin'] )): ?>
                        <a href="#">Mis pedidos</a>
                        <a href="#">Gestionar pedidos</a>
                        <a href="<?= base_url ?>categoria/index ">Gestionar categorías</a>
                        <a href="<?= base_url ?>producto/gestion ">Gestionar productos</a>
                    <?php endif; ?>

                    <?php if ( isset($_SESSION['identity']) ): ?>
                        <a href="<?= base_url ?>usuario/logout">Cerrar Sesion</a>
                    <?php endif; ?>
                    </div>
                </div>
                
        </aside>