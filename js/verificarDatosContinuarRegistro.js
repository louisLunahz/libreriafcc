var form = document.getElementById("formularioContinuarRegistro");
var mensaje = document.getElementById("mensajeError");

form.addEventListener("submit", function (e) {
  e.preventDefault();
  var datos = new FormData(form);

  fetch("verificarDatosContinuarRegistro.php", {
    method: "POST",
    body: datos,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
      switch (data) {
        case "error_1":
          mensaje.innerHTML =
            '<span style="color:red">Apellido paterno incorrecto, solo se aceptan letras</span>';
          break;

        case "error_2":
          mensaje.innerHTML =
            '<span style="color:red">Apellido materno incorrecto, solo se aceptan letras</span>';
          break;
           case "error_3":
          mensaje.innerHTML =
            '<span style="color:red">Primer nombre incorrecto, solo se aceptan letras</span>';
          break;
           case "error_4":
          mensaje.innerHTML =
            '<span style="color:red">Solo se aceptan letras</span>';
          break;
          case "error_5":
          mensaje.innerHTML =
            '<span style="color:red">Ingresa un telefono correcto</span>';
          break;
          
          case "error_6":
          mensaje.innerHTML =
            '<span style="color:red">Error con la base de datos</span>';
          break;
          case "correcto":
            window.location = "registroExitoso.php";
          break;
           

           
      }
    });
});
