//theme change
function toggleTheme() {
  const body = document.body;
  body.classList.toggle("dark-mode");
  console.log('worked')
}


// All_pages Javascript Start
// Select All checkbox functionality
const selectAllCheckbox = document.querySelector('.select-all input');
const checkboxes = document.querySelectorAll('.select');

selectAllCheckbox.addEventListener('change', () => {
  checkboxes.forEach(checkbox => {
    checkbox.checked = selectAllCheckbox.checked;
  });
});

// Edit and Delete button functionality
const editButtons = document.querySelectorAll('.edit-btn');
const deleteButtons = document.querySelectorAll('.delete-btn');

editButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Perform edit action here
  });
});

deleteButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Perform delete action here
  });
});

// All_pages Javascript End