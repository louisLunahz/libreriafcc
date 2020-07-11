var form = document.getElementById("formulario");
var mensaje = document.getElementById("mensajeError");

form.addEventListener("submit", function (e) {
  e.preventDefault();
  var datos = new FormData(form);



  fetch("validarUsuario.php", {
    method: "POST",
    body: datos,
  })
    .then((res) => res.json())
    .then((data) => {
      //console.log(data);
      switch (data) {
        case "error_1":
          mensaje.innerHTML =
            '<span style="color:red">Completa todos los campos</span>';
          break;

        case "error_2":
          mensaje.innerHTML =
            '<span style="color:red">Usario o contraseña incorrecta</span>';
          break;

        case "correcto":
          window.location = "index.php";
          break;
      }
    });
});
