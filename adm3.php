<!doctype html>
<html lang="es">
  <head>
    <title>Pañol</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/footers/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css" >
  </head>
  <body>
  <body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="imagenes/descarga.png" width="55" height="55" style="padding: 3px;  float: left; margin-left:5px;" />
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand"  style="font-size:28px;">Liceo El LLano</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">  
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="adm.php">Inventario</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="adm2.php">Solicitudes</a></li>  
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="adm3.php">ReponerStock</a></li>  
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="adm5.php">Agenda</a></li>
                </ul>   
                <div class="text-end">
          <button type="button" class="btn btn-warning"><?php
session_start();
$sesion = $_SESSION['username'];
  echo "$sesion</br>";
    echo "<a href='logica/salir.php'>Salir</a>";
?> </button>
        </div>
            </div>
        </div>
    </nav>
    <form action="reponer.php" method="POST">
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        Reponer
                    </div>
                    <form id="loginform">
                    Id<input type="text" name="id" id="uno" disabled="" required>
                        Producto<input type="text" name="producto" id="dos" required>
                        Cantidad<input type="number" name="cantidad" id="tres" required>
                                          
                        <button type="submit" name="btnSubmit1" value="1" onclick="activarcaja2()">Agregar</button>
                        <button type="submit" name="btnSubmit2" value="2" onclick="activarcaja3()">Modificar</button>
                        <button type="submit" name="btnSubmit3" value="3" onclick="activarcaja()">Eliminar</button>
                    </form>

                    <script type="text/javascript">
                        function activarcaja(){
                            document.getElementById('uno').disabled=false
                            document.getElementById('dos').disabled=true
                            document.getElementById('tres').disabled=true
                            
                        }
                        function activarcaja2(){
                            document.getElementById('uno').disabled=true
                            document.getElementById('dos').disabled=false
                            document.getElementById('tres').disabled=false
                            
                        }
                        function activarcaja3(){
                            document.getElementById('uno').disabled=false
                            document.getElementById('dos').disabled=false
                            document.getElementById('tres').disabled=false
                            
                        }

                    </script>
                   
                </div>
                <div class="inferior">
                    <a href="adm.php">Volver</a>
                </div>
            </div>
        </div>
    </form>
    <?php
               $mysqli= new mysqli("localhost","root","", "pañol");
               $result=$mysqli->query("select id, producto, cantidad from reponer");
               ?>
        <div id="tabla">
        <table>
            <thead>
            <tr>
            <th>Id</th><th>Producto</th><th>Cantidad</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($row=$result->fetch_assoc()){
                echo '<tr><td>'.$row["id"].'</td>';
                echo '<td>'.$row["producto"].'</td>';
                echo '<td>'.$row["cantidad"].'</td>';            
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