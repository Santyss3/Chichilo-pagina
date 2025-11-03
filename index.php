<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cantina Chichilo </title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <div class="container">
    <header>
      <h1 class="cantin">
        <span class="verde">CANTINA</span> <span class="rojo">CHICHILO</span>
      </h1>
      <nav aria-label="menú">
        <a href="#menu">Menú</a>
        <a href="#fotos">Fotos</a>
        <a href="#contacto">Contacto</a>
      </nav>
    </header>

    <section class="gallery" id="fotos">
      <img src="picada.jpg" alt="Mostrador con la picada italiana">
      <img src="postre chicholina (1).jpg" alt="Postre Chicholina">
      <img src="ranas (1).jpg" alt="Ranas a la provenzal">
      <img src="fusiles.jpg" alt="Fusiles caseros">
    </section>

    <div class="main">
      <main class="card">
        <h2 id="menu">Menu</h2>
        <ul class="menu-list">
          <h3>Entrada:</h3>
          <li>RINONES AL VINO BLANCO.</li>
          <li>CALAMARETTIS A LA ESCARPETTA.</li>
          <li>RABAS A LA CALABRIA.</li>
          <li>CARACOLES A LA BORDALEZA.</li>
          <li>RANAS A LA PROVENZAL.</li>
          <li>GAMBAS AL AJILLO.</li>
          <h3>Plato Principales: </h3>
          <li>MONDONGO A LA ITALIANA.</li>
          <li>TALLARINES AL VERDEO CON LONGANIZA.</li>
          <li>FUSILES CON BROCOLIS ANCHOAS GARBANZOS Y HONGOS.</li>
          <li>FUSILES AL FERRETO.</li>
          <li>MERLUZA AL AJILLO.</li>
          <h3>Postres: </h3>
            <li>POSTRE CHICOLINA.</li>
            <li>TIRAMISU CALABRES.</li>
        </ul>
          <h2 id="menu">Especialidades</h2>
        <ul class="menu-list">
          <li>TIRAMISÚ CALABRÉS</li>
          <li>QUINOTOS AL RHUM CON HELADO.</li>
          <li>MONDONGO A LA ITALIANA.</li>
          <li>RIÑONES AL VINO BLANCO.</li>
          <li>TALLARINES AL VERDEO CON LONGANIZA.</li>
          <li>CALAMARETTIS A LA ESCARPETTA.</li>
        </ul>
      </main>

      <aside class="card contact" id="contacto">
        <h3>Contacto:</h3>
        <p><strong>Dirección:</strong> Camarones 1901 esquina Terrero 2006, Capital Federal</p>
        <p><strong>Teléfono:</strong> 011-4584-1263</p>
        <p><strong>Email:</strong> chichilo3554@hotmail.com</p>
        <h3>Horarios:</h3>
        <p><strong>Jueves a sábados (noche):</strong> 20:30 - 23:30</p>
        <p><strong>Sábados y domingos (almuerzo):</strong> 12:30 - 14:00</p>
        <h3>Sobre Nosotros:</h3>
        <p>Desde 1956. Cantina italiana en La Paternal, Buenos Aires.</p>
      </aside>
    </div>
    
     <form action="main.php" method="POST" class="formulario">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="queja" placeholder="Tu opinion" required>
    <button type="submit">Guardar</button>
  </form>
    
    <h2 style="text-align:center; margin-top:30px; color:#cc0a21;">Opiniones de nuestros clientes</h2>

    <div class="opiniones">

    <?php
$conexion = new mysqli("localhost", "root", "", "chichilo");

if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}

$resultado = $conexion->query("SELECT nombre, queja FROM usuarios ORDER BY id DESC");

if ($resultado->num_rows > 0) {
  while ($fila = $resultado->fetch_assoc()) {
    echo "<div class='opinion'>";
    echo "<h4>" . htmlspecialchars($fila['nombre']) . "</h4>";
    echo "<p>" . htmlspecialchars($fila['queja']) . "</p>";
    echo "</div>";
  }
} else {
  echo "<p style='text-align:center;'>Todavía no hay opiniones.</p>";
}

$conexion->close();
?>
</div>


    <footer>
      Derechos reservados © 2025 Cantina Chichilo

    </footer>
  </div>
</body>
</html>
