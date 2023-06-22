<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css" />
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script defer src="js/custom.js"></script>
</head>

<body>
  <div class="out_body">
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Code Scientist</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">DashBoard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="pages/">Add Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Add Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Add Brands</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Add Products</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">Other</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">About</a></li>
                  <li><a class="dropdown-item" href="#">Store</a></li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Trash</a>
                  </li>
                </ul>
              </li>
            </ul>
            <i style="color: white; font-size: 20px;" id="themeToggleBtn" class="fa-solid fa-droplet"></i>
            <ul class="nav_profile">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-disabled="true" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <?= $_SESSION['user_name'] ?>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">My Profile</a></li>
                  <li><a class="dropdown-item" href="#">Manage Account</a></li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" data-disabled="true" href="includes/logout.php">Logout</a>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="user_part">
              <img style="width: 40px;" class="" src="uploads/images/<?= $_SESSION['user_image'] ?>" alt="avatar" />
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