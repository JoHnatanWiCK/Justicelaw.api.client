document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById("logoutModal");
    var openModalButtons = document.querySelectorAll("#openModal, #openModal2");

    openModalButtons.forEach(button => {
        button.onclick = function() {
            modal.style.display = "block";
        };
    });


    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
});
