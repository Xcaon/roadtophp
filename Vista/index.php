<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
</head>
<body>
<div id="container">
        <!-- CABECERO -->
    <header id="header">
        <div id="logo">
            <img src="assets/imagenes/camisa.png" alt="logo camiseta" />
            <a class="tituloPrin" href="index.php">
                Tienda de camisetas
            </a>    
        </div>
    </header>
        <!-- MENU, se usa la etiqueta nav para los menuis -->
    <nav class="cabecero">
        <ul class="listado">
            <li>
                <a href="#">Inicio</a>
            </li>
            <li>
                <a href="#">Categoría 1</a>
            </li>
            <li>
                <a href="#">Categoría 2</a>
            </li>
            <li>
                <a href="#">Categoría 3</a>
            </li>
            <li>
                <a href="#">Categoría 4</a>
            </li>

        </ul>
    </nav>

    <div id="content">
            <!-- BARRA LATERAL -->
        <aside id="lateral">
            <div id="login" class="block_aside">
                <h2 class="entrada">Entrar en la web</h2>
                <form action="#" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                    <input type="submit" value="Enviar">
                </form>
                    <div class="enlaces">
                    <a href="#">Mis pedidos</a>
                    <a href="#">Gestionar pedidos</a>
                    <a href="#">Gestionar categorías</a>
                    </div>
                </div>

        </aside>
            <!--CONTENIDO CENTRAL -->
            <div id="central">
                <div class="product">
                    <img src="assets/imagenes/camisa.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="#">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/imagenes/camisa.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="#">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/imagenes/camisa.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="#">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/imagenes/camisa.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="#">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/imagenes/camisa.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="#">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/imagenes/camisa.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="#">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/imagenes/camisa.png" />
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="#">Comprar</a>
                </div>

            </div>
    </div>
    <!-- PIE DE PAGINA -->
    <footer id="footer">
        <p>Desarrollado por Fernando &copy; <?=date('Y')?></p>
    </footer>
</div>
</body>
</html>