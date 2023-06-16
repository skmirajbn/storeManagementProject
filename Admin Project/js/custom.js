$(document).ready(function() {
  // Toggle theme
  $(document).on('click', '#themeToggleBtn', function() {
    $('body').toggleClass('dark-mode');
  });

  // Add product
  $(document).on('click', '#addProductBtn', function(event) {
    event.preventDefault();
    let productContainer = $('.product_container');
    let index = productContainer.children().length + 1;

    let productEntry = $('<div>').addClass('product_entry');

    productEntry.html(`
      <label for="product${index}">Product Name:</label>
      <input style="display: inline-block;width: 250px;" class="form-control" type="text" placeholder="Enter Product Name" id="product${index}" name="product[${index}]">
      <label for="quantity${index}">Quantity :</label>
      <input style="display: inline-block;width: 130px;" class="form-control" type="text" placeholder="Enter Quantity" id="quantity${index}">
      <span>&nbsp; &nbsp;</span>
      <button type="button" class="btn btn-danger removeProduct"><i class="fa-solid fa-trash"></i></button>
    `);

    productContainer.append(productEntry);
  });

  // Remove product
  $(document).on('click', '.removeProduct', function() {
    $(this).closest('.product_entry').remove();
  });

  // Form submission
  $(document).on('submit', 'form', function(event) {
    event.preventDefault();
    let form = $(this).closest('form');
    formSubmit(form);
  });

  // Link actions
  $(document).on('click', 'a', function(event) {
    let target = $(this);
    if (target.closest('a') && target.attr('data-disabled') !== 'true') {
      let loading = $('#loading');
      loading.text('Processing...');

      let url = target.attr('href');
      include(event, url);
    }
  });

  // Include function
  function include(event, url) {
    event.preventDefault();
    let breadcrumb = $('#lastBreadCrumb');
    let container = $('.main_content');
    let loading =$('#loading');
    let breadCrumbValue = url.split('/').pop().split('.').slice(0, -1).join('').replace(/_/g, ' ').replace(/\b\w/g, char => char.toUpperCase());

    $.ajax({
      url: url,
      type: 'POST',
      success: function(response) {
        loading.text('');
        container.html(response);
        breadcrumb.text(breadCrumbValue);
      },
      error: function() {
        loading.text('Error');
      }
    });
  }

  // Form submission
  function formSubmit(form) {
    let formData = new FormData(form[0]);
    let loading = $('#loading');
    let responseContainer = $('#response');
    responseContainer.html('Submitting...');

    $.ajax({
      url: 'formServer.php',
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
        responseContainer.html(response);
      },
      error: function() {
        console.error('AJAX request failed.');
      }
    });
  }

  //product information Table colum hide

  $(document).on('load' , '#product_information_table', function(){
    $('#product_information_table tr td:nth-child(6)').hide();
  })

  // Product information modal
  $(document).on('click', '.view', function() {
    let row = $(this).closest('tr');
    let productId = row.find('td').eq(1).text();
    let productName = row.find('td').eq(2).text();
    let productBrand = row.find('td').eq(3).text();
    let productCategory = $(this).closest('tr').find('td').eq(4).text();
    let productUnit = $(this).closest('tr').find('td').eq(5).text();
    let productSKU = $(this).closest('tr').find('td').eq(6).text();
    let productPrice = $(this).closest('tr').find('td').eq(7).text();
    let productDescription = $(this).closest('tr').find('td').eq(9).text();
    let productImage = $(this).closest('tr').find('img').attr('src');

    $('#product_view_modal').find('.modal-body td').eq(0).text(productId);
    $('#product_view_modal').find('.modal-body td').eq(1).text(productName);
    $('#product_view_modal').find('.modal-body td').eq(2).text(productBrand);
    $('#product_view_modal').find('.modal-body td').eq(3).text(productCategory);
    $('#product_view_modal').find('.modal-body td').eq(4).text(productUnit);
    $('#product_view_modal').find('.modal-body td').eq(5).text(productSKU);
    $('#product_view_modal').find('.modal-body td').eq(6).text(productPrice);
    $('#product_view_modal').find('.modal-body td').eq(7).text(productDescription);
    $('#product_view_modal').find('img').attr('src', productImage);
  });
});
