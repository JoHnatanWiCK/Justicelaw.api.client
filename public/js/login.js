document.getElementById('btnInicio').addEventListener('click', function(e) {
    window.location.href = "/homeLogin";
});

document.querySelector('a').addEventListener('click', function(e) {
    window.location.href = this.href;
});


document.getElementById('btnInicio').addEventListener('click', function (event) {
    // Prevenir la redirección si hay errores
    event.preventDefault();

    // Obtener los valores de los campos
    const email = document.getElementById('gmail').value.trim();
    const password = document.getElementById('contraseña').value.trim();

    // Mensajes de error
    let errores = [];

    // Validaciones
    if (email === '' || !validarEmail(email)) {
        errores.push('Introduce un correo electrónico válido.');
    }
    if (password === '') {
        errores.push('El campo "Contraseña" es obligatorio.');
    }

    // Si hay errores, se muestran y se evita la redirección
    if (errores.length > 0) {
        alert(errores.join('\n'));
    } else {
        // Si no hay errores, puedes permitir el envío del formulario
        document.getElementById('formLogin').submit();
    }
});

// Función para validar el formato del email
function validarEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}


