
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Club Social y Deportivo Pilar Costa</title>
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

  <!-- CARRUSEL -->
  <section class="max-w-6xl mx-auto px-4 mb-16">
    <div class="relative overflow-hidden rounded-xl shadow-lg">
      <!-- Slides -->
        <div id="carouselSlides" class="flex transition-transform duration-700 w-full">
         <img src="/img/Captura.jpg" class="w-full h-auto flex-shrink-0 object-contain"   alt="slide 1">

         
         </div>


      <!-- Prev -->
      <button id="prevBtn"
        class="absolute top-1/2 left-4 -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full hover:bg-opacity-75 transition">
        &#10094;
      </button>

      <!-- Next -->
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

    // Auto-play cada 4 segundos
    setInterval(() => {
      index = (index + 1) % totalSlides;
      slides.style.transform = `translateX(-${index * 100}%)`;
    }, 4000);
  </script>

  <!-- Cantina -->
  <section id="cantina" class="bg-gray-50 py-16">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-10">Cantina - Menú Semanal</h2>

      <div class="grid md:grid-cols-3 gap-8 ">
       <div tabindex="0" class="p-6 border rounded-xl shadow-sm hover:shadow-lg hover:-translate-y-1 hover:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
          <h3 class="text-xl font-semibold mb-3">Platos del Día</h3>
          <ul class="text-gray-600 space-y-2">
            <li>🍲 Guiso de lentejas</li>
            <li>🍝 Tallarines con salsa</li>
            <li>🥗 Ensalada completa</li>
          </ul>
        </div>

        <div tabindex="0" class="p-6 border rounded-xl shadow-sm hover:shadow-lg hover:-translate-y-1 hover:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
          <h3 class="text-xl font-semibold mb-3">Bebidas</h3>
          <ul class="text-gray-600 space-y-2">
            <li>🥤 Refrescos</li>
            <li>🍺 Cervezas artesanales</li>
            <li>🍵 Infusiones</li>
          </ul>
        </div>

        <div tabindex="0" class="p-6 border rounded-xl shadow-sm hover:shadow-lg hover:-translate-y-1 hover:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
          <h3 class="text-xl font-semibold mb-3">Postres</h3>
          <ul class="text-gray-600 space-y-2">
            <li>🍰 Chajá</li>
            <li>🍮 Flan casero</li>
            <li>🍪 Galletas artesanales</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Actividades -->
  <section id="actividades" class="py-16">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-10">Actividades del Club</h2>

      <div class="grid md:grid-cols-3 gap-8">
        <div tabindex="0" class="p-6 border rounded-xl shadow-sm hover:shadow-lg hover:-translate-y-1 hover:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
          <h3 class="text-xl font-semibold mb-3">Cerámica</h3>
          <p class="text-gray-600">Para todas las edades.</p>
        </div>

         <div tabindex="0" class="p-6 border rounded-xl shadow-sm hover:shadow-lg hover:-translate-y-1 hover:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
          <h3 class="text-xl font-semibold mb-3">Yoga para niños</h3>
          <p class="text-gray-600">Clases para niños.</p>
        </div>

        <div tabindex="0" class="p-6 border rounded-xl shadow-sm hover:shadow-lg hover:-translate-y-1 hover:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
          <h3 class="text-xl font-semibold mb-3">Taller de escritura</h3>
          <p class="text-gray-600">Todas las edades.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Cursos -->
  <section id="cursos" class="bg-gray-50 py-16">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-10">Cursos Disponibles</h2>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="p-6 border rounded-xl shadow-sm text-center">
          <h3 class="text-xl font-semibold mb-3">Yoga</h3>
          <p class="text-gray-600">Mejorá tu bienestar físico y mental.</p>
        </div>

        <div class="p-6 border rounded-xl shadow-sm text-center">
          <h3 class="text-xl font-semibold mb-3">Taller de Cocina</h3>
          <p class="text-gray-600">Aprendé recetas fáciles y deliciosas.</p>
        </div>

        <div class="p-6 border rounded-xl shadow-sm text-center">
          <h3 class="text-xl font-semibold mb-3">Primeros Auxilios</h3>
          <p class="text-gray-600">Capacitación para emergencias básicas.</p>
        </div>
      </div>
    </div>
  </section>

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
