<?php
    include("conex.php");
    if(isset($_POST['registrar'])) {
        if(strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['edad']) >= 1 &&
        strlen($_POST['padecimiento']) >= 1 &&
        strlen($_POST['sala']) >= 1) {
            $nombre = trim($_POST['nombre']);
            $edad = trim($_POST['edad']);
            $padecimiento = trim($_POST['padecimiento']);
            $sala = trim($_POST['sala']);
            $fecha_reg = date("d/m/y");
            $consulta = "insert into pacientes(nombre,edad,padecimiento,sala,fecha_reg) values ('$nombre','$edad','$padecimiento','$sala','$fecha_reg')";
            $resultado = mysqli_query($conex,$consulta);
            if($resultado) {
                ?>
                <h3 class="ok">El paciente se ha registrado con exito</h3>
                <?php
            } else {
                ?>
                <h3 class="bad">Ocurrio un error</h3>
                <?php
            }
        }else {
            ?>
            <h3 class="bad">Rellenar todos los campos</h3>
            <?php
        }
    }
?>