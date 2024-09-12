<?php
    $servername = "127.0.0.1";
    $database = "AllSports";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion
    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Sports</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anek+Devanagari&family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body class="scrollbody">
  <div class="cubrir">
    <img src="img/logo.svg" alt="logo">
  </div>
  <header>
    <a href="/index.php" class="mnic"><img src="img/bx-menu.svg" alt="logo"></a>
    <a href="/index.php"><img src="img/logo.svg" alt="logo"></a>
    <div><a href="/futbol.php" class="link">Futbol</a></div>
    <div><a href="" class="link">Basquet</a></div>
    <div><a href="" class="link">F1</a></div>
    <div><a href="" class="link">MMA</a></div>
    <div><a href="/atletas.php" class="link">Atletas</a></div>
    <div><a href="" class="link">Medallero</a></div>
  </header>
<div class="asideynews">
  <aside>
    <div class="medallero">
      <p>Medallero 2024</p>
      <table>
            <thead>
                <tr class="futbolhead">
                    <th> # | </th>
                    <th> 🌎 | </th>
                    <th>🟡 | </th>
                    <th>⚪ | </th>
                    <th>🟤 | </th>
                    <th>⭕ | </th>
                </tr>
            </thead>
            <tbody>
                <?php 
        /*$resultados = mysqli_query($conexion,"select * from `Futbol-equipos` order by `Partidos-ganados` desc,`Partidos-empatados` desc,`Partidos-perdidos` desc;");
        $tmpCount = 1;
        while($fila=mysqli_fetch_assoc($resultados)){ // recorremos cada fila obtenida y mostramos el nombre y el apellido
           */?>
                <tr>
                    <th><?php echo "ㅤ   ".$tmpCount?></th>
                    <th>h</th>
                    
                    <th><?php echo $fila['Partidos-ganados']?></th>
                    <th><?php echo $fila['Partidos-empatados']?></th>
                    <th><?php echo $fila['Partidos-perdidos']?></th>
                    <th><?php echo $fila['Partidos-ganados']+$fila['Partidos-empatados']+$fila['Partidos-perdidos']?></th>
                </tr>
                <?php
        /*$tmpCount ++; }*/
        ?>
        </tbody>
        </table>
    </div>
  </aside>
  <div id="news-section">
    <div class="padding">
      <?php 
        $resultados = mysqli_query($conexion,"select idnoticias, img, titulo from noticias;");
            
        while($fila=mysqli_fetch_assoc($resultados)){ // recorremos cada fila obtenida y mostramos el nombre y el apellido
          ?>
      <div class="news">
        <img src="img/<?php echo $fila['img']?>" alt="" class="nimg">
        <a href="noticia.php?id=<?php echo $fila['idnoticias']?>"><h2 class="ntitle"><?php echo $fila['titulo']?></h2></a>
      </div>
      <?php
        }
        ?>
      <!-- <div class="news">
          <img src="img/jjnoti.webp" alt="" class="nimg">
          <h2 class="ntitle">Jon Jones CAE en P4P después de ser ARRESTADO (por violencia doméstica)</h2>
        </div>
        <div class="news">
          <img src="img/FRANCELLAJUEGOSODELIMFGICOSD.jpg" alt="" class="nimg">
          <h2 class="ntitle">Francella a participar de los Juegos Olímpicos Beijing 2038</h2>
        </div>
        <div class="news">
          <img src="img/jeffrey-epstein-fue-condenado_-por-una-red-de-55JTERW4LVHEZF6ZYXAN6AFZUU.avif" alt="" class="nimg">
          <h2 class="ntitle">Epstein sube en el ranking de CP</h2>
        </div>
        <div class="news">
        <img src="img/16866445189149.jpg" alt="" class="nimg">
        <h2 class="ntitle">La velada del año termino en tragedia historica</h2>
        </div>-->
    </div>
  </div>
  <aside>
    <div class="imgad">
    <img src="img/images.png" alt="">
    </div>
  </aside>
</div>
  <footer>
    <p>All Sports SRL - Copyright 2024 MIRA EL ENCARGADO EN DISNEUPUSL PUNTO COM AHORA O TE MATAMOS MANDAMOS U SICARIO A
      TU CASA</p>
  </footer>
</body>

</html>