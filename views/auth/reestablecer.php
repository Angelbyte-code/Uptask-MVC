<div class="contenedor reestablecer">
    <?php include_once __DIR__ . '/../templates/nombre-citio.php' ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Coloca tu nueva Contraceña</p>

        <form class="formulario" action="/" method="POST">

            <div class="campo">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    placeholder="Ingresa tu nueva Contraceña"
                    name="password"
                    require />
            </div>
            <input type="submit" class="boton" value="Guardar Cambios">
        </form>

        <div class="acciones">
            <a href="/crear">¿Aun no tienes cuenta? Obtener una.</a>
            <a href="/olvide">¿Olvidates tu Password?.</a>
        </div>
    </div> <!--Contenedor-sm-->
</div>