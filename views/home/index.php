<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Massive - Home</title>
  <link rel="stylesheet" href="includes/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <div class="topbar">
    <div class="topbar-content">
      <span>ENVÍOS GRATIS A PARTIR DE $130.000 · 15% OFF EXTRA CON TRANSFERENCIA · NUEVO DROP · 3 CUOTAS SIN INTERÉS · 6
        CUOTAS SIN INTERÉS CON UN MÍNIMO DE $130.000 · </span>
    </div>
  </div>

  <header>
    <nav class="navbar">
      <div class="logo">Massive</div>
      <ul class="nav-links">
        <li><a href="#">Inicio</a></li>
        <li class="dropdown">
          <a href="#">Productos ▾</a>
          <ul class="dropdown-menu">
            <li><a href="views/home/remeras.php">Remeras</a></li>
            <li><a href="views/home/pantalones.php">Pantalones</a></li>
            <li><a href="views/home/accesorios.php">Accesorios</a></li>
          </ul>
        </li>
        <li><a href="#">Ofertas</a></li>
      </ul>
      <div class="icons">
        <a href="#"><i class="fas fa-search"></i></a>
        <a href="#">
          <a href="index.php?c=user&m=login"><i class="fas fa-user"></i></a>
          <i class="fas fa-shopping-cart"></i>

          <span class="cart-count">
            <?= isset($_SESSION['carrito']) ? count($_SESSION['carrito']) : 0 ?>
          </span>
        </a>
      </div>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-text">
      <h1>Próximamente...</h1>
      <p>Massive...</p>
      <a href="#" class="btn">Ver productos</a>
    </div>
  </section>

  <section class="products">
    <h2>Productos destacados</h2>
    <div class="grid">
      <div class="card">
        <img src="includes/remera1.png" alt="Producto 2">
        <h3>Remera Negra</h3>
        <p>$5.000</p>
        <a href="index.php?c=cart&m=add&id=1">Agregar al carrito</a>
      </div>


    </div>
  </section>

  <footer class="footer">
    <div class="footer-top">
      <div class="footer-section">
        <h4>AYUDA</h4>
        <ul>
          <li><a href="#">Preguntas Frecuentes</a></li>
          <li><a href="#">Política de Privacidad</a></li>
        </ul>
      </div>

      <div class="footer-section">
        <h4>MASSIVE</h4>
        <ul>
          <li><a href="#">Inicio</a></li>
        </ul>
      </div>

      <div class="footer-section">
        <h4>CONTACTO</h4>
        <ul>
          <li><a href="tel:+5491122233344">+54 9 11 2222-3334</a></li>
          <li><a href="mailto:soporte@massive.com.ar">soporte@massive.com.ar</a></li>
          <li><a href="#">Buenos Aires, Argentina</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-social">
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-tiktok"></i></a>
    </div>

    <div class="footer-bottom">
      <p>Copyright MASSIVE - 2025. Todos los derechos reservados.
        Defensa de las y los consumidores. Para reclamos ingresá <a href="#">acá</a>.</p>
      <p class="creditos">Creado con ❤️ por Massive Team</p>
    </div>
  </footer>


</body>

</html>