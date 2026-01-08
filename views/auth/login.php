<div class="contenedor login">
    <?php include_once __DIR__ . '/../templates/nombre-citio.php' ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Inciar Sesión</p>

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
            <div class="campo">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    placeholder="Ingresa tu Password"
                    name="password"
                    require />
            </div>
            <input type="submit" class="boton" value="Iniciar Sesión">
        </form>

        <div class="acciones">
            <a href="/crear">¿Aun no tienes cuenta? Obtener una.</a>
            <a href="/olvide">¿Olvidates tu Password?.</a>
        </div>
    </div> <!--Contenedor-sm-->
</div>