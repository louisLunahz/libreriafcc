var form = document.getElementById("formularioRegistro");
var mensaje = document.getElementById("mensajeError");

form.addEventListener("submit", function (e) {
  e.preventDefault();
  var datos = new FormData(form);
 

  fetch("validarUsuarioRegistro.php", {
    method: "POST",
    body: datos,
  })

  .then((res) => res.json())
    .then((data) => {
      console.log(data);
      switch (data) {
        case "error_1":
          mensaje.innerHTML =
            '<span class="badge badge-pill badge-danger">Error! Ingresa una matricula valida</span>';
          break;

        case "error_2":
          mensaje.innerHTML =
            '<span class="badge badge-pill badge-danger" >Error! Ingresa un email valido</span>';
          break;

        case "error_3":
          mensaje.innerHTML =
            '<span class="badge badge-pill badge-danger">Error! La contraseña debe contener almenos 6 digitos</span>';
          break;
          case "error_4":
          mensaje.innerHTML =
            '<span class="badge badge-pill badge-danger">Error! Matricula en uso</span>';
          break;
          case "error_5":
          mensaje.innerHTML =
            '<span class="badge badge-pill badge-danger">Error! Email en uso</span>';
          break;

        case "correcto":
          window.location = "continuarRegistro.php";
          break;
      }
    });
  


  
});
