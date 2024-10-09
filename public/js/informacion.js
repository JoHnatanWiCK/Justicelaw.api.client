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
        });
  
        