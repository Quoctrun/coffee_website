// Utility function to get a product by ID
// function getProductById(id) {
//     return products.find(p => p.id === id);
// }

// Show the Add Product form
function showAddProductForm() {
    document.getElementById('addProductFr').style.display = 'flex';
}

// Hide the Add Product form
function hideAddProductForm() {
    document.getElementById('addProductFr').style.display = 'none';
}

function showElementById(id) {
    document.getElementById(id).style.display = 'flex';
}

function hideElementById(id) {
    document.getElementById(id).style.display = 'none';
}

function showAddProductFormYes() {
    document.getElementById('backround-form-buttons').style.display = 'flex';
}

function hideAddProductFormYes() {
    document.getElementById('backround-form-buttons').style.display = 'none';
    document.querySelectorAll('#addAccountForm input').forEach(input => input.value = '');
}

document.getElementById("br").addEventListener("click", function(event) {
    event.preventDefault();
})

// Add a new product
// function addProduct() {
//     const id = products.length ? products[products.length - 1].id + 1 : 1;
//     const name = document.getElementById('productName').value;
//     const price = document.getElementById('productPrice').value;
//     const imgInput = document.getElementById('productImg');
//     const img = imgInput.files[0]; // Handle file upload here
//     const category = document.getElementById('productCategory').value;

//     if (name && price && img && category) {
//         const reader = new FileReader();
//         reader.onload = function(e) {
//             products.push({ id, name, price, img: e.target.result, category });
//             renderProducts(getFilterFromURL());
//             hideAddProductForm();
//         };
//         reader.readAsDataURL(img); // Read image as base64 URL
//     } else {
//         alert('Invalid input. Please try again.');
//     }
// }

// Preview the selected image
// function previewImage() {
//     const fileInput = document.getElementById('productImg');
//     const imagePreview = document.getElementById('imagePreview');
    
//     if (fileInput.files && fileInput.files[0]) {
//         const reader = new FileReader();
        
//         reader.onload = function(e) {
//             imagePreview.src = e.target.result;
//             imagePreview.style.display = 'block'; // Show the image
//         };
        
//         reader.readAsDataURL(fileInput.files[0]);
//     } else {
//         imagePreview.src = '';
//         imagePreview.style.display = 'none'; // Hide the image if no file is selected
//     }
// }

// Show the Edit Product form with pre-filled data
// function showEditProductForm(id) {
//     const product = getProductById(id);
//     if (product) {
//         document.getElementById('editProductName').value = product.name;
//         document.getElementById('editProductPrice').value = product.price;
//         document.getElementById('editProductCategory').value = product.category;
        
//         // Display current product image
//         const currentImg = document.getElementById('currentProductImg');
//         currentImg.src = "../" + product.img; // Set the current image source
//         currentImg.style.display = 'block'; // Show the image element
        
//         // Add event listener to handle image file changes
//         document.getElementById('editProductImg').addEventListener('change', function(event) {
//             const file = event.target.files[0];
//             if (file) {
//                 const reader = new FileReader();
//                 reader.onload = function(e) {
//                     currentImg.src = e.target.result; // Update the image display
//                 };
//                 reader.readAsDataURL(file); // Read image as base64 URL
//             }
//         });
        
//         document.getElementById('editProductForm').style.display = 'flex';
//         document.getElementById('saveProductButton').onclick = () => saveProduct(id);
//     }
// }

// Save changes to the edited product
// function saveProduct(id) {
//     const product = getProductById(id);
//     if (product) {
//         const name = document.getElementById('editProductName').value;
//         const price = document.getElementById('editProductPrice').value;
//         const imgInput = document.getElementById('editProductImg');
//         const img = imgInput.files[0]; // Handle file upload here
//         const category = document.getElementById('editProductCategory').value;

//         if (name && price && category) {
//             const reader = img ? new FileReader() : null;
//             if (reader) {
//                 reader.onload = function(e) {
//                     product.name = name;
//                     product.price = price;
//                     product.img = e.target.result; // Update image
//                     product.category = category;
//                     renderProducts(getFilterFromURL());
//                     hideEditProductForm();
//                 };
//                 reader.readAsDataURL(img); // Read image as base64 URL
//             } else {
//                 product.name = name;
//                 product.price = price;
//                 product.category = category;
//                 renderProducts(getFilterFromURL());
//                 hideEditProductForm();
//             }
//         } else {
//             alert('Invalid input. Please try again.');
//         }
//     }
// }


// Hide the Edit Product form
// function hideEditProductForm() {
//     document.getElementById('editProductForm').style.display = 'none';
// }

// // Show confirmation modal for deletion
// function showConfirmationModal(id) {
//     document.getElementById('confirmationModal').style.display = 'flex';
//     document.getElementById('confirmDelete').onclick = () => confirmDelete(id);
//     document.getElementById('cancelDelete').onclick = cancelDelete;
// }

// // Confirm delete
// function confirmDelete(id) {
//     deleteProduct(id);
//     document.getElementById('confirmationModal').style.display = 'none';
// }

// // Cancel delete 
// function cancelDelete() {
//     document.getElementById('confirmationModal').style.display = 'none';
// }

// // Get filter value from URL parameters
// function getFilterFromURL() {
//     const urlParams = new URLSearchParams(window.location.search);
//     return urlParams.get('filter') || '';
// }



// // Function to group products by category
// function groupProductsByCategory(products) {
//     return products.reduce((groups, product) => {
//         if (!groups[product.category]) {
//             groups[product.category] = [];
//         }
//         groups[product.category].push(product);
//         return groups;
//     }, {});
// }

// Function to render products grouped by category
// function renderProductsGroupedByCategory() {
//     const groupedProducts = groupProductsByCategory(products);
//     const container = document.getElementById('product-list');
    
//     container.innerHTML = ''; // Clear existing content
    
//     for (const category in groupedProducts) {
//         const categorySection = document.createElement('div');
//         categorySection.classList.add('category-section');
        
//         const categoryTitle = document.createElement('h2');
//         if (category == 'tra') {
//             categoryTitle.textContent = `Category: Trà`;
//         } else if (category == 'banh') {
//             categoryTitle.textContent = `Category: Bánh`;
//         } else {
//             categoryTitle.textContent = `Category: Caffee`;
//         }
//         categorySection.appendChild(categoryTitle);
        
//         const table = document.createElement('table');
//         table.innerHTML = `
//             <thead>
//                 <tr>
//                     <th>ID</th>
//                     <th>Name</th>
//                     <th>Price</th>
//                     <th>Image</th>
//                     <th>Actions</th>
//                 </tr>
//             </thead>
//             <tbody>
//                 ${groupedProducts[category].map(product => `
//                     <tr>
//                         <td>${product.id}</td>
//                         <td>${product.name}</td>
//                         <td>${product.price}đ</td>
//                         <td><img src="../${product.img}" alt="${product.name}" width="50"></td>
//                         <td>
//                             <button onclick="showEditProductForm(${product.id})">Edit</button>
//                             <button onclick="showConfirmationModal(${product.id})">Delete</button>
//                         </td>
//                     </tr>
//                 `).join('')}
//             </tbody>
//         `;
//         categorySection.appendChild(table);
//         container.appendChild(categorySection);
//     }
// }

// Initialize rendering on page load
// document.addEventListener('DOMContentLoaded', () => {
//     if (document.getElementById('product-list')) {
//         renderProductsGroupedByCategory();
//     }
// });

document.querySelectorAll('.overview-item').forEach(item => {
    item.addEventListener('click', function() {
        // Lấy giá trị loại sản phẩm từ thuộc tính data-category
        const category = this.getAttribute('data-category');
        // Tạo URL với tham số lọc
        const url = new URL(window.location.href);
        url.searchParams.set('category_filter', category);
        // Chuyển hướng đến URL mới với tham số lọc
        window.location.href = url;
    });
});

// document.addEventListener('DOMContentLoaded', function () {
//     const addButton = document.querySelector('.add-product-button');
//     const addProductForm = document.getElementById('addproductform');

//     addButton.addEventListener('click', function () {
//         // Toggle the display of the form
//         if (addProductForm.style.display === 'none' || addProductForm.style.display === '') {
//             addProductForm.style.display = 'block';
//         } else {
//             addProductForm.style.display = 'none';
//         }
//     });
// });
