<?php
    $servername = "127.0.0.1";
    $database = "AllSports";
    $username = "alumno";
    $password = "alumnoipm";

    function country2flag(string $countryCode): string
{
    return (string) preg_replace_callback(
        '/./',
        static fn (array $letter) => mb_chr(ord($letter[0]) % 32 + 0x1F1E5),
        $countryCode
    );
}
    
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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Devanagari&family=Open+Sans&display=swap"
        rel="stylesheet">

</head>

<body>
<header>
    <button class="hamburger mnic">
      <img src="img/bx-menu.svg" alt="logo" class="menuIcon">
      <img src="img/close.svg" alt="logo" class="closeIcon">
    </button>
    <a href="/index.php"><img src="img/logo.svg" alt="logo"></a>
    <div class="menunav1">
      <div class="divlink futbolm"><p>Futbol</p></div>
      <div class="divlink tenism"><p>Tennis</p></div>
      <div class="divlink f1m"><p>F1</p></div>
      <div class="divlink mmam"><p>MMA</p></div>
      <div class="divlink"><p>Medallero</p></div>
    </div>
  </header>
  <div class="menunav3">
    <div class="subfutbolm subms hh">
      <div class="divlink subm ligasm">
        <p>Ligas</p>
      </div>
      <div class="subligasm subms">
        <div class="divlink submm"><a href="futbol.php?lc=La%20Liga">Liga Española</a></div>
        <div class="divlink submm"><a href="futbol.php?lc=Premier%20League">Liga Inglesa</a></div>
        <div class="divlink submm"><a href="futbol.php?lc=Ligue%201">Liga Francesa</a></div>
        <div class="divlink submm"><a href="futbol.php?lc=Serie%20A">Liga Italiana</a></div>
        <div class="divlink submm"><a href="futbol.php?lc=Bundesliga">Liga Alemana</a></div>
      </div>
    </div>
    <div class="subtenism subms hh">
      <div class="divlink subm"><a href="">Puntos</a></div>
      <div class="divlink subm singlem">
        <p>Single</p>
      </div>
      <div class="subsinglem subms">
        <div class="divlink submm"><a href="tennis.php?ft=PTS&sd=s" class="">Mas titulos</a></div>
        <div class="divlink submm"><a href="tennis.php?ft=ganados&sd=s" class="">Mas ganados</a></div>
        <div class="divlink submm"><a href="tennis.php?ft=perdidos&sd=s" class="">Mas perdidos</a></div>
      </div>
      <div class="divlink subm doblem">
        <p>Dobles</p>
      </div>
      <div class="subdoblem subms">
        <div class="divlink submm"><a href="tennis.php?ft=PTS&sd=d" class="">Mas titulos</a></div>
        <div class="divlink submm"><a href="tennis.php?ft=ganados&sd=d" class="">Mas ganados</a></div>
        <div class="divlink submm"><a href="tennis.php?ft=perdidos&sd=d" class="">Mas perdidos</a></div>
      </div>
    </div>
    <div class="subf1m subms hh">
      <div class="divlink subm"><a href="/F1.php">Pilotos</a></div>
      <div class="divlink subm"><a href="/F1.php">Constructoras</a></div>
    </div>
    <div class="submmam subms hh">
      <div class="divlink subm divisionesm">
        <p>Divisiones</p>
      </div>
      <div class="subdivisionesm subms">
        <div class="divlink submm"><a href="atletas.php?dv=PfP">Libra por Libra</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=Flyweight">Peso Mosca</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=Bantamweight">Peso Gallo</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=Featherweight">Peso Pluma</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=Lightweight">Peso Ligero</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=Welterweight">Peso Welter</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=Middleweight">Peso Medio</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=Light Heavyweight">Peso Semipesado</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=Heavyweight">Peso Pesado</a></div>
      </div>
      <div class="divlink subm mayoresm">
        <p>Mayores</p>
      </div>
      <div class="submayoresm subms">
        <div class="divlink submm"><a href="atletas.php?dv=His&sel=peleas">Más Peleas</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=His&sel=victorias">Más Victorias</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=His&sel=derrotas">Más Derrotas</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=His&sel=victorias_titulo">Más Victorias Titulo</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=His&sel=Finalizaciones">Más Finalizaciones</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=His&sel=KO">Más KO</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=His&sel=SUM">Más SUM</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=His&sel=Desiciones">Más Decisiones</a></div>
      </div>
    </div>
  </div>
  <div class="menunav2">
    <div class="divlink futbolm">
      <p>Futbol</p>
    </div>
    <div class="subfutbolm subms">
      <div class="divlink subm ligasm">
        <p>Ligas</p>
      </div>
      <div class="subligasm subms">
        <div class="divlink submm"><a href="futbol.php?lc=La%20Liga">Liga Española</a></div>
        <div class="divlink submm"><a href="futbol.php?lc=Premier%20League">Liga Inglesa</a></div>
        <div class="divlink submm"><a href="futbol.php?lc=Ligue%201">Liga Francesa</a></div>
        <div class="divlink submm"><a href="futbol.php?lc=Serie%20A">Liga Italiana</a></div>
        <div class="divlink submm"><a href="futbol.php?lc=Bundesliga">Liga Alemana</a></div>
      </div>
    </div>
    <div class="divlink tenism">
      <p>Tenis</p>
    </div>
    <div class="subtenism subms">
      <div class="divlink subm"><a href="">Puntos</a></div>
      <div class="divlink subm singlem">
        <p>Single</p>
      </div>
      <div class="subsinglem subms">
        <div class="divlink submm"><a href="tennis.php?ft=PTS&sd=s" class="">Mas titulos</a></div>
        <div class="divlink submm"><a href="tennis.php?ft=ganados&sd=s" class="">Mas ganados</a></div>
        <div class="divlink submm"><a href="tennis.php?ft=perdidos&sd=s" class="">Mas perdidos</a></div>
      </div>
      <div class="divlink subm doblem">
        <p>Dobles</p>
      </div>
      <div class="subdoblem subms">
        <div class="divlink submm"><a href="tennis.php?ft=PTS&sd=d" class="">Mas titulos</a></div>
        <div class="divlink submm"><a href="tennis.php?ft=ganados&sd=d" class="">Mas ganados</a></div>
        <div class="divlink submm"><a href="tennis.php?ft=perdidos&sd=d" class="">Mas perdidos</a></div>
      </div>
    </div>
    <div class="divlink f1m">
      <p>F1</p>
    </div>
    <div class="subf1m subms">
      <div class="divlink subm"><a href="/F1.php">Pilotos</a></div>
      <div class="divlink subm"><a href="/F1c.php">Constructoras</a></div>
    </div>
    <div class="divlink mmam">
      <p>MMA</p>
    </div>
    <div class="submmam subms">
      <div class="divlink subm divisionesm">
        <p>Divisiones</p>
      </div>
      <div class="subdivisionesm subms">
        <div class="divlink submm"><a href="atletas.php?dv=PfP">Libra por Libra</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=Flyweight">Peso Mosca</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=Bantamweight">Peso Gallo</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=Featherweight">Peso Pluma</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=Lightweight">Peso Ligero</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=Welterweight">Peso Welter</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=Middleweight">Peso Medio</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=Light Heavyweight">Peso Semipesado</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=Heavyweight">Peso Pesado</a></div>
      </div>
      <div class="divlink subm mayoresm">
        <p>Mayores</p>
      </div>
      <div class="submayoresm subms">
        <div class="divlink submm"><a href="atletas.php?dv=His&sel=peleas">Más Peleas</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=His&sel=victorias">Más Victorias</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=His&sel=derrotas">Más Derrotas</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=His&sel=victorias_titulo">Más Victorias Titulo</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=His&sel=Finalizaciones">Más Finalizaciones</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=His&sel=KO">Más KO</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=His&sel=SUM">Más SUM</a></div>
        <div class="divlink submm"><a href="atletas.php?dv=His&sel=Desiciones">Más Decisiones</a></div>
      </div>
    </div>
    <div class="divlink"><a href="medallero.php" class="link">Medallero</a></div>
  </div>
    <section class="tmain">
        <div class="table_wrapper">
        <table>
            <thead>
                <tr class="futbolhead">
                    <th> # </th>
                    <th>🌎</th>
                    <th><a href="?ft=Oro">🟡</a></th>
                    <th><a href="?ft=Plata">⚪</a></th>
                    <th><a href="?ft=Bronce">🟤</a></th>
                    <th><a href="?ft=Sum">⭕</a></th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $query = "SELECT p.Nombre AS Pais, COUNT(CASE WHEN m.Tipo = 1 THEN 1 END) AS Oro, COUNT(CASE WHEN m.Tipo = 2 THEN 1 END) AS Plata, COUNT(CASE WHEN m.Tipo = 3 THEN 1 END) AS Bronce
            FROM Pais p JOIN Atleta a ON p.idPais = a.Pais_idPais JOIN Medalla m ON a.idAtleta = m.Atleta_idAtleta GROUP BY p.Nombre
            ORDER BY Oro DESC, Plata DESC, Bronce DESC;";
            $query2 = "SELECT p.Nombre AS Pais, COUNT(CASE WHEN m.Tipo = 1 THEN 1 END) AS Oro, COUNT(CASE WHEN m.Tipo = 2 THEN 1 END) AS Plata, COUNT(CASE WHEN m.Tipo = 3 THEN 1 END) AS Bronce
            FROM Pais p JOIN Atleta a ON p.idPais = a.Pais_idPais JOIN Medalla m ON a.idAtleta = m.Atleta_idAtleta GROUP BY p.Nombre
            ORDER BY Plata DESC, Oro DESC, Bronce DESC;";
            $query3 = "SELECT p.Nombre AS Pais, COUNT(CASE WHEN m.Tipo = 1 THEN 1 END) AS Oro, COUNT(CASE WHEN m.Tipo = 2 THEN 1 END) AS Plata, COUNT(CASE WHEN m.Tipo = 3 THEN 1 END) AS Bronce
            FROM Pais p JOIN Atleta a ON p.idPais = a.Pais_idPais JOIN Medalla m ON a.idAtleta = m.Atleta_idAtleta GROUP BY p.Nombre
            ORDER BY Bronce DESC, Oro DESC, Plata DESC;";
            $query4 = "SELECT p.Nombre AS Pais, COUNT(CASE WHEN m.Tipo = 1 THEN 1 END) AS Oro, COUNT(CASE WHEN m.Tipo = 2 THEN 1 END) AS Plata, COUNT(CASE WHEN m.Tipo = 3 THEN 1 END) AS Bronce
            FROM Pais p JOIN Atleta a ON p.idPais = a.Pais_idPais JOIN Medalla m ON a.idAtleta = m.Atleta_idAtleta GROUP BY p.Nombre
            ORDER BY (Oro+Plata+Bronce) DESC, Oro DESC, Plata DESC, Bronce DESC;";
            if (empty($_GET['ft']) or $_GET['ft']=="Oro") {
              $resultados = mysqli_query($conexion, $query);
            } else {
              $ft = $_GET['ft'];
              if ($ft=="Plata"){
                  $resultados = mysqli_query($conexion, $query2);
              }else if ($ft=="Bronce"){
                  $resultados = mysqli_query($conexion, $query3);
              }else if ($ft=="Sum"){
                  $resultados = mysqli_query($conexion, $query4);
              } else {
                  $resultados = mysqli_query($conexion, $query);
              }
            }
            $tmpCount = 1;
            while($fila=mysqli_fetch_assoc($resultados)){ // recorremos cada fila obtenida y mostramos el nombre y el apellido
           ?>
                <tr>
                    <th><?php echo "ㅤ   ".$tmpCount?></th>
                    <th><?php echo country2flag($fila['Pais']);?></th>
                    
                    <th><?php echo $fila['Oro']?></th>
                    <th><?php echo $fila['Plata']?></th>
                    <th><?php echo $fila['Bronce']?></th>
                    <th><?php echo $fila['Oro']+$fila['Plata']+$fila['Bronce']?></th>
                </tr>
                <?php
        $tmpCount ++; }
        ?>
                <tr>
                </tbody>
        </table>
        </div>
    </section>
    <footer>
      <p>All Sports SRL</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="js/main.js" crossorigin="anonymous"></script>
</body>

</html>