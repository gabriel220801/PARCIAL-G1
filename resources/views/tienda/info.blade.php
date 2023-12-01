<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Deportiva</title>
    <!-- Enlazar Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlazar Font Awesome (iconos utilizados por AdminLTE) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Estilo adicional para el título -->
    <style>
        .brand-title {
            font-family: 'Arial', sans-serif;
            font-size: 24px;
            color: #fff;
            margin-right: auto;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
    
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark bg-dark">
           
        <h1 style="font-family: 'Times New Roman', Times, serif; color: white;">Tienda Deportiva</h1>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

           
            <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/"><i class="fas fa-home"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nastul-prado/articulos"><i class="fas fa-box"></i> Articulos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nastul-prado/marcas"><i class="fas fa-tshirt"></i> Marcas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nastul-prado/presentacion"><i class="fas fa-shopping-cart"></i> Tienda</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        
<div style="margin-top: 50px; padding: 20px;">
  <h1 style="font-family: 'Times New Roman', Times, serif; font-size: 2.5rem; text-align: center;">Tienda Deportiva</h1>
  <p style="font-family: 'Times New Roman', Times, serif; font-size: 1.25rem;">Bienvenido a nuestra tienda deportiva, donde encontrará una amplia selección de productos para satisfacer todas sus necesidades deportivas. Desde ropa y calzado hasta equipos y accesorios, estamos comprometidos a proporcionar productos de alta calidad para atletas de todos los niveles.</p>
  <hr>
  <p style="font-family: 'Times New Roman', Times, serif; font-size: 1.25rem;">Explore nuestras categorías y descubra las últimas tendencias en moda deportiva. Nuestro equipo experto está aquí para ayudarlo a encontrar lo que necesita para alcanzar sus objetivos y disfrutar al máximo de su experiencia deportiva.</p>

  <div style="display: flex; justify-content: space-between; margin-top: 20px;">
    <div style="width: 48%;">
      <img src="{{ asset('img/adidas.jpg') }}" style="width: 100%; border-radius: 5px;" alt="Nike">
    </div>
    <div style="width: 48%;">
      <img src="{{ asset('img/nike.png') }}" style="width: 100%; border-radius: 5px;" alt="Adidas">
    </div>
  </div>
</div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    </div>
    
</body>
</html>




