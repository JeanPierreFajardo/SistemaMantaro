function filterResults() {
    let searchBox = document.getElementById('search-box').value.toLowerCase();
    let categoryFilter = document.getElementById('filter-category').value;
    let items = document.querySelectorAll('.item');
    
    items.forEach(item => {
        let title = item.querySelector('h3').innerText.toLowerCase();
        let description = item.querySelector('p').innerText.toLowerCase();
        let category = item.getAttribute('data-category');

        if (
            (title.includes(searchBox) || description.includes(searchBox)) &&
            (categoryFilter === "" || category === categoryFilter)
        ) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
}
