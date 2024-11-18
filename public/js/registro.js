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

    const name = document.querySelector('[name="nombre"]').value;
    const last_name = document.querySelector('[name="apellido"]').value;
    const type_document_id = document.querySelector('[name="tip_doc"]').value;
    const document_number = document.querySelector('[name="num_doc"]').value;
    const email = document.querySelector('[name="gmail"]').value;
    const password = document.querySelector('[name="contraseña"]').value;

    try{
         const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/auth/register',{

            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(
                {
                    name,
                    last_name,
                    type_document_id,
                    document_number,
                    email,
                    password,
                }),
         });

         const data = await response.json();

         if(response.ok){
            alert('Registro exitoso');

            window.location.href = '/homeLogin';
         }else{
            alert('Error registro' + JSON.stringify(data));
         }
    } catch (error){

        console.error('Error en e registro'+error);
        alert('Error en el registro');
    }
}


document.querySelector('a').addEventListener('click', function(e) {
    window.location.href = this.href;
});

