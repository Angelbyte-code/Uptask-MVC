<div class="contenedor crear">

    <?php include_once __DIR__ . '/../templates/nombre-citio.php' ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Crea tu cuenta en UpTask</p>

        <form class="formulario" action="/" method="POST">
            <div class="campo">
                <label for="name">Nombre</label>
                <input
                    type="name"
                    id="name"
                    placeholder="Ingresa tu Nombre"
                    name="name"
                    require />
            </div>
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
            <div class="campo">
                <label for="password2">Confirmar Password</label>
                <input
                    type="password"
                    id="password2"
                    placeholder="Confirma Tu password"
                    name="password2"
                    require />
            </div>
            <input type="submit" class="boton" value="Iniciar Sesión">
        </form>

        <div class="acciones">
            <a href="/">¿Tienes Cuenta? Inicar Sesión.</a>
            <a href="/olvide">¿Olvidates tu Password?.</a>
        </div>
    </div> <!--Contenedor-sm-->
</div>