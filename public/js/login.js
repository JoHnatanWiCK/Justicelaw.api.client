document.getElementById('btnInicio').addEventListener('click', function(e) {
    window.location.href = "/homeLogin";
});

document.querySelector('a').addEventListener('click', function(e) {
    window.location.href = this.href;
});


