<?php
include("conexion.php");
$message = $_GET["message"];
$sql = "select * from usuarios";
$resultado = mysqli_query($conexion, $sql)
    ?>

<hr class="hr">
<div class="alargar">
    <section class="container">
        <div class="row">
            <?php
            if ($message == 'Datos actualizados correctamente.') { ?>
                <div class="alert alert-success text-center" role="alert">
                    <?php echo $message; ?>
                </div>
                <?php
                $message = "";
            }
            ?>
            <h2 class="text-primary">Tabla de usuarios</h2>
        </div>
        <hr class="hr">
        <table class="table table-primary table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Perfil</th>
                    <th scope="col">Baja</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($filas = mysqli_fetch_assoc($resultado)) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $filas['id_usuario'] ?>
                        </th>
                        <td>
                            <?php echo $filas['nombre'] ?>
                        </td>
                        <td>
                            <?php echo $filas['apellido'] ?>
                        </td>
                        <td>
                            <?php echo $filas['email'] ?>
                        </td>
                        <td>
                            <?php echo $filas['usuario'] ?>
                        </td>
                        <?php if ($filas['perfil_id'] == 1): ?>
                            <td>
                                Administrador
                            </td>
                        <?php else: ?>
                            <td>
                                Cliente
                            </td>
                        <?php endif; ?>
                        <td>
                            <?php echo $filas['baja'] ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary p-1 text-white">
                                <a class="text-white" href="editar?id=<?php echo $filas['id_usuario']; ?>"><i
                                        class="fa-solid fa-user-pen fa-lg"></i></a>
                            </button>
                            <button type="button" class="btn btn-primary p-1">
                                <a href=""><i class="fa-solid fa-user-minus fa-lg text-light"></i></a>
                            </button>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php
        mysqli_close($conexion);
        ?>
    </section>
    <hr class="hr">