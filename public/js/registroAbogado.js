

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

async function registroAbogado(event) {
    event.preventDefault();

    const name = document.querySelector('[name="nombreAbogado"]').value;
    const last_names = document.querySelector('[name="apellidoAbogado"]').value;
    const type_document_id = document.querySelector('[name="tip_doc"]').value;
    const document_number = document.querySelector('[name="num_docAbogado"]').value;
    const email = document.querySelector('[name="gmailAbogado"]').value;
    const password = document.querySelector('[name="contraseñaAbogado"]').value;

    console.log('Formulario:', { name, last_names, type_document_id, document_number, email, password });

    clearErrorMessages();

    let formValid = true;

    if (!name) {
        showError('nombre', 'Este campo es obligatorio');
        formValid = false;
    }

    if (!last_names) {
        showError('apellido', 'Este campo es obligatorio');
        formValid = false;
    }

    if (!type_document_id) {
        showError('tip_doc', 'Este campo es obligatorio');
        formValid = false;
    }

    if (!document_number) {
        showError('num_doc', 'Este campo es obligatorio');
        formValid = false;
    }

    if (!email) {
        showError('gmail', 'Este campo es obligatorio');
        formValid = false;
    }
    // else {
    //     const emailExists = await checkEmailExists(email);
    //     if (emailExists) {
    //         showError('gmail', 'Este correo ya está registrado');
    //         formValid = false;
    //     }
    // }

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
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/registrarLawyer', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify({
                name,
                last_names,
                type_document_id,
                document_number,
                email,
                password,
            }),
        });


        const data = await response.json();

        // Si la respuesta no es exitosa
        if (!response.ok) {
            if (data.error && data.error.includes('correo')) {

                showError('gmail', data.error);
            } else {

                showError('form', 'Error en el registro: ' + JSON.stringify(data));
            }
            return;
        }

        const lawyerId = data.id;
        console.log('Abogado registrado:', data);

        localStorage.setItem('lawyerId', lawyerId);


        window.location.href = '/verificarAbogado';


    } catch (error) {
        console.error('Error en el registro:', error);
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

function clearErrorMessages() {
    const errorElements = document.querySelectorAll('[id^="error"]');
    errorElements.forEach(el => {
        el.textContent = '';
    });
}

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
        return data.exists;
    } catch (error) {
        console.error('Error al verificar el correo:', error);
        return false;
    }
}

const form = document.getElementById('registroForm');
if (form) {
    form.addEventListener('submit', registro);
}


document.querySelector('a').addEventListener('click', function(e) {
    window.location.href = this.href;
});

document.getElementById('togglePassword').addEventListener('click', function() {
    const passwordField = document.getElementById('contraseñaAbogado');
    const type = passwordField.type === 'password' ? 'text' : 'password';
    passwordField.type = type;

    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});
