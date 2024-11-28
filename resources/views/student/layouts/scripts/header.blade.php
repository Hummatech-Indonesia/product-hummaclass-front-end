const categoryDropdown = document.getElementById('category-dropdown');
const categoryOptions = document.getElementById('category-options');
const subcategoryDropdown = document.getElementById('subcategory-dropdown');

const categories = {};

// Ambil pilihan subkategori dari localStorage saat halaman dimuat
const selectedSubCategory = localStorage.getItem('selectedSubCategory');
if (selectedSubCategory) {
    $('#subcategory-dropdown').data("selected", selectedSubCategory).text(selectedSubCategory);
}

// Fungsi untuk memuat subkategori
function loadSubcategories(categoryName) {
    const subcategories = categories[categoryName] || [];
    subcategoryDropdown.innerHTML = '';

    if (subcategories.length) {
        subcategories.forEach(sub => {
            const subItem = document.createElement('div');
            subItem.className = 'subcategory-item';
            subItem.textContent = sub;
            subItem.addEventListener('click', () => {
                $('#subcategory-dropdown').data("selected", sub).text(sub);
                localStorage.setItem('selectedSubCategory', sub);
            });
            subcategoryDropdown.appendChild(subItem);
        });
    } else {
        subcategoryDropdown.innerHTML = '<div class="no-subcategory">Tidak ada subkategori</div>';
    }
}

// Event listener untuk kategori dropdown
categoryDropdown.addEventListener('click', () => {
    categoryOptions.classList.toggle('show');
});

// Menangani hover dan klik pada kategori
categoryOptions.addEventListener('mouseover', event => {
    const category = event.target.getAttribute('data-category');
    if (category) {
        loadSubcategories(category);
        showSubcategoryDropdown();
    }
});

categoryOptions.addEventListener('click', event => {
    const category = event.target.getAttribute('data-category');
    if (category) {
        categoryDropdown.textContent = event.target.textContent;
        categoryOptions.style.display = 'none';
        loadSubcategories(category);
        showSubcategoryDropdown();
    }
});

// Menampilkan dropdown subkategori
function showSubcategoryDropdown() {
    subcategoryDropdown.style.display = 'block';
    subcategoryDropdown.style.top = `${categoryOptions.offsetHeight}px`;
    subcategoryDropdown.style.left = '100%'; // Posisi di sebelah kanan kategori options
}
