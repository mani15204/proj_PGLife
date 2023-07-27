const heart = document.querySelector(".heart-icon");
heart.addEventListener('click', function(){
    heart.classList.toggle('far');
    heart.classList.toggle('fas');
});