<!DOCTYPE html>
<html lang="es-AR">

<head>
  <title>Portfolio - Author</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="../img/logo_portfolio.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/fuentes.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/author.css">
  <link rel="stylesheet" href="../css/retoques.css">
  <link rel="stylesheet" href="../css/social.css">
  <link rel="stylesheet" href="../css/contacto.css">
</head>

<body>
  <div class="header">
    <h2 id="titulo">Mariano Martinotti</h2>
  </div>

  <div class="topnav">
    <a href="../index.php">Inicio</a>
    <a href="author.php">Author</a>
    <a href="proyectos.php">Proyectos</a>
  </div>

      <section>
        <article>
          <div class="transbox_1">
            <h2 class="centrar">Mariano Martinotti</h2>
            <ul class='submenu_1'>
              <li>|X| City: Buenos Aires</li>
              <li>|X| Country: Argentina</li>
              <li>|X| University: <span>Universidad Nacional de Quilmes</span></li>
              <li>|X| Career: Licenciatura en comercio internacional</li>
            </ul>
          </div>
        </article>
      </section>
      <section>
        <article>
          <div class="container">
          <h2 class="centrar">Contacto</h2>
            <form action="../bd/conectar.php" method="post">
              <div class="row">
                <div class="col-25">
                  <label for="fname">Nombre</label>
                </div>
                <div class="col-75">
                  <input type="text" id="nombre" name="nombre" placeholder="Your name..">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="lname">Apellido</label>
                </div>
                <div class="col-75">
                  <input type="text" id="apellido" name="apellido" placeholder="Your last name..">
                </div>
              </div>
              <div class='row'>
                <div class='col-25'>
                  <label for="numero">Phone number: </label>
                </div>
                <div class="col-75">
                  <input type="text" id="telefono" name="telefono" placeholder="Into your number...">
                </div>
              </div>
              <br>
              <div class="row">
                <input type="submit" value="Submit">
              </div>
            </form>
          </div>
    <!--
   <div class="column_1 side_1">
      <section>
        <article>
          <h2>Redes Sociales</h2>
          <a href="#insertarURLInstagram"><img src="../img/red_social.png" alt="red_social" class="social"></a>  
        </article>
      </section>
    </div>
-->
    </article>
    </section>
  </div>
  <?php include "../static/footer.php" ?>
</body>

</html>