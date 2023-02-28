<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <form class="row g-3 p-4">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Nombre de la mascota</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">seleccion predeterminada</legend>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">
                  Perro
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">
                  Gato
                </label>
              </div>
            </div>
          </fieldset>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Género</label>
            <select id="inputState" class="form-select">
              <option selected>Macho</option>
              <option>Hembra</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Edad</label>
            <select id="inputState" class="form-select">
              <option selected>Cachorro</option>
              <option>Adulto</option>
              <option>Joven</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Tamaño</label>
            <select id="inputState" class="form-select">
              <option selected>Pequeño</option>
              <option>Mediano</option>
              <option>Grande</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Personalidades</label>
            <select id="inputState" class="form-select">
              <option selected>Divertido</option>
              <option>Tímido</option>
              <option>Juguetón</option>
              <option>Inteligente</option></option>
              <option>Independiente</option>
              <option>Dinámico</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Raza</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Localización</label>
          <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Breve descripción </label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Ingrese los datos">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
</body>
</html>