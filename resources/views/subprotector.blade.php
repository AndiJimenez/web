<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir Protector</title>
</head>
<body>
    @include('partials.navadm')

    <h1>Protector</h1>

        <form class="row g-3 p-4">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Nombre </label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Gmail</label>
                <input type="password" class="form-control" id="inputPassword4">
              </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Teléfono o celular</label>
              <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Requisitos que se requieren para la adopción</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Ingrese los datos">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>
    </body>
    </html>