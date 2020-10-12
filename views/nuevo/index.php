<?php require 'views/header.php'; ?>
<main class="main">
    <h1>Nuevo</h1>
    <form action="<?php echo constant('URL'); ?>nuevo/registrarAlumno" method="post">
        <label for="matricula">Matrícula</label>
        <input type="text" name="matricula" id="">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="">
        <input type="submit" value="registrar Nuevo alumno">
    </form>
</main>
<?php require 'views/footer.php'; ?>