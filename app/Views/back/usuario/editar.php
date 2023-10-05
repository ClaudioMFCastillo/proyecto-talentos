<?php
include("conexion.php");
?>

<div class="alargar">
    <hr class="hr" />

    <?php if (isset($_POST['enviar'])) {
        //si se presiona el botón de enviar
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $baja = $_POST['baja'];

        //actualizar valores
        $sql = "update usuarios set nombre='" . $nombre . "',apellido='" . $apellido . "',email='" . $email . "',usuario='" . $usuario . "',baja='" . $baja . "' where id_usuario='" . $id . "'";
        $resultado = mysqli_query($conexion, $sql);
        if ($resultado) {
            $message = "";
            $message = "Datos actualizados correctamente.";
            //echo "<script language='Javascript'>
            //location.assign('editar_usuarios');
            //</script>";
            echo "<script>window.location.href='editar_usuarios?message=$message';</script>";
        }
        mysqli_close($conexion);

    } else {
        //si no se presiona el botón de enviar
        $id = $_GET['id'];
        $sql = "select * from usuarios where id_usuario='" . $id . "'";
        $resultado = mysqli_query($conexion, $sql);

        $fila = mysqli_fetch_assoc($resultado);
        $nombre = $fila['nombre'];
        $apellido = $fila['apellido'];
        $email = $fila['email'];
        $usuario = $fila['usuario'];
        $perfil_id = $fila['perfil_id'];
        $baja = $fila['baja'];

        mysqli_close($conexion);
        ?>
        <section>
            <div class="container text-bg-primary p-3 rounded-3">
                <p class="text-center h3 fw-bold mb-3 mx-1 mx-md-4 mt-4">Editar</p>

                <form method="post" class="mx-1 mt-2 mx-md-4">
                    <div class="d-flex flex-row align-items-center mb-3">
                        <i class="fa-solid fa-signature fa-xl me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>">
                            <label class="form-label" for="nombre">Nombre</label>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-3">
                        <i class="fa-solid fa-signature fa-xl me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <input type="text" name="apellido" class="form-control" value="<?php echo $apellido; ?>">
                            <label class="form-label" for="apellido">Apellido</label>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-3">
                        <i class="fa-solid fa-envelope fa-xl me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                            <label class="form-label" for="email">Email</label>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-3">
                        <i class="fa-solid fa-user fa-xl me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <input type="text" name="usuario" class="form-control" value="<?php echo $usuario; ?>">
                            <label class="form-label" for="usuario">Usuario</label>
                        </div>
                    </div>

                    <?php if ($perfil_id == 2) { ?>
                        <div class="d-flex flex-row align-items-center">
                            <i class="fa-solid fa-ghost fa-xl me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="text" name="baja" class="form-control" value="<?php echo $baja; ?>">
                                <label class="form-label" for="baja">Dado de baja</label>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="d-flex gap-2 justify-content-end">
                        <input type="submit" name="enviar" value="Guardar cambios" class="btn btn-info">
                        <a href="<?php echo base_url('editar_usuarios'); ?>" class="btn btn-secondary role="
                            button"">Cancelar</a>
                    </div>
                </form>
                <?php
    }
    ?>
        </div>
    </section>
    <hr class="hr">