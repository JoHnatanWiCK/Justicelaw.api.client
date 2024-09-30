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

  