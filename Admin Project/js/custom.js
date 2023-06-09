

//theme change
function toggleTheme() {
  const body = document.body;
  body.classList.toggle("dark-mode");
}

//Add & Remove Product

function addProduct(event){
  event.preventDefault();
  let prodcutContainer = document.querySelector(".product_container");
  let index = prodcutContainer.childElementCount + 1;

  let productEntry = document.createElement("div");
  productEntry.classList.add("product_entry");

  productEntry.innerHTML = `
  <label for="product${index}">Product Name:</label>
  <input style="display: inline-block;width: 250px;" class="form-control" type="text" placeholder="Enter Product Name" id="product${index}" name="product[${index}]">
  <label for="quantity${index}">Quantity :</label>
  <input style="display: inline-block;width: 130px;" class="form-control" type="text" placeholder="Enter Quantity" id="quantity${index}"> <span>&nbsp; &nbsp;</span>
  <button type="button" class="btn btn-danger" onclick="removeProduct(this)"><i class="fa-solid fa-trash"></i></button>`;

  prodcutContainer.appendChild(productEntry);
}

function removeProduct(productEntry){
  let parent = productEntry.parentElement;
  parent.remove();
}

// All Includes
//all Category
function allCategories(event){
  include(event,"pages/all_categories.php");
}

// Add Category
function addCategory(event){
  include(event,"pages/add_category.php", "addCategory" , "#response");
  }
//Add SubCategory
function addSubCategory(event){
  include(event,"pages/add_subCategory.php");
}

//common Function for include
function include(event, url, formId, responseId){
  event.preventDefault();
    // breadcrumb
  let breadcrumb = document.getElementById('lastBreadCrumb');
  let container =document.querySelector(".main_content");

  let breadCrumbValue = url.split("/").pop().split('.').slice(0,-1).join('').replace(/_/g, ' ').replace(/\b\w/g, char => char.toUpperCase());

  

    var xhr = new XMLHttpRequest();
    xhr.open('POST', url,);
    xhr.onload = function() {
      if (xhr.status === 200) {
        // Handle success response
        container.innerHTML = this.responseText;
        //updated breadCrumb
        breadcrumb.innerText = breadCrumbValue;
        // Add Event Listeners
       if(formId != undefined && responseId != undefined){
        formSubmit(formId, responseId);
       }
        
      } else {
        // Handle error response
        console.log(xhr.responseText);
      }
    };
    xhr.onerror = function() {
      // Handle network errors
      console.log("Network error occurred");
    };
    xhr.send();
}



//Common Form Submission Request and Response Receive Function 
function formSubmit(formId,responseId){
  document.getElementById(formId).addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent default form submission
      var form = event.target;
      var formData = new FormData(form); // Get form data
      console.log(form);
      console.log(formData.get("addCategory"));
      var xhr = new XMLHttpRequest(); // Create AJAX request
      xhr.open('POST', 'data.php');
      document.querySelector(responseId).innerHTML = 'Submitting...';
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            var response = this.responseText;
            // Handle the response here
            document.querySelector(responseId).innerHTML = response;
            console.log(response)
          } else {
            console.error('AJAX request failed.');
          }
        }
      };
    
      xhr.send(formData); // Send form data
   
  });
}










// // All_pages Javascript Start
// // Select All checkbox functionality
// const selectAllCheckbox = document.querySelector('.select-all input');
// const checkboxes = document.querySelectorAll('.select');

// selectAllCheckbox.addEventListener('change', () => {
//   checkboxes.forEach(checkbox => {
//     checkbox.checked = selectAllCheckbox.checked;
//   });
// });

// // Edit and Delete button functionality
// const editButtons = document.querySelectorAll('.edit-btn');
// const deleteButtons = document.querySelectorAll('.delete-btn');

// editButtons.forEach(button => {
//   button.addEventListener('click', () => {
//     // Perform edit action here
//   });
// });

// deleteButtons.forEach(button => {
//   button.addEventListener('click', () => {
//     // Perform delete action here
//   });
// });

// // All_pages Javascript End