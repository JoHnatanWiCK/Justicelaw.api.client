
document.getElementById('category-filter').addEventListener('change', function () {
    const selectedCategory = this.value;
    const cards = document.querySelectorAll('.card');

    cards.forEach(card => {
        const categoryId = card.getAttribute('data-category-id');
        if (selectedCategory === '' || categoryId === selectedCategory) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
});





function showModal(id, title, content, date,user,last) {
    document.getElementById('smodal').style.display = 'flex';
    

    document.getElementById('modal-user').innerText = user+" "+last;
    document.getElementById('modal-title').innerText = title;
    document.getElementById('modal-content').innerText = content;
    document.getElementById('modal-date').innerText = date;

    document.querySelectorAll('.post').forEach(post => {
        if (post.getAttribute('data-question-id') === id.toString()) {
            post.style.display = 'block';
        } else {
            post.style.display = 'none';
        }
    });  
   
}

function closeModal() {
    document.getElementById('smodal').style.display = 'none';
}

document.getElementById('show-more').addEventListener('click', function() {
    const extraCategories = document.querySelectorAll('.extra-category');
    const isHidden = extraCategories[0].style.display === 'none';

    extraCategories.forEach(function(category) {
        category.style.display = isHidden ? 'list-item' : 'none';
    });

    this.textContent = isHidden ? 'Ocultar' : 'Ver más';
});


       
    





        //cambiar a home
document.getElementById('home').addEventListener('click', function(event) {
    event.preventDefault(); 
    window.location.href = '../home/home.html'; 
});



document.getElementById('show-more').addEventListener('click', function() {
    document.querySelectorAll('.extra-category').forEach(function(category) {
        category.style.display = 'list-item';
    });
    this.style.display = 'none'; 
});




    