document.addEventListener('DOMContentLoaded', (event) => {
  document.getElementById('miFormulario').onsubmit = function(evento) {
    // Prevenir el envío por defecto del formulario
    evento.preventDefault();

    // Validar cada campo
    var nombre = document.getElementsByName('nombre')[0].value;
    var appat = document.getElementsByName('appat')[0].value;
    var apmat = document.getElementsByName('apmat')[0].value;
    var mail = document.getElementsByName('mail')[0].value;
    var carrera = document.getElementById('carrera').value;
    var fecha_nac = document.getElementsByName('fecha_nac')[0].value;
    var edo_civil = document.querySelector('input[name="edo_civil"]:checked');

    // Crear un array con todos los valores para verificar si alguno está vacío
    var campos = [nombre, appat, apmat, mail, carrera, fecha_nac];

    // Verificar si el estado civil está seleccionado
    if (edo_civil) {
      campos.push(edo_civil.value);
    }

    // Checar si algún campo está vacío
    var campoVacio = campos.some(campo => campo === '');

    if (campoVacio) {
      alert('Por favor, rellena todos los campos.');
    } else {
      // Si todos los campos están llenos, enviar el formulario
      this.submit();
    }
  };
});


document.addEventListener("DOMContentLoaded", function() {
    document.querySelector('form').onsubmit = function() {
        var carrera = document.getElementById('carrera').value;
        if(carrera == "0") {
            alert("Por favor, seleccione una carrera.");
            return false; // Evita que el formulario se envíe
        }
        return true; // Permite que el formulario se envíe
    };
});