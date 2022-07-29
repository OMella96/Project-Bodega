<!doctype html>
<html lang="es">

<head>
    <title>Solicitudes de Estudiantes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/footers/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen">
</head>

<body>
    <!-- Navigation-->
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="imagenes/descarga.png" width="55" height="55" style="padding: 3px;  float: left; margin-left:5px;" />
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand"  style="font-size:28px;">Liceo El LLano</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="https://www.corpirque.cl/educacion/escuelas-y-liceos/">Pagina Web</a></li>     
                </ul>   
            </div>
            <div class="text-end">
          <button type="button" class="btn btn-warning"><a href='index.php'>Ingresar</a></button>
        </div>
        </div>
    </nav>
    <form action="solicitudes.php" method="POST">
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        Reponer
                    </div>
                    <form id="loginform">
                        Nombre Y Curso<input type="text" name="estudiante" required>
                        Rut<input type="text" name="rut" required>          
                        Fecha<input type="datetime-local" name="fecha" required>
                        <abbr title="Ejemplo de Solicitud :
 1 Protoboard, 
 2 Cascos De Seguridad,
 Cables Conectores Hembra,
 Estaño">Materiales : <br/><textarea name="materiales"> </textarea></abbr>
                        <button type="submit" name="btnSubmit1" value="1">Solicitar</button>
                    </form>
                </div>
            </div>
        </div>
    </form>


    <?php
    $mysqli = new mysqli("localhost", "root", "", "pañol");
    $result = $mysqli->query("select id, producto, cantidad from inventario");
    ?>
    <div id="tabla">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo '<tr><td>' . $row["id"] . '</td>';
                    echo '<td>' . $row["producto"] . '</td>';
                    echo '<td>' . $row["cantidad"] . '</td>';
                }
                mysqli_free_result($result);
                ?>
            </tbody>
        </table>
    </div>

</body>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>