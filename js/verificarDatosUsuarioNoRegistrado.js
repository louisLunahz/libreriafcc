var form = document.getElementById("formularioComprar");
var mensaje = document.getElementById("mensajeError");



form.addEventListener("submit", function (e) {
  e.preventDefault();
  var datos = new FormData(form);

  fetch("validarDatosComprador.php", {
    method: "POST",
    body: datos,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
      switch (data) {
        case "error_1":
          mensaje.innerHTML =
            '<span style="color:red">Completa todos los campos</span>';
          break;

        case "error_2":
          mensaje.innerHTML =
            '<span style="color:red">Ingresa una matricula valida</span>';
          break;
        case "error_3":
          mensaje.innerHTML =
            '<span style="color:red">Ingresa un telefono valido</span>';
          break;
        case "error_4":
          mensaje.innerHTML =
            '<span style="color:red">Ingresa un email valido</span>';
          break;

        case "correcto":
          window.location = "confirmarCompra.php";
          break;
      }
    });
});
