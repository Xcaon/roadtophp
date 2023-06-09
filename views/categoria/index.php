<h1>Gestionar categorias</h1>

<a href="<?= base_url ?>categoria/crear" class="button">
    Crear categoria
</a>

<div>
    <table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
        </tr>
        
    <?php while ( $cat = $categorias->fetch_object("Categoria")): ?>
        <tr>
            <td><?= $cat->getId();  ?></td>
            <td><?= $cat->getNombre();   ?></td>    
        </tr>
    <?php endwhile; ?>


    </table>
</div>