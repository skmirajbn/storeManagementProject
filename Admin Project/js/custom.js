

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

// // All Includes
// //all Category
// function allCategories(event){
//   include(event,"pages/all_categories.php");
// }

// // Add Category
// function addCategory(event){
//   include(event,"pages/add_category.php", "addCategory" , "#response");
//   }
// //Add SubCategory
// function addSubCategory(event){
//   include(event,"pages/add_subCategory.php");
// }


//Listining Forms
document.addEventListener('submit', function(event){
  event.preventDefault();
  let form = event.target.closest('form');
  formSubmit(form);
});

//Listing all links and actions
document.addEventListener('click', function(event){
  let target = event.target;
  if(target.closest('a')){
      //loading messagin showing
      let loading = document.getElementById('loading');
      loading.innerText = "Processing...";


      let url = target.getAttribute('href');
      include(event,url);
  }
})







//common Function for include
function include(event, url){
  event.preventDefault();
    // breadcrumb
  let breadcrumb = document.getElementById('lastBreadCrumb');
  let container =document.querySelector(".main_content");


  let breadCrumbValue = url.split("/").pop().split('.').slice(0,-1).join('').replace(/_/g, ' ').replace(/\b\w/g, char => char.toUpperCase());

  

    let xhr = new XMLHttpRequest();
    xhr.open('POST', url);
    xhr.onload = function() {
      if (xhr.status === 200) {
        // remove loading message
        loading.innerText = "";
        // Handle success response
        container.innerHTML = this.responseText;
        //updated breadCrumb
        breadcrumb.innerText = breadCrumbValue;
        
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
function formSubmit(form){
      var formData = new FormData(form); // Get form data
      var xhr = new XMLHttpRequest(); // Create AJAX request
      xhr.open('POST', 'formServer.php');
      document.querySelector('#response').innerHTML = 'Submitting...';
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            var response = this.responseText;
            // let allInput = form.querySelectorAll("input");
            // let btnValue = allInput[allInput.length-1].value;
            // allInput.forEach((x)=>{
            //   x.value = "";
            // })
            // allInput[allInput.length-1].value = btnValue; 

            // Handle the response here
            document.querySelector('#response').innerHTML = response;
          } else {
            console.error('AJAX request failed.');
          }
        }
      };
    
      xhr.send(formData); // Send form data
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