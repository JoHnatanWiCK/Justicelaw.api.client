document.addEventListener('DOMContentLoaded', () => {
    // Predefinir las opciones para el select
    const levelOptions = ["Universidad", "Maestría", "Tecnólogo", "Técnico"];
    const select = document.getElementById("neducativo");

    // Agregar las opciones al select
    levelOptions.forEach(option => {
        const optionElement = document.createElement("option");
        optionElement.value = option;
        optionElement.textContent = option;
        select.appendChild(optionElement);
    });

    // Manejar el envío del formulario
    const form = document.getElementById("formPasoDos");
    form.addEventListener('submit', (event) => {
        event.preventDefault(); // Evitar que se recargue la página al enviar el formulario

        // Obtener los valores seleccionados
        const selectedLevel = select.value;
        const trainingPlace = document.getElementById("lformacion").value;

        // Limpiar los mensajes de error previos
        document.getElementById('errorEducativo').textContent = '';
        document.getElementById('errorLugar').textContent = '';

        let valid = true;  // Variable para verificar si todos los campos son válidos

        // Validar el campo de nivel educativo
        if (!selectedLevel) {
            document.getElementById('errorEducativo').textContent = 'Este campo es obligatorio.';
            valid = false;
        }

        // Validar el campo de lugar de formación
        if (!trainingPlace) {
            document.getElementById('errorLugar').textContent = 'Este campo es obligatorio.';
            valid = false;
        }

        // Si todos los campos son válidos, guardar y redirigir
        if (valid) {
            // Guardar los datos en localStorage
            localStorage.setItem("selectedLevel", selectedLevel);
            localStorage.setItem("trainingPlace", trainingPlace);

            // Redirigir a la página siguiente
            window.location.href = "/verificarAbogadoTres";  // Cambiar la URL según sea necesario
        }
    });
});
