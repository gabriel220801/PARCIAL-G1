@extends('base')

@section('content')

<body>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Descripción de la Tienda Deportiva</title>
</head>
<body style="font-family: 'Times New Roman', Times, serif;">

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

</body>
</html>


@endsection