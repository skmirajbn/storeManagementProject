$(document).ready(function () {
  // Toggle theme
  $(document).on("click", "#themeToggleBtn", function () {
    $("body").toggleClass("dark-mode");
  });

  //Listining

  // Form submission
  $(document).on("submit", "form", function (event) {
    event.preventDefault();
    let form = $(this).closest("form");
    formSubmit(form[0]);
  });

  // Link actions
  $(document).on("click", "a", function (event) {
    let target = $(this);
    if (target.closest("a") && target.attr("data-disabled") !== "true") {
      let loading = $("#loading");
      loading.text("Processing...");

      let url = target.attr("href");
      include(event, url);
    }
  });

  // Include function
  function include(event, url) {
    event.preventDefault();
    let breadcrumb = $("#lastBreadCrumb");
    let container = $(".main_content");
    let loading = $("#loading");
    let breadCrumbValue = url
      .split("/")
      .pop()
      .split(".")
      .slice(0, -1)
      .join("")
      .replace(/_/g, " ")
      .replace(/\b\w/g, (char) => char.toUpperCase());

    $.ajax({
      url: url,
      type: "POST",
      success: function (response) {
        loading.text("");
        container.html(response);
        breadcrumb.text(breadCrumbValue);
      },
      error: function () {
        loading.text("Error");
      },
    });
  }

  // Form submission
  function formSubmit(form) {
    let formData = new FormData(form);
    let loading = $("#loading");
    let responseContainer = $("#response");
    responseContainer.html("Submitting...");

    $.ajax({
      url: "formServer.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        responseContainer.html(response);
      },
      error: function () {
        console.error("AJAX request failed.");
      },
    });
  }

  //product information Table colum hide

  $(document).on("load", "#product_information_table", function () {
    $("#product_information_table tr td:nth-child(6)").hide();
  });

  // Product information modal
  $(document).on("click", ".view", function () {
    let row = $(this).closest("tr");
    let productId = row.find("td").eq(1).text();
    let productName = row.find("td").eq(2).text();
    let productBrand = row.find("td").eq(3).text();
    let productCategory = $(this).closest("tr").find("td").eq(4).text();
    console.log(productCategory);
    let productSubCategory = $(this).closest("tr").find("td").eq(5).text();
    let productUnit = $(this).closest("tr").find("td").eq(6).text();
    let productSKU = $(this).closest("tr").find("td").eq(7).text();
    let productPrice = $(this).closest("tr").find("td").eq(8).text();
    let productDescription = $(this).closest("tr").find("td").eq(10).text();
    let productImage = $(this).closest("tr").find("img").attr("src");

    $("#product_view_modal").find(".modal-body td").eq(0).text(productId);
    $("#product_view_modal").find(".modal-body td").eq(1).text(productName);
    $("#product_view_modal").find(".modal-body td").eq(2).text(productBrand);
    $("#product_view_modal").find(".modal-body td").eq(3).text(productCategory);
    $("#product_view_modal").find(".modal-body td").eq(4).text(productSubCategory);
    $("#product_view_modal").find(".modal-body td").eq(5).text(productUnit);
    $("#product_view_modal").find(".modal-body td").eq(6).text(productSKU);
    $("#product_view_modal")
      .find(".modal-body td")
      .eq(7)
      .text(productPrice + "Tk");
    $("#product_view_modal").find(".modal-body td").eq(8).text(productDescription);
    $("#product_view_modal").find("img").attr("src", productImage);
  });

  // Retriving Sub Categories by Category ID
  $(document).on("change", "[name='product_category']", function () {
    let categoryId = $(this).val();
    let subCategoryDropdown = $("[name='product_sub_category']");
    console.log(categoryId);
    $.ajax({
      url: "pages/get_subCategories.php",
      method: "GET",
      data: { category_id: categoryId },
      beforeSend: function () {
        $("[name='product_sub_category']").empty().append("<option selected disabled>Loading</option>");
      },
      success: function (response) {
        subCategoryDropdown.empty().html(response);
      },
      error: function () {
        console.log("Error");
      },
    });
  });

  //Create order Section

  // // Add product
  // $(document).on("click", "#addProductBtn", function (event) {
  //   event.preventDefault();
  //   let productContainer = $(".product_container");
  //   let index = productContainer.children().length + 1;

  //   let productEntry = $("<div>").addClass("product_entry");

  //   productEntry.html(`
  //   <label for="sku${index}">SKU:</label>
  //   <input style="display: inline-block;width: 100px;" class="form-control sku-input" type="text"
  //       placeholder="SKU" id="sku${index}" name="sku[${index}]">
  //   <label for="product${index}">Name:</label>
  //   <input style="display: inline-block;width: 250px;" class="form-control product-input" type="text"
  //       placeholder="Enter Product Name" id="product${index}" name="product[${index}]">
  //   <label for="quantity${index}">Quantity :</label>
  //   <input style="display: inline-block;width: 100px;" class="form-control" type="text"
  //       placeholder="Quantity" id="quantity${index}"> <span>&nbsp; &nbsp;</span>
  //   <span style="display:inline-block; background: #f1f1f1;margin-right:10px; padding:7px">--</span>
  //   <span style="display:inline-block; background: #f1f1f1;margin-right:10px; padding:7px">Per pc:
  //       --</span>
  //   <span style="display:inline-block; background: #f1f1f1;margin-right:10px; padding:7px">Total:
  //       --</span>
  //   <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
  //   `);

  //   productContainer.append(productEntry);
  // });

  // Remove product
  $(document).on("click", ".removeProduct", function () {
    $(this).closest(".product_entry").remove();
  });

  //Listening the Product Search Field
  let debounceTimer;
  $(document).on("input", "#product_search", function (e) {
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(function () {
      let inputValue = e.target.value;
      $.ajax({
        url: "pages/get_all_products.php",
        method: "POST",
        // dataType: "json",
        data: {
          search: inputValue,
        },
        beforeSend: function () {
          console.log("sending");
        },
        success: function (response) {
          $(".products_group").empty();
          productObj = JSON.parse(response);
          console.log(productObj);
          productObj.forEach(function (p) {
            $(".products_group").append(`
          <div class="card product d-inline-block p-1" style="width: 10rem">
                    <div class="img_container"><img src="uploads/images/${p.product_image}"
                            class="card-img-top img-fluid" alt="..."></div>
                    <div class="card-body">
                        <h5 class="card-title small">
                        ${p.product_name}
                        </h5>
                        <button class="add_product btn d-block mx-auto w-100 mybtn-hightlight" data-sku="${p.sku}" data-sellingPrice="${p.selling_price}"
                            value="${p.product_id}">ADD</button>
                    </div>
                </div>
          `);
          });
        },
        error: function () {
          console.log("error");
        },
        complete: function () {
          console.log("completed");
        },
      });
    }, 300);
  });

  // Listening The Add prodcut Button and Add product to the Invoice
  $(document).on("click", ".add_product", function (e) {
    let productName = e.target.parentNode.parentNode.querySelector(".card-title").innerText;
    let addButton = e.target;
    let productId = e.target.value;
    let sku = e.target.getAttribute("data-sku");
    console.log("sku");
    let selling_price = e.target.getAttribute("data-sellingPrice");
    let productImage = e.target.parentNode.parentNode.querySelector("img").getAttribute("src");
    console.log(productImage);
    $("#sales_order_table").append(`
    <tr>
             <td>${sku}</td>
             <td>${productName}</td>
             <td><img style="width: 30px" src="${productImage}">
             </td>
             <td>Stock</td>
             <td class="quantity"><input class="form-control" style="width:60px" type="number" value="1"></td>
             <td class="selling_price">${selling_price}</td>
             <td class="total_price">${selling_price}</td>
             <td><i class="delete_row fa-solid fa-x" style="color:red"></i></td>
         </tr>
       `);
    calSubTotal();

    // $.ajax({
    //   url: "pages/get_product_info.php",
    //   method: "POST",
    //   dataType: "json",
    //   data: {
    //     product_id: productId,
    //   },
    //   beforeSend: function () {
    //     addButton.innerText = "Loading";
    //   },
    //   success: function (response) {
    //     $("#sales_order_table").append(`
    //     <tr>
    //         <td>${response.sku}</td>
    //         <td>${response.product_name}</td>
    //         <td><img style="width: 30px" src="uploads/images/${response.product_image}">
    //         </td>
    //         <td>Stock</td>
    //         <td class="quantity"><input class="form-control" style="width:60px" type="number" value="1"></td>
    //         <td class="selling_price">${response.selling_price}</td>
    //         <td class="total_price">${response.selling_price}</td>
    //         <td><i class="delete_row fa-solid fa-x" style="color:red"></i></td>
    //     </tr>
    //     `);
    //     addButton.innerText = "ADD";
    //     calSubTotal();
    //   },
    //   error: function () {
    //     console.log("error");
    //   },
    //   complete: function () {
    //     console.log("completed");
    //   },
    // });
  });

  //Listing Quantity and Total price Calculation
  $(document).on("change", ".quantity", function (e) {
    let quantity = e.target.value;
    let price = e.target.parentNode.parentNode.querySelector(".selling_price").innerText;
    let totalPrice = quantity * price;
    let totalElement = e.target.parentNode.parentNode.querySelector(".total_price");
    totalElement.innerText = totalPrice.toFixed(2);
    calSubTotal();
  });

  //Listing the Delete Row and Delete the data
  $(document).on("click", ".delete_row", function (e) {
    let row = e.target.parentNode.parentNode;
    row.remove();
    calSubTotal();
  });

  //SubTotal Funciton Defination
  function calSubTotal() {
    // Calculating The Subtotal Price
    let sum = 0;
    $(".total_price").each(function () {
      let totalPrice = $(this).text();
      totalPrice = parseInt(totalPrice);
      sum += isNaN(totalPrice) ? 0 : totalPrice;
    });
    let subTotal = sum.toFixed(2);
    $("#sub_total").text("Sub Total: " + subTotal + " Tk.");
  }

  //listening the customer phone for retriving customer data
  $(document).on("keyup", ".customer_phone", function () {
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(function () {
      let phoneNumber = $(".customer_phone").val();
      $.ajax({
        url: "pages/get_customerInfo.php",
        method: "POST",
        data: {
          customer_search: phoneNumber,
        },
        dataType: "json",
        beforeSend: function () {},
        success: function (response) {
          let matchCount = response.length;
          if (matchCount === 1) {
            $("#customer_match_count").text("Customer Match Found");
            addDisabledAttr();

            $("form").find(".form-control").attr("style", "border: 1px solid green");
            $("input[name='customer_phone']").eq(0).val(response[0].customer_phone);
            $("input[name='customer_id'").val(response[0].customer_id);
            $("input[name='customer_name'").val(response[0].customer_name);
            $("input[name='customer_email'").val(response[0].customer_email);
            $("input[name='customer_address'").val(response[0].customer_address);
          } else if (matchCount === 10) {
            //remove green border style
            $("form").find(".form-control").removeAttr("style");
            addDisabledAttr();
            removeInputValue();
            changeDisabledPlaceholderText();
            //Writing matched data
            $("#customer_match_count").text("More than 10 Matches Found");
          } else if (matchCount === 0) {
            $("#customer_match_count").text("No match Enter Customer Data");
            //remove green border style
            $("form").find(".form-control").removeAttr("style");

            removeDisabledInput();
            changeEnterPlaceholderText();
            removeInputValue();
          } else {
            $("#customer_match_count").text(matchCount + " Matches Found");
            removeInputValue();
            changeDisabledPlaceholderText();
          }
        },
        error: function () {},
      });
    }, 300);
  });

  //fucntion defination for customer data retriving

  function removeDisabledInput() {
    // removing disabled input
    $("form").find(".form-control").not(":eq(1)").removeAttr("disabled");
  }
  function changeEnterPlaceholderText() {
    // Changing placeholder text
    $("input[name='customer_phone'").attr("placeholder", "Enter Customer Phone");
    $("input[name='customer_id'").attr("placeholder", "Customer ID will be generated");
    $("input[name='customer_name'").attr("placeholder", "Enter Customer Name");
    $("input[name='customer_email'").attr("placeholder", "Enter Customer Email");
    $("input[name='customer_address'").attr("placeholder", "Enter Customer Address");
  }
  function changeDisabledPlaceholderText() {
    // Changing placeholder text
    $("input[name='customer_phone'").attr("placeholder", "Enter Customer Phone");
    $("input[name='customer_id'").attr("placeholder", "ID will be loaded");
    $("input[name='customer_name'").attr("placeholder", "Name will be loaded");
    $("input[name='customer_email'").attr("placeholder", "Email will be loaded");
    $("input[name='customer_address'").attr("placeholder", "Address will be loaded");
  }
  function addDisabledAttr() {
    //Adding disabled attribute
    $("input[name='customer_id']").attr("disabled", "");
    $("input[name='customer_name']").attr("disabled", "");
    $("input[name='customer_email']").attr("disabled", "");
    $("input[name='customer_address']").attr("disabled", "");
  }
  function removeInputValue() {
    //removing input value
    $("input[name='customer_id'").val("");
    $("input[name='customer_name'").val("");
    $("input[name='customer_email'").val("");
    $("input[name='customer_address'").val("");
  }
});
