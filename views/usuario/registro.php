<h1>Registrarse<h1>
<br>
<form action="<?=base_url?>usuario/save" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required/>

    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" required/>

    <label for="email">Email</label>
    <input type="text" name="email" required/>

    <label for="password">Password</label>
    <input type="text" name="password" required/>

    <label for="rol">Rol</label>
    <input type="text" name="rol" required/>

    <label for="imagen">Imagen</label>
    <input type="text" name="imagen" required/>

    <input type="submit" value="Registrarse">

</form>