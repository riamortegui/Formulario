<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/sweetalert.min.js"></script> 
    <title>Formulario</title>
</head>

<body>


  <form id="form" class="form" method="post">
      <h1 class="form__titulo">CONTACTO</h1>

          <div class="contenedor">

              <div class="form__grupo" id="grupo__nombre" >
                <input id="nombre" name="nombre" type="text" class="form__input" placeholder=" " >
                <label for="" class="form__label">Nombre</label>
                <span class="form__linia"></span>
              </div>

              <div class="form__grupo" id="grupo__pais">
                <select class="form__input" id="pais" name="pais" placeholder=" " >
                </select>
                <label for="" class="form__label">Pais</label>
                <span class="form__linia"></span>
              </div>

              <div class="form__grupo" id="grupo__celular">
                <input id="celular" name="celular" type="text" class="form__input" placeholder=" " >
                <label for="" class="form__label">Celular</label>
                <span class="form__linia"></span>
              </div>

              <div class="form__grupo" id="grupo__email">
                <input id="email" name="email" type="text" class="form__input" placeholder=" " >
                <label for="" class="form__label">Email</label>
                <span class="form__linia"></span>
              </div>
              
              <button  class="form__submit" id="btnRegistrar" onclick="registrosuario();" type="reset" class="btn btn-primary">Guardar</button>

          </div>
    </form>
    <div id="particles-js"></div>


</body>

</html>

<script src="js/script.js"></script>
<script src="Diseño/particles.min.js"></script>
<script src="Diseño/fondo.js"></script>




   


