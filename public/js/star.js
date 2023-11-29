// script.js
document.addEventListener('DOMContentLoaded', function () {
    const stars = document.querySelectorAll('.rating .star');
    const ratingValue = parseInt(document.querySelector('.rating').getAttribute('data-rating'));

    stars.forEach((star, index) => {
        star.addEventListener('click', function () {
            resetStars();
            highlightStars(index + 1);
        });

        star.addEventListener('mouseover', function () {
            resetStars();
            highlightStars(index + 1);
        });

        star.addEventListener('mouseout', function () {
            resetStars();
            highlightStars(ratingValue);
        });
    });

    function resetStars() {
        stars.forEach(star => {
            star.classList.remove('fas');
            star.classList.add('far');
        });
    }

    function highlightStars(count) {
        for (let i = 0; i < count; i++) {
            stars[i].classList.remove('far');
            stars[i].classList.add('fas');
        }
    }

    highlightStars(ratingValue);
});
