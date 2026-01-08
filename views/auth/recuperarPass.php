<div class="contenedor olvide">

    <?php include_once __DIR__ . '/../templates/nombre-citio.php' ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Recuperar Contraseña</p>

        <form class="formulario" action="/" method="POST">
         
            <div class="campo">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    placeholder="Ingresa tu Email"
                    name="email"
                    require />
            </div>
            <input type="submit" class="boton" value="Enviar">
        </form>

        <div class="acciones">
            <a href="/">¿Tienes Cuenta? Inicar Sesión.</a>
            <a href="/olvide">¿No tienes cuenta? Crea una.</a>
        </div>
    </div> <!--Contenedor-sm-->
</div>