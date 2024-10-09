document.getElementById('btnRegistro').addEventListener('click', function(e) {
    window.location.href = "/homeLogin";
});

document.querySelector('a').addEventListener('click', function(e) {
    window.location.href = this.href;
});


document.getElementById('btnRegistro').addEventListener('click', function (event) {
    // Prevenir la redirección si hay errores
    event.preventDefault();

    // Obtener los valores de los campos
    const nombre = document.getElementById('nombre').value.trim();
    const apellido = document.getElementById('apellido').value.trim();
    const tip_doc = document.getElementById('tip_doc').value.trim();
    const num_doc = document.getElementById('num_doc').value;
    const email = document.getElementById('gmail').value.trim();
    const contraseña = document.getElementById('contraseña').value;

    // Mensajes de error
    let errores = [];

    // Validaciones
    if (nombre === '') {
        errores.push('El campo "Nombres" es obligatorio.');
    }
    if (apellido === '') {
        errores.push('El campo "Apellidos" es obligatorio.');
    }
    if (tip_doc === '') {
        errores.push('El campo "Tipo de Documento" es obligatorio.');
    }
    if (num_doc === '') {
        errores.push('Debes seleccionar un tipo de documento.');
    }
    if (email === '' || !validarEmail(email)) {
        errores.push('Introduce un correo electrónico válido.');
    }
    if (contraseña === '') {
        errores.push('El campo "Contraseña" es obligatorio.');
    }


    // Si hay errores, se muestran y se evita la redirección
    if (errores.length > 0) {
        alert(errores.join('\n'));
    } else {
        // Si no hay errores, puedes permitir el envío del formulario o hacer redirección
        alert('Registro exitoso');
        // Aquí podrías permitir la redirección
        // event.target.form.submit(); // Esto simula el envío del formulario
    }
});

// Función para validar el formato del email
function validarEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}
