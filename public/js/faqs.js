document.querySelectorAll('.faq-item').forEach(function(faqItem) {
    const icon = faqItem.querySelector('.plus-icon');
    const toggleAnswer = () => {
        const answer = faqItem.nextElementSibling; 
        document.querySelectorAll('.faq-answer').forEach(function(ans) {
            ans.style.maxHeight = null;  
            ans.style.opacity = '0';
        });
        document.querySelectorAll('.plus-icon').forEach(function(icon) {
            icon.src = "../../img/mas.png";  
        });
        
        if (answer.style.maxHeight) {
            answer.style.maxHeight = null;  
            answer.style.opacity = '0';  
            icon.src = "../../img/mas.png";  
        } else {
            answer.style.maxHeight = answer.scrollHeight + "px"; 
            answer.style.opacity = '1'; 
            icon.src = "../../img/cerrarsecion.png";
        }
    };
    faqItem.addEventListener('click', toggleAnswer);
    icon.addEventListener('click', function(event) {
        event.stopPropagation(); 
        toggleAnswer();
    });
});

var modal = document.getElementById("logoutModal");
var logoutBtn = document.querySelector('.sidebar ul li.logout a');
var closeBtn = document.getElementsByClassName("close")[0];
var confirmLogout = document.getElementById("confirmLogout");
var cancelLogout = document.getElementById("cancelLogout");
logoutBtn.onclick = function(event) {
    event.preventDefault(); 
    modal.style.display = "block";
}


closeBtn.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


confirmLogout.onclick = function() {
    alert("Cierre de sesión confirmado.");
    modal.style.display = "none";
}
