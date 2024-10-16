document.querySelectorAll('.faq-item').forEach(function(faqItem) {
    const plusIcon = faqItem.querySelector('.plus-icon'); 
    const minusIcon = faqItem.querySelector('.minus-icon'); 
    const answer = faqItem.nextElementSibling; 

    const toggleAnswer = () => {
        if (answer.style.maxHeight) {
            answer.style.maxHeight = null;
            answer.style.opacity = '0';
            plusIcon.style.display = 'inline-block';
            minusIcon.style.display = 'none'; 
        } else {
            answer.style.maxHeight = (answer.scrollHeight + 50) +  "px";
            answer.style.opacity = '1';
            plusIcon.style.display = 'none'; 
            minusIcon.style.display = 'inline-block';
        }
    };

    faqItem.addEventListener('click', toggleAnswer);
    plusIcon.addEventListener('click', function(event) {
        event.stopPropagation(); 
        toggleAnswer();
    });
    minusIcon.addEventListener('click', function(event) {
        event.stopPropagation(); 
        toggleAnswer();
    });
});
