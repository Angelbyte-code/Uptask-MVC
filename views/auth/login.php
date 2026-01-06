<div class="contenedor">
    <h1>UpTask</h1>
    <p>Crea y Administra tus Projectos</p>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Inciar Sesión</p>

        <form action="/" method="post">
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
                <label for="pass">Password</label>
                <input
                    type="password"
                    id="pass"
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