document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('btnVerificarUno');
    if (btn) {
        btn.addEventListener('click', function(e) {
            window.location.href = "/verificarAbogadoDos";
        });
    }
});



document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('btnVerificarDos');
    if (btn) {
        btn.addEventListener('click', function(e) {
            window.location.href = "/verificarAbogadoTres";
        });
    }
});



document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('btnVerificarTres');
    if (btn) {
        btn.addEventListener('click', function(e) {
            window.location.href = "/homeLogin";
        });
    }
});
