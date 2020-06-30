var form = document.getElementById("formularioVender");
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
  fetch("validarDatosVender.php", {
    method: "POST",
    body: datos,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
      switch (data) {
        case "error_1":
          mensaje.innerHTML =
            '<span class="badge badge-pill badge-danger">Error! llena todos los campos</span>';
          break;

        case "error_2":
          mensaje.innerHTML =
            '<span class="badge badge-pill badge-danger" >Error! El costo no es correcto, asegurate de que no sea un valor negativo</span>';
          break;

        case "error_3":
          mensaje.innerHTML =
            '<span class="badge badge-pill badge-danger">Error! no se logro ingresar el libro, intente mas tarde</span>';
          break;

        case "correcto":
          window.location = "libroPublicado.php";
          break;
      }
    });
});
