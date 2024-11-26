document.getElementById("formPasoTres").addEventListener("submit", async function (e) {
    e.preventDefault();

    const resumeInput = document.getElementById("resume");
    const errorMessageDiv = document.getElementById("error-message");

    if (!resumeInput.files.length) {
        errorMessageDiv.textContent = "Por favor, selecciona un archivo.";
        errorMessageDiv.style.display = "block";
        return;
    }

    const file = resumeInput.files[0];

    const validTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
    if (!validTypes.includes(file.type)) {
        errorMessageDiv.textContent = "Solo se aceptan archivos PDF, DOC o DOCX.";
        errorMessageDiv.style.display = "block";
        return;
    }

    const maxSize = 5 * 1024 * 1024;
    if (file.size > maxSize) {
        errorMessageDiv.textContent = "El archivo debe ser de 5 MB o menos.";
        errorMessageDiv.style.display = "block";
        return;
    }

    errorMessageDiv.style.display = "none";

    const cellPhone = localStorage.getItem('telefono');
    const country = localStorage.getItem('pais');
    const state = localStorage.getItem('estado');
    const city = localStorage.getItem('ciudad');
    const level = localStorage.getItem("selectedLevel");
    const trainingPlace = localStorage.getItem("trainingPlace");
    const lawyerId = localStorage.getItem('lawyerId');

    console.log({
        cell_phone: cellPhone,
        country_id: country,
        state_id: state,
        city_id: city,
        level: level,
        training_place: trainingPlace,
        lawyer_id: lawyerId
    });

    const formData = new FormData();
    formData.append('cell_phone', cellPhone);
    formData.append('country_id', country);
    formData.append('state_id', state);
    formData.append('city_id', city);
    formData.append('level', level);
    formData.append('training_place', trainingPlace);
    formData.append('lawyer_id', lawyerId);
    formData.append('resume', file);

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/verificationLawyer', {
            method: 'POST',
            body: formData
        });

        if (!response.ok) {
            throw new Error('Error en la respuesta del servidor: ' + response.status);
        }

        const data = await response.json();
        console.log('Registro exitoso:', data);
        window.location.href = '/verificarConfirmacion';
    } catch (error) {
        console.error('Error en el registro:', error);
    }
});
