document.addEventListener('DOMContentLoaded', () => {
    const serviceForm = document.getElementById('serviceSearchForm');
    const searchResult = document.getElementById('searchResult');
    const resultService = document.getElementById('resultService');
    const resultLocation = document.getElementById('resultLocation');
    const resultLink = document.getElementById('resultLink');
    const clearSearch = document.getElementById('clearSearch');

    if (serviceForm && searchResult) {
        serviceForm.addEventListener('submit', (event) => {
            event.preventDefault();
            const service = document.getElementById('service').value;
            const location = document.getElementById('location').value.trim();

            resultService.textContent = service;
            resultLocation.textContent = location;
            if (resultLink) {
                resultLink.href = `professionals.php?service=${encodeURIComponent(service)}&location=${encodeURIComponent(location)}`;
            }
            searchResult.classList.remove('d-none');
        });

        clearSearch?.addEventListener('click', () => {
            serviceForm.reset();
            searchResult.classList.add('d-none');
        });
    }

    const stars = document.querySelectorAll('.rating-star');
    let selectedRating = 0;
    stars.forEach((star) => {
        star.addEventListener('click', () => {
            selectedRating = Number(star.dataset.rating);
            stars.forEach((item) => {
                item.textContent = Number(item.dataset.rating) <= selectedRating ? '★' : '☆';
            });
        });
    });

    const reviewForm = document.getElementById('reviewForm');
    if (reviewForm) {
        reviewForm.addEventListener('submit', (event) => {
            event.preventDefault();
            if (!selectedRating) {
                alert('Please choose a rating.');
                return;
            }
            alert('Thank you! Your review has been submitted.');
            reviewForm.reset();
            selectedRating = 0;
            stars.forEach((item) => {
                item.textContent = '☆';
            });
            const modal = bootstrap.Modal.getInstance(document.getElementById('reviewModal'));
            modal?.hide();
        });
    }

    const professionalForm = document.getElementById('professionalForm');
    const professionalSuccess = document.getElementById('professionalSuccess');
    if (professionalForm) {
        professionalForm.addEventListener('submit', (event) => {
            event.preventDefault();
            professionalForm.classList.add('d-none');
            professionalSuccess?.classList.remove('d-none');
        });
    }

    const contactForm = document.getElementById('contactForm');
    const contactSuccess = document.getElementById('contactSuccess');
    if (contactForm && contactSuccess) {
        contactForm.addEventListener('submit', (event) => {
            event.preventDefault();
            contactForm.classList.add('d-none');
            contactSuccess.classList.remove('d-none');
        });
    }
});
