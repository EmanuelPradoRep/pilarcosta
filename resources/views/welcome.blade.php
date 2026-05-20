

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Club Social y Deportivo Pilar Costa</title>

  <!-- CSS personalizado -->
  <style>
    .whatsapp-float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 20px;
        right: 20px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50%;
        display: flex;              /* centrado con flexbox */
        align-items: center;        /* vertical */
        justify-content: center;    /* horizontal */
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
        transition: transform 0.2s ease-in-out;
    }

    .whatsapp-float:hover {
        transform: scale(1.1);      /* efecto al pasar el mouse */
    }

    .whatsapp-float img {
        width: 35px;
        height: 35px;
    }
  </style>
</head>

<body class="bg-white text-gray-800">
  <!-- Header -->
  <header class="w-full shadow-sm sticky top-0 bg-white z-50">
    <div class="max-w-6xl mx-auto flex items-center justify-between py-4 px-4">
      <!-- Logo -->
      <div class="flex items-center space-x-2">
        <img src="/img/logoSin.png" alt="Logo" class="w-12 h-12" />
        <span class="text-xl font-semibold">Club Social y Deportivo Pilar Costa</span>
      </div>

      <!-- Menu -->
      <nav class="space-x-6 text-lg hidden md:block">
        <a href="#quienes" class="hover:text-blue-600">Quienes somos</a>
        <a href="#historia" class="hover:text-blue-600">Historia</a>
        <a href="#cantina" class="hover:text-blue-600">Cantina</a>
        <a href="#actividades" class="hover:text-blue-600">Actividades</a>
        <a href="#cursos" class="hover:text-blue-600">Cursos</a>
        <a href="#contacto" class="hover:text-blue-600">Contacto</a>
        <a href="{{ route('login') }}" class="hover:text-blue-600">Login</a>
      </nav>
    </div>
  </header>

  <!-- Hero -->
  <section class="max-w-6xl mx-auto text-center py-20 px-4">
    <h1 class="text-4xl font-bold mb-4">Bienvenidos al Club Social y Deportivo</h1>
    <p class="text-lg text-gray-600 mb-6">Un espacio para crecer, aprender y compartir. Conocé nuestras actividades, cursos y el menú de la cantina.</p>
    <a href="#actividades" class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition">Ver Actividades</a>
  </section>

  <!-- Carrusel -->
  <section class="max-w-6xl mx-auto px-4 mb-16">
    <div class="relative overflow-hidden rounded-xl shadow-lg">
      <div id="carouselSlides" class="flex transition-transform duration-700 w-full">
        <img src="/img/Captura.jpg" class="w-full h-auto flex-shrink-0 object-contain" alt="slide 1">
      </div>

      <button id="prevBtn"
        class="absolute top-1/2 left-4 -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full hover:bg-opacity-75 transition">
        &#10094;
      </button>

      <button id="nextBtn"
        class="absolute top-1/2 right-4 -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full hover:bg-opacity-75 transition">
        &#10095;
      </button>
    </div>
  </section>

  <!-- Script Carrusel -->
  <script>
    const slides = document.getElementById("carouselSlides");
    const totalSlides = slides.children.length;
    let index = 0;

    document.getElementById("nextBtn").onclick = () => {
      index = (index + 1) % totalSlides;
      slides.style.transform = `translateX(-${index * 100}%)`;
    };

    document.getElementById("prevBtn").onclick = () => {
      index = (index - 1 + totalSlides) % totalSlides;
      slides.style.transform = `translateX(-${index * 100}%)`;
    };

    setInterval(() => {
      index = (index + 1) % totalSlides;
      slides.style.transform = `translateX(-${index * 100}%)`;
    }, 4000);
  </script>

  <!-- Cantina -->
  <section id="cantina" class="bg-gray-50 py-16">
    <!-- ... contenido de cantina ... -->
  </section>

  <!-- Actividades -->
  <section id="actividades" class="py-16">
    <!-- ... contenido de actividades ... -->
  </section>

  <!-- Cursos -->
  <section id="cursos" class="bg-gray-50 py-16">
    <!-- ... contenido de cursos ... -->
  </section>

  <!-- Botón flotante de WhatsApp -->
  <a href="https://wa.me/59896698546?text=Hola%20quiero%20más%20información" 
    class="whatsapp-float" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
  </a>

  <!-- Footer -->
  <footer id="contacto" class="w-full py-8 text-center text-gray-500 border-t">
    <p>© 2025 Club Social y Deportivo Pilar Costa. Todos los derechos reservados.</p>
    <p class="text-gray-400 text-sm mt-2">Ubicacion: Calabuig 182 - Contacto: info@club.com</p>

    <div class="flex justify-center space-x-6 mt-4">
        <a href="https://www.facebook.com/profile.php?id=61584360402127" target="_blank" class="hover:text-blue-600 text-xl">📘 Facebook</a>
        <a href="https://www.instagram.com/clubpilarcosta/" target="_blank" class="hover:text-pink-600 text-xl">📸 Instagram</a>
    </div>
  </footer>
</body>
</html>
