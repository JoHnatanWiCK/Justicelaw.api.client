document.addEventListener('DOMContentLoaded', async () => {
    const selectTypeDoc = document.querySelector('#tip_doc_web');

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/typeDocuments');
        const typeDocuments = await response.json();

        typeDocuments.forEach(doc => {
            const option = document.createElement('option');
            option.value = doc.id;
            option.textContent = doc.code;
            selectTypeDoc.appendChild(option);
        });
    } catch (error) {
        console.error('Error al cargar los tipos de documento:', error);
    }
});

async function registro(event) {
    event.preventDefault();

    // Obtener valores de los campos
    const name = document.querySelector('[name="nombre"]').value;
    const last_name = document.querySelector('[name="apellido"]').value;
    const type_document_id = document.querySelector('[name="tip_doc"]').value;
    const document_number = document.querySelector('[name="num_doc"]').value;
    const email = document.querySelector('[name="gmail"]').value;
    const password = document.querySelector('[name="contraseña"]').value;

    // Limpiar mensajes de error anteriores
    clearErrorMessages();

    // Validaciones
    let formValid = true;

    // Validar nombre
    if (!name) {
        showError('nombre', 'Este campo es obligatorio');
        formValid = false;
    }

    // Validar apellido
    if (!last_name) {
        showError('apellido', 'Este campo es obligatorio');
        formValid = false;
    }

    // Validar tipo de documento
    if (!type_document_id) {
        showError('tip_doc', 'Este campo es obligatorio');
        formValid = false;
    }

    // Validar número de documento
    if (!document_number) {
        showError('num_doc', 'Este campo es obligatorio');
        formValid = false;
    }

    // Validar email
    if (!email) {
        showError('gmail', 'Este campo es obligatorio');
        formValid = false;
    } else {
        // Validar si el correo ya existe
        const emailExists = await checkEmailExists(email);
        if (emailExists) {
            showError('gmail', 'Este correo ya está registrado');
            formValid = false;
        }
    }

    // Validar contraseña
    if (!password) {
        showError('contraseña', 'Este campo es obligatorio');
        formValid = false;
    } else if (password.length < 8) {
        showError('contraseña', 'La contraseña debe tener al menos 8 caracteres');
        formValid = false;
    }

    // Si el formulario no es válido, no continuar
    if (!formValid) return;

    // Enviar formulario si es válido
    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/auth/register', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                name,
                last_name,
                type_document_id,
                document_number,
                email,
                password,
            }),
        });

        const data = await response.json();

        if (response.ok) {
            window.location.href = '/login';
        } else {
            showError('form', 'Error en el registro: ' + JSON.stringify(data));
        }
    } catch (error) {
        console.error('Error en el registro:', error);
        showError('form', 'No se pudo realizar el registro. Intenta más tarde.');
    }
}

// Función para mostrar los mensajes de error debajo de los campos
function showError(field, message) {
    const errorDiv = document.getElementById('error' + field.charAt(0).toUpperCase() + field.slice(1));
    if (errorDiv) {
        errorDiv.textContent = message;
        errorDiv.style.color = 'red';
    }
}

// Función para limpiar los mensajes de error
function clearErrorMessages() {
    const errorElements = document.querySelectorAll('[id^="error"]');
    errorElements.forEach(el => {
        el.textContent = '';
    });
}

// Función para verificar si el correo ya existe
async function checkEmailExists(email) {
    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/auth/check-email', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ email })
        });

        const data = await response.json();
        return data.exists; // Asumimos que la respuesta tiene un campo "exists" que indica si el correo ya está registrado
    } catch (error) {
        console.error('Error al verificar el correo:', error);
        return false;
    }
}

// Asociar el evento de submit al formulario
const form = document.getElementById('registroForm');
if (form) {
    form.addEventListener('submit', registro);
}


document.querySelector('a').addEventListener('click', function(e) {
    window.location.href = this.href;
});

