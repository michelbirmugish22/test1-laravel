
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name='csrf-token' content="{{ csrf_token() }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.1/jquery-ui.min.js" integrity="sha512-MSOo1aY+3pXCOCdGAYoBZ6YGI0aragoQsg1mKKBHXCYPIWxamwOE7Drh+N5CPgGI5SA9IEKJiPjdfqWFWmZtRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- SweetAlert2  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.23.0/sweetalert2.css" integrity="sha512-/j+6zx45kh/MDjnlYQL0wjxn+aPaSkaoTczyOGfw64OB2CHR7Uh5v1AML7VUybUnUTscY5ck/gbGygWYcpCA7w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.23.0/sweetalert2.min.js" integrity="sha512-pnPZhx5S+z5FSVwy62gcyG2Mun8h6R+PG01MidzU+NGF06/ytcm2r6+AaWMBXAnDHsdHWtsxS0dH8FBKA84FlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Produits</title>
    <meta name="theme-color" content="#712cf9" />
 
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="./">Sapasse Ecole</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Catégories</a>
            </li>
             <li class="nav-item">
              <a class="nav-link active" href="#">Produits</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#">Commandes</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#">Clients</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              &#128269;
            </button>
          </form>
        </div>
      </div>
    </nav>
    <main class="container mt-5">
      <div class="bg-body-tertiary p-5 rounded">
        <h1>Gestion des produits</h1>
        <p class="lead">
          Bienvenue sur la page de gestion des produits. Ici, vous pouvez ajouter,
          modifier et supprimer des produits de votre catalogue.
        </p>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalProd">
          Ajouter un produit &plus;</button
        >
      </div>
      <div class="card m-5">
        <div class="card-header">
          <h5 class="card-title">Liste des produits</h5>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Prix</th>
                <th scope="col">Stock</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody id="tableContent">
              <!-- Les lignes du tableau seront ajoutées dynamiquement -->
            </tbody>
          </table>
        </div>
      </div>
    </main>


<!-- Modal Enregistrement -->
<div class="modal fade" id="modalProd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalProdLabel">Ajouter un produit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#" id="formProd">
            <div class="mb-3">
                <label for="nomProduit" class="form-label">Nom du produit</label>
                <input type="text" class="form-control" id="nomProduit" placeholder="Entrez le nom du produit">
            </div>
            <div class="mb-3">
              <label for="descriptionProduit" class="form-label">Description du produit</label>
              <textarea class="form-control" id="descriptionProduit" rows="3" placeholder="Entrez la description du produit"></textarea>
          </div>
            <div class="mb-3">
                <label for="prixProduit" class="form-label">Prix du produit</label>
                <input type="number" class="form-control" id="prixProduit" placeholder="Entrez le prix du produit">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary" id="saveProd">Enregistrer les modifications</button>
      </div>
    </div>
  </div>
</div>

{{-- Modal Modification  --}}
<div class="modal fade" id="modalProdEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalProdEditLabel">Modifier un produit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#" id="formProdEdit">
          <input type="hidden" name="idProduitEdit" id="idProduitEdit">
            <div class="mb-3">
                <label for="nomProduitEdit" class="form-label">Nom du produit</label>
                <input type="text" class="form-control" id="nomProduitEdit" placeholder="Entrez le nom du produit">
            </div>
            <div class="mb-3">
              <label for="descriptionProduitEdit" class="form-label">Description du produit</label>
              <textarea class="form-control" id="descriptionProduitEdit" rows="3" placeholder="Entrez la description du produit"></textarea>
          </div>
            <div class="mb-3">
                <label for="prixProduitEdit" class="form-label">Prix du produit</label>
                <input type="number" class="form-control" id="prixProduitEdit" placeholder="Entrez le prix du produit">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary" id="saveProdEdit">Enregistrer les modifications</button>
      </div>
    </div>
  </div>
</div>

<script>

  $(document).ready(function() {
    listeProduits();
  });

  function listeProduits() {
      $("#tableContent").html('');
      $.ajax({
          url: '/produits',
          method: 'GET',
          success: function(response) {
              response.forEach(function(produit) {
                  $('#tableContent').append(`
                      <tr>
                          <th scope="row">${produit.id}</th>
                          <td>${produit.name}</td>
                          <td>${produit.description}</td>
                          <td>${produit.price}</td>
                          <td>${produit.stock}</td>
                          <td>
                              <button class="btn btn-sm btn-warning btnModifier" data-id="${produit.id}">Modifier</button>
                              <button class="btn btn-sm btn-danger btnSupprimer" data-id="${produit.id}">Supprimer</button>
                          </td>
                      </tr>
                  `);
              });
          },
          error: function(xhr) {
              console.error('Erreur lors du chargement des produits.');
          }
      });
    }
</script>

<script>
    $(document).ready(function () {
        $('.modal').draggable({
            handle: '.modal-header'
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#saveProd').click(function () {
            var nom = $('#nomProduit').val();
            var description = $('#descriptionProduit').val();
            var prix = $('#prixProduit').val();
            var stock = $('#stockProduit').val();

            if (nom && description && prix) {
                let formData = {
                    nom: nom,
                    description: description,
                    prix: prix,
                    _token: $('meta[name="csrf-token"]').attr('content')
                };
                $.ajax({
                    url: '/produits',
                    method: 'POST',
                    data: formData,
                    success: function (response) {
                        message_response(response.message, 'success');
                        // Ajouter le nouveau produit à la table au debut de la liste
                        $('#tableContent').prepend(`
                            <tr>
                                <th scope="row">${response.produit.id}</th>
                                <td>${response.produit.name}</td>
                                <td>${response.produit.description}</td>
                                <td>${response.produit.price}</td>
                                <td>${response.produit.stock}</td>
                                <td>
                                    <button class="btn btn-sm btn-warning btnModifier" data-id="${response.produit.id}">Modifier</button>
                                    <button class="btn btn-sm btn-danger btnSupprimer" data-id="${response.produit.id}">Supprimer</button>
                                </td>
                            </tr>
                        `);
                        $('#saveProd').blur();
                        $('#modalProd').modal('hide');
                        // vider les champs du formulaire
                        $('#nomProduit').val('');
                        $('#descriptionProduit').val('');
                        $('#prixProduit').val('');


                    },
                    error: function (xhr) {
                        message_response('Erreur lors de l\'ajout du produit.', 'error');
                    }
                });
            } else {
                message_response('<p class="text-danger">Veuillez remplir tous les champs.</p>', 'error');
            }
        });
    });

    function message_response(msg, type) {
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: type,
            title: msg,
            showConfirmButton: false,
            timer: 1500
        });
        
    }
</script>
<script>
  $(document).ready(function () {
    // Action Modifier 
      $('#tableContent').on('click', '.btnModifier', function () {
          var row = $(this).closest('tr');
          var id = row.find('th').text();

          $.ajax({
              url: '/produits/' + id,
              method: 'GET',
              success: function (produit) {
                  $('#idProduitEdit').val(produit.id);
                  $('#nomProduitEdit').val(produit.name);
                  $('#descriptionProduitEdit').val(produit.description);
                  $('#prixProduitEdit').val(produit.price);
                  $('#modalProdEdit').modal('show');
              },
              error: function (xhr) {
                  message_response('Erreur lors du chargement du produit.', 'error');
              }
          });

      });
        // Action Supprimer
        $('#tableContent').on('click', '.btnSupprimer', function () {
            var row = $(this).closest('tr');
            var id = row.find('th').text();
            Swal.fire({
                title: 'Êtes-vous sûr de vouloir supprimer ce produit ?',
                text: "Cette action est irréversible !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Oui, supprimer !'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/produits/' + id,
                        method: 'DELETE',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            message_response(response.message, 'success');
                            row.remove();
                        },
                        error: function (xhr) {
                            message_response('Erreur lors de la suppression du produit.', 'error');
                        }
                    });
                }
            });
        });
  });
</script>
<script>
  $(document).ready(function () {
    // Action Modifier 
      $('#saveProdEdit').click(function () {
          var id = $('#idProduitEdit').val();
          var nom = $('#nomProduitEdit').val();
          var description = $('#descriptionProduitEdit').val();
          var prix = $('#prixProduitEdit').val();

          if (nom && description && prix) {
              let formData = {
                  nom: nom,
                  description: description,
                  prix: prix,
                  _token: $('meta[name="csrf-token"]').attr('content')
              };
              $.ajax({
                  url: '/produits/' + id, // Assurez-vous d'avoir l'ID du produit à modifier
                  method: 'PUT',
                  data: formData,
                  success: function (response) {
                      message_response(response.message, 'success');
                      // Mettre à jour la ligne du tableau avec les nouvelles données
                      
                      $('#saveProdEdit').blur();
                      $('#modalProdEdit').modal('hide');
                      listeProduits();
                  },
                  error: function (xhr) {
                      message_response('Erreur lors de la modification du produit.', 'error');
                  }
              });
          } else {
              message_response('<p class="text-danger">Veuillez remplir tous les champs.</p>', 'error');
          }
      });
  });
</script>
  </body>
</html>
