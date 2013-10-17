<form action="" method="post">
    <h2>Información personal:</h2>
    <p><label>Nombre:</label>
        <input type="text" name="nombre" /></p>
    <p><label >Apellido Paterno:</label>
       <input type="text" name="paterno" /></p>
    <p><label>Apellido Materno:</label>
        <input type="text" name="materno" /></p>
    <p><label>Carnet de Identidad:</label>
        <input type="text" name="ci" /></p>
    <p><label>Correo Electrónico:</label>
        <input type="text" name="email" /></p>
    <p><label>Genero:</label>
        <select name="genero">
            <option>F</option>
            <option>M</option>
        </select></p>
    <p><label>Teléfono:</label>
        <input type="text" name="telefono" /></p>
    <p><label>Dirección</label>
        <input type="text" name="direccion" /></p>
    <p><label>Colegio:</label>
        <select name="colegio">
            <option></option>
            <option>LOYOLA</option>
            <option>CESFA</option>
            <option>POBEDA</option>
        </select></p>
    <p><label>Tipo Usuario:</label>
        <select name="tipo">
            <option>OLIMPISTA</option>
            <option>COMITE ACADEMICO</option>
            <option>ADMINISTRADOR</option>
        </select></p>

    <h2>Registro de cuenta</h2>
    <p><label>Usuario:</label>
        <input type="text" name="usuario" /></p>
    <p><label>Contraseña</label>
        <input type="password" name="contrasena" /></p>
    <p><label>Repetir contraseña</label>
        <input type="password" name="repcontrasena" /></p>
    <p><label>Codigo verificación:</label>
        <input name="codigo" placeholder="Ingresar si no es olimpista" type="text" /></p>
    <p class="submit"><input type="submit" value="Registrar Usuario"/></p>
</form>
