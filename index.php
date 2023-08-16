<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <div class="grid text-center">
    <div class="row">
      <!-- Hearder -->
      <div class="col-12">
        <div class="row">
          <div class="g-col-12">
            <p class="fs-1 font-monospace">C R U D</p>
          </div>
          <div class="g-col-12 text-start">
            <form action="ControllerIndex.php" method="post">
              <div class="row">
                <div class="col-2">

                </div>
                <div class="col-1">
                  <p class="fs-2">Create:</p>
                </div>
                <div class="col-2">
                  <input type="text" id="Titulo" name="titulo" class="form-control" aria-describedby="titulo">
                  <div id="titulo" class="form-text">
                    Titulo
                  </div>
                </div>
                <div class="col-2">
                  <input type="text" id="autor" name="autor" class="form-control" aria-describedby="autor">
                  <div id="autor" class="form-text">
                    Autor
                  </div>
                </div>
                <div class="col-2">
                  <input type="text" id="no_page" name="no_page" class="form-control" aria-describedby="no_page">
                  <div id="no_page" class="form-text">
                    No. Page
                  </div>
                </div>
                <div class="col-1">
                <input type="hidden" id="add" name="action" value="add">
                  <button type="submit" class="btn btn-success">Add</button>
                </div>
                <div class="col-2">

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Fin Hearder -->
      <!-- body -->
      <div class="col-12">
        <br>
        <br>
        <div class="row">
          <div class="col-2">

          </div>
          <div class="col-8">
            <table class="table table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Titulo</th>
                  <th scope="col">Autor</th>
                  <th scope="col">Numero de Pagina</th>
                  <th scope="col">UPDATE</th>
                  <th scope="col">DELETE</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td><button type="button" class="btn btn-warning">Update</button></td>
                  <td><button type="button" class="btn btn-danger">Delete</button></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td><button type="button" class="btn btn-warning">Update</button></td>
                  <td><button type="button" class="btn btn-danger">Delete</button></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-2">

          </div>
        </div>
      </div>
      <!-- fin Body -->
      <div class="col-12">
        <div class="row">
          <div class="col-2">

          </div>
          <div class="col-4">
            <p class="fs-4">¿Qué es esto?</p>
            <p class="fw-normal">
              Esto es un proyecto que presenta un CRUD
              para la administracion de libros, el objetivo
              es academico y como muestra de trabajo.
              <span class="fw-semibold">Libre de cualquier fin de lucro.</span>
            </p>
          </div>
          <div class="col-4 text-center">
            <p class="fs-4">Contacto</p>
            Linkeden:
            <br>
            GitHub:
          </div>
          <div class="col-2">

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>