<!DOCTYPE html>
<html lang="es" data-theme="garden">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Costa Azul - Casa de Iluminación</title>
  <link rel="icon" href="../images/Inicio_img.ico"> 
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../index.js" type="text/javascript" defer></script>
  <script src="../components/navbar/navbar.js" type="text/javascript" defer></script>
  <script src="../components/footer/footer.js" type="text/javascript" defer></script>
</head>

<body class="w-full max-w-screen min-h-screen h-screen">

  <!-- Navbar Component -->
  <navbar-component class="h-full w-full" src="../components/navbar/navbar.html" data-color="black"></navbar-component>

  <div class="flex justify-between items-center">
    <h1 class="text-4xl font-bold mx-auto pt-4 underline underline-offset-4">Casa de Iluminación Costa Azul</h1>
  </div>

  <!-- Mobile Collapsible Content -->
  <div class="md:hidden h-auto">
    <div class="p-4">
      <div class="collapse bg-base-200 mb-2">
        <input type="radio" name="my-accordion-3" checked="checked" />
        <div class="collapse-title text-xl font-medium">Sobre Nosotros</div>
        <div class="collapse-content">
          <p>Costa Azul es una empresa dedicada a la venta de productos de iluminación de alta calidad. Con años de experiencia en el mercado, ofrecemos una amplia variedad de productos que se ajustan a las necesidades de nuestros clientes, desde lámparas decorativas hasta soluciones industriales.</p>
        </div>
      </div>
      <div class="collapse bg-base-200 mb-2">
        <input type="radio" name="my-accordion-3" />
        <div class="collapse-title text-xl font-medium">Productos Destacados</div>
        <div class="collapse-content">
          <p>Descubre nuestros productos estrella, incluyendo lámparas LED, focos inteligentes, iluminación exterior e interior, además de una selección de bombillas de bajo consumo.</p>
        </div>
      </div>
      <div class="collapse bg-base-200 mb-2">
        <input type="radio" name="my-accordion-3" />
        <div class="collapse-title text-xl font-medium">Proveedores y Marcas</div>
        <div class="collapse-content">
          <p>Trabajamos con proveedores líderes en la industria de la iluminación, ofreciendo las mejores marcas del mercado, incluyendo Philips, Osram, y muchas más.</p>
        </div>
      </div>
      <div class="collapse bg-base-200 mb-2">
        <input type="radio" name="my-accordion-3" checked="checked" />
        <div class="collapse-title text-xl font-medium">Compromiso Ambiental</div>
        <div class="collapse-content">
          <p>En Costa Azul, nos comprometemos con la sostenibilidad ofreciendo productos energéticamente eficientes y ecológicos, ayudando a reducir el consumo de energía y el impacto ambiental.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Desktop Content -->
  <div class="hidden md:grid">
    <div class="px-40 py-6">
      <div class="collapse bg-base-200 mb-2">
        <input type="radio" name="my-accordion-3" checked="checked" />
        <div class="collapse-title text-xl font-medium">Sobre Nosotros</div>
        <div class="collapse-content">
          <p>Costa Azul es una empresa dedicada a la venta de productos de iluminación de alta calidad. Con años de experiencia en el mercado, ofrecemos una amplia variedad de productos que se ajustan a las necesidades de nuestros clientes.</p>
        </div>
      </div>
      <div class="collapse bg-base-200 mb-2">
        <input type="radio" name="my-accordion-3" />
        <div class="collapse-title text-xl font-medium">Productos Destacados</div>
        <div class="collapse-content">
          <p>Descubre nuestros productos estrella, como lámparas LED, focos inteligentes, iluminación exterior e interior, y bombillas de bajo consumo.</p>
        </div>
      </div>
      <div class="collapse bg-base-200 mb-2">
        <input type="radio" name="my-accordion-3" />
        <div class="collapse-title text-xl font-medium">Proveedores y Marcas</div>
        <div class="collapse-content">
          <p>Trabajamos con proveedores líderes en la industria de la iluminación, con marcas reconocidas a nivel global.</p>
        </div>
      </div>
      <div class="collapse bg-base-200 mb-2">
        <input type="radio" name="my-accordion-3" checked="checked" />
        <div class="collapse-title text-xl font-medium">Compromiso Ambiental</div>
        <div class="collapse-content">
          <p>Ofrecemos productos energéticamente eficientes para minimizar el impacto ambiental y promover la sostenibilidad.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Component -->
  <footer-component class="w-auto h-auto md:h-[50%]" src="../components/footer/footer.html"></footer-component>

</body>

</html>
