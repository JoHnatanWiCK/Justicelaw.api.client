document.querySelectorAll('.filter-menu button').forEach(button => {
    button.addEventListener('click', function() {
      document.querySelectorAll('.filter-menu button').forEach(btn => {
        btn.style.color = '';
      });

      this.style.color = '#CF9E3E';
    });
  });


  const botones = document.querySelectorAll(".filter-button");

        botones.forEach((boton) => {
          boton.addEventListener("click", () => {
            botones.forEach((btn) => btn.classList.remove("active"));

            boton.classList.add("active");
          });
        });

        



        document.addEventListener('DOMContentLoaded', function () {

          document.getElementById('btnDesp').addEventListener('click', function(){
            window.location.href="/informacionDespido"
          });
      
          document.getElementById('btnGuia').addEventListener('click', function(){
            window.location.href="/informacionAccidente"
          });

          document.getElementById('btnConsu').addEventListener('click', function(){
            window.location.href="/informacionConsumidor"
          });

          document.getElementById('btnInquilino').addEventListener('click', function(){
            window.location.href="/informacionArrendamiento"
          });
      
          document.getElementById('btnAspect').addEventListener('click', function(){
            window.location.href="/informacionNegocio"
          });
      
          document.getElementById('btnDest').addEventListener('click', function(){
            window.location.href="/informacionPension"
          });

          document.getElementById('btnDer').addEventListener('click', function(){
            window.location.href="/informacionesLaboral"
          });
          
         
        });

        
const legalFiles = {
  'informacion': '/informaciones',
  'laboral': '/informacionesLaboral',
  'trabajadores': '/derechosTrabajadores',
  'arrendamiento': '/informacionArrendamiento',
  'despido': '/informacionDespido',
  'divorcio': '/informacionDivorcio',
  'negocio': '/informacionNegocio',
  'pension': '/informacionPension',
  'testamento': '/informacionTestamento',
  'accidente': '/informacionAccidente',
  'consumidor': '/informacionConsumidor',
  'seguridad social': '/informacionSeguridadSocial',
  'sst': '/informacionSST',
  'internacional laboral': '/informacionIntLab',
  'educacion': '/informacionEducacion',
  'vida familiar': '/informacionVidaFamiliar',
  'trabajo infantil': '/informacionTrabajoInfantil',
  'contrato': '/informacionContrato',
  'salud': '/informacionSalud',
  'participacion': '/informacionParticipacion',
  'voto': '/informacionVoto',
  'cargo': '/informacionCargo',
  'consulta': '/informacionConsulta',
  'peticiones': '/informacionPeticiones',
  'plebiscito': '/informacionPlebiscito',
  'autor': '/informacionAutor'
};


document.getElementById('buscarBtn').addEventListener('click', function(e) {
  e.preventDefault(); 
  

  var searchQuery = document.querySelector('.search-bar input').value.trim().toLowerCase();

  const ruta = legalFiles[searchQuery];
  
  if (ruta) {

      window.location.href = ruta;
  } else {

      alert("No se encontró información con esa búsqueda.");
  }
});
