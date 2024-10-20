<!DOCTYPE html>
<html lang="es" data-theme="garden">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Galeria</title>
  <link rel="icon" href="../images/Inicio_img.ico">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src=".././index.js" type="text/javascript" defer></script>
  <script src="../components/navbar/navbar.js" type="text/javascript" defer></script>
  <script src="../components/footer/footer.js" type="text/javascript" defer></script>
</head>

<body class="w-full max-w-screen min-h-screen h-screen">
  <navbar-component class="h-full w-full" src="../components/navbar/navbar.html" data-color="black">
  </navbar-component>
  <div class="flex justify-between items-center">
    <h1 class="text-4xl font-bold mx-auto pt-4 underline underline-offset-4 ...">Galeria de Productos de Luz</h1>
    <div></div>
  </div>
  <div
  class="md:hidden h-auto">
  <div class="p-4">
    <div class="collapse  bg-base-200 mb-2">
      <input type="radio" name="my-accordion-3" checked="checked" />
      <div class="collapse-title text-xl font-medium">
        Derecho Civil: Divorcios express-Sucesiones-Violencia doméstica-Accidentes de tránsitos.
      </div>
    </div>
    <div class="collapse  bg-base-200 mb-2">
      <input type="radio" name="my-accordion-3" />
      <div class="collapse-title text-xl font-medium"></div>
    </div>
    <div class="collapse  bg-base-200 mb-2">
      <input type="radio" name="my-accordion-3" />
      <div class="collapse-title text-xl font-medium">
        Derecho Comercial: Sociedades, Asociaciones, Cooperativas, Mutuales..
      </div>
    </div>
    <div class="collapse bg-base-200 mb-2">
      <input type="radio" name="my-accordion-3" checked="checked" />
      <div class="collapse-title text-xl font-medium">
        Derecho Ambiental-Permisos: Certificados-Habilitaciones-Reclamos. 
      </div>
    </div>
  </div>
  </div>
<div class="hidden md:grid">
  <div class="px-40 py-6">
    <div class="collapse  bg-base-200 mb-2">
      <input type="radio" name="my-accordion-3" checked="checked" />
      <div class="collapse-title text-xl font-medium">
        Derecho Civil: Divorcios express-Sucesiones-Violencia doméstica-Accidentes de tránsitos.
      </div>
    </div>
    <div class="collapse  bg-base-200 mb-2">
      <input type="radio" name="my-accordion-3" />
      <div class="collapse-title text-xl font-medium">Drecho Laboral: Despidos-ART-Jubilaciones.</div>
    </div>
    <div class="collapse bg-base-200 mb-2">
      <input type="radio" name="my-accordion-3" />
      <div class="collapse-title text-xl font-medium">
        Derecho Comercial: Sociedades, Asociaciones, Cooperativas, Mutuales..
      </div>
    </div>
    <div class="collapse  bg-base-200 mb-2">
      <input type="radio" name="my-accordion-3" checked="checked" />
      <div class="collapse-title text-xl font-medium">
        Derecho Ambiental-Permisos: Certificados-Habilitaciones-Reclamos. 
      </div>
    </div>
  </div>
</div>
<footer-component class="w-auto h-auto md:h-[50%]" src="../components/footer/footer.html"></footer-component>

</body>

</html>