<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/style.css" />
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <script defer src="js/custom.js"></script>
  </head>
  <body>
    <div class="out_body">
      <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Code Scientist</a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"
                    >DashBoard</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#">Add Users</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#"
                    >Add Category</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#">Add Brands</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#"
                    >Add Products</a
                  >
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Other
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">About</a></li>
                    <li><a class="dropdown-item" href="#">Store</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                      <a class="dropdown-item" href="#">Trash</a>
                    </li>
                  </ul>
                </li>
              </ul>
              <i style="color: white; font-size: 20px;" class="fa-solid fa-droplet" onclick="toggleTheme()"></i>
              <ul class="nav_profile">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sk Miraj
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">My Profile</a></li>
                    <li><a class="dropdown-item" href="#">Manage Account</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                      <a class="dropdown-item" href="#">Logout</a>
                    </li>
                  </ul>
                </li>
              </ul>
              <div class="user_part">
                <img style="width: 40px;" class="" src="uploads/images/avatar.png" alt="avatar"/>
              </div>
              <!-- <form class="d-flex" role="search">
                <input
                  class="form-control me-2"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                />
                <button class="btn btn-outline-success" type="submit">
                  Search
                </button>
              </form> -->
            </div>
          </div>
        </nav>
      </header>
      <section class="innder_body row">
        <section class="sidebar col-md-4 col-xl-3 col-xxl-2">
          <div class="sidebar_container">
            <div class="user_part">
              <img class="" src="uploads/images/avatar.png" alt="avatar"/>
              <h5>Sk Miraj</h5>
              <p><i class="fas fa-circle"></i> Online</p>
            </div>
            <!-- Sidebar Menu Start -->
            <div class="accordion" id="accordionExample">
              <div class="side-body">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fa-solid fa-user"></i> &nbsp; Customers
                    </button>
                  </h2>
                  <div
                    id="collapseOne"
                    class="accordion-collapse collapse show"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""
                        ><i class="fa-sharp fa-solid fa-users"></i>&nbsp; All Customers</a
                      >
                    </div>
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""
                        ><i class="fa-solid fa-user-plus"></i>&nbsp; Add Customers</a
                      >
                    </div>
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""
                        ><i class="fa-solid fa-trash"></i>&nbsp; Restore Customer</a
                      >
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed" type="button" data-bs-toggle="collapse"  data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      <i class="fa-solid fa-box"></i>&nbsp; Products
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <a class="btn btn-block" href=""><i class="fa-solid fa-boxes-stacked"></i>&nbsp; All Products</a>
                      </div>
                      <div class="accordion-body">
                        <a class="btn btn-block" href=""><i class="fa-solid fa-box-open"></i>&nbsp; Add Products</a>
                      </div>
                      <div class="accordion-body">
                        <a class="btn btn-block" href=""><i class="fa-solid fa-trash"></i>&nbsp; Restore Product</a>
                      </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed" type="button" data-bs-toggle="collapse"  data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                      <i class="fa-solid fa-box"></i>&nbsp; Category
                    </button>
                  </h2>
                  <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <a class="btn btn-block" href=""><i class="fa-solid fa-sitemap"></i>&nbsp; All Categories</a>
                      </div>
                      <div class="accordion-body">
                        <a class="btn btn-block" href=""><i class="fa-solid fa-sitemap"></i>&nbsp; All SubCategories</a>
                      </div>
                      <div class="accordion-body">
                        <a class="btn btn-block" href=""><i class="fa-solid fa-circle-plus"></i>&nbsp; Add Category</a>
                      </div>
                      <div class="accordion-body">
                        <a class="btn btn-block" href=""><i class="fa-solid fa-screwdriver-wrench"></i>&nbsp; Reassign Sub Category</a>
                      </div>
                      <div class="accordion-body">
                        <a class="btn btn-block" href=""><i class="fa-solid fa-trash"></i>&nbsp; Restore Categories</a>
                      </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa-solid fa-cart-shopping"></i>&nbsp; Sales Order
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-cart-flatbed"></i>&nbsp; All Orders</a>
                    </div>
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-cart-plus"></i>&nbsp; Create Order</a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed" type="button"
                      data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      <i class="fa-solid fa-bag-shopping"></i>&nbsp; Purchase Order
                    </button>
                  </h2>
                  <div
                    id="collapseFour"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-layer-group"></i>&nbsp; All Orders</a>
                    </div>
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-cart-plus"></i>&nbsp; Create Order</a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      <i class="fa-solid fa-warehouse"></i>&nbsp; Inventory
                    </button>
                  </h2>
                  <div
                    id="collapseFive"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-cubes"></i>&nbsp; Current Stock</a>
                    </div>
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-file-pen"></i>&nbsp; Update Stock</a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      <i class="fa-solid fa-user"></i>&nbsp; Users
                    </button>
                  </h2>
                  <div
                    id="collapseSix"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-users"></i>&nbsp; All Users</a>
                    </div>
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-user-plus"></i>&nbsp; Add Users</a>
                    </div>
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-toolbox"></i>&nbsp; Roles</a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      <i class="fa-solid fa-chart-simple"></i>&nbsp; Reports/Analytics
                    </button>
                  </h2>
                  <div
                    id="collapseSeven"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-chart-line"></i>&nbsp; Sales Reports</a>
                    </div>
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-people-line"></i>&nbsp; Customer Reports</a>
                    </div>
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-truck-ramp-box"></i>&nbsp; Inventory Reports</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="bottom_sidebar">
              <a href=""><i class="fa-solid fa-user"></i> Profile</a><br>
              <a href=""><i class="fa-solid fa-gear"></i> Setting</a>

            </div>
          </div>
        </section>
        <section class="content col-md-8 col-xl-9 col-xxl-10">
          <!-- Breadcrump Start -->
          <nav class="breadcrumb" style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa-solid fa-house"></i> Project</a></li>
              <li class="breadcrumb-item active" aria-current="page">DashBoard</li>
            </ol>
          </nav>
           <!-- Breadcrump End -->
           <!-- Content Start -->
           
            <div class="main_content">
              <div class="table-responsive">
                <table>
                  <thead>
                    <tr>
                      <th><input type="checkbox" class="select-all"></th>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      require_once("includes/db_connection.php");
                      $sql="SELECT * FROM customers ORDER BY customer_id DESC";
                      $query=$con->query($sql);
                      while($data=$query->fetch_assoc()){
                      
                    ?>
                    <tr>
                      <td><input type="checkbox" class="select"></td>
                      <td><?= $data["customer_id"]?></td>
                      <td><?= $data["customer_name"]?></td>
                      <td><?= $data["customer_phone"]?></td>
                      <td><?= $data["customer_email"]?></td>
                      <td><?= $data["customer_address"]?></td>
                      <td>
                        <a href="delete_customers.php?customer_id=<?= $data["customer_id"]?>" class=" btn edit-btn ">Edit</a>
                        <a href="delete_customer.php?customer_id=<?= $data["customer_id"]?>" class=" btn delete-btn ">Delete</a>
                      </td>
                    </tr>
                    <?php }?>
                    
                    <!-- Add more rows for each user -->
                  </tbody>
                </table>
              </div>
            
              <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">&raquo;</a>
              </div>
            </div>
           <!-- Content End -->
        </section>
      </section>
      <footer class="footer">
        <p>&copy; 2023 Code Scientist Team. All rights reserved.</p>
      </footer>
      
    </div>
  </body>
</html>