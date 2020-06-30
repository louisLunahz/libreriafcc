var form = document.getElementById("formularioEditar");
var mensaje = document.getElementById("mensajeError");


form.addEventListener("submit", function (e) {
  //document.writeln("funciona el boton");
  e.preventDefault();
  var datos = new FormData(form);
  //document.writeln(datos.get('inputnameLibro'));
  //document.writeln(datos.get('categoriasSelector'));
  //document.writeln(datos.get('inputPrecioLibro'));
  //document.writeln(datos.get('condicionSelector'));

  //document.writeln(datos.get('descripcionArea'));
  //document.writeln(datos.get('fotoLibro'));
  fetch("validarDatosEditarLibro.php", {
    method: "POST",
    body: datos,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
      switch (data) {
        case "error_1":
          mensaje.innerHTML =
            '<span class="badge badge-pill badge-danger">Error! No se pudo conectar a la base de datos</span>';
          break;

        case "error_2":
          mensaje.innerHTML =
            '<span class="badge badge-pill badge-danger" >Error! Los campos no pueden estar vacios</span>';
          break;

        case "error_3":
          mensaje.innerHTML =
            '<span class="badge badge-pill badge-danger">Error! El costo no puede ser negativo</span>';
          break;
          case "error_4":
          mensaje.innerHTML =
            '<span class="badge badge-pill badge-danger">Error! No se pudo actualizar la informacion, intente mas tarde</span>';
          break;

        case "correcto":
          window.location = "editarLibro.php";
          break;
      }
    });
});

