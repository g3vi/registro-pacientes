<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="reg_style.css">
    <title>Registro de Pacientes</title>
</head>
<body>
    <img src="../img/logo-hospital.jpg" style="width: 100px: height: 130px; position: relative; left: 620px; top: 30px;">
    <h1 style="color: #017b43;position: relative;text-align: center; top: 40px;">Registro de Pacientes</h1>
    <form method="post">
        <input type="text" name="nombre" placeholder="Nombre del paciente">
        <input type="text" name="edad" placeholder="Edad">
        <input type="text" name="padecimiento" placeholder="Padecimeinto">
        <input type="text" name="sala" placeholder="Sala">
        <input type="submit" name="registrar" placeholder="Registrar">
    </form>
    <?php
    include("reg.php")
    ?>
</body>
</html>