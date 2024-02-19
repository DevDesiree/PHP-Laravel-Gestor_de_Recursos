document.addEventListener('DOMContentLoaded', function () {
    console.log("Script loaded");
    let searchInput = document.getElementById('search');

    searchInput.addEventListener('input', function () {
        let searchTerm = this.value.trim().toLowerCase();

        let resourceCards = document.querySelectorAll('.resource-card');

        resourceCards.forEach(function (card) {
            let author = card.querySelector('.resource-author').innerText.toLowerCase();
            let title = card.querySelector('.resource-title').innerText.toLowerCase();

            if (author.includes(searchTerm) || title.includes(searchTerm)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});