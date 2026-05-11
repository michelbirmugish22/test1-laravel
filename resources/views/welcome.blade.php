
<!Doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Astro v5.13.2" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.1/jquery-ui.min.js" integrity="sha512-MSOo1aY+3pXCOCdGAYoBZ6YGI0aragoQsg1mKKBHXCYPIWxamwOE7Drh+N5CPgGI5SA9IEKJiPjdfqWFWmZtRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <title>Heroes · Bootstrap v5.3</title>

    <meta name="theme-color" content="#712cf9" />
  </head>
  <body>
    <main>
      <div class="px-4 py-5 my-5 text-center"> 
        <img  class="d-block mx-auto mb-4" src="{{ asset('storage/images/sapasse.png') }}" alt=""  width="100" height="100" >
        <h1 class="display-5 fw-bold text-body-emphasis" style="color: rgb(238, 1, 17)">Sapasse Technologies</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">
            {{-- Text pour une startup technologieque  --}}
            Sapasse Technologies est une startup innovante spécialisée dans le développement de solutions technologiques avancées. Nous nous engageons à créer des produits et services qui révolutionnent l'industrie, en mettant l'accent sur la qualité, la performance et l'expérience utilisateur. Notre équipe passionnée travaille sans relâche pour offrir des solutions qui répondent aux besoins changeants de nos clients et contribuent à façonner l'avenir de la technologie.
          </p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a type="button" href="/produits" class="btn btn-primary btn-lg px-4 gap-3">
              Commencer
            </a>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">
              Nos produits
            </button>
          </div>
        </div>
      </div>
      <div class="b-example-divider"></div>
    </main>
    <script
      src="../assets/dist/js/bootstrap.bundle.min.js"
      class="astro-vvvwv3sm"
    ></script>
  </body>
</html>
