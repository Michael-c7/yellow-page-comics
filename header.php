<!-- 
bootstrap icons
https://icons.getbootstrap.com/
-->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo("charset") ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yellow Page Comics</title>

        <!-- Load in the CSS -->
        <?php wp_head(); ?>
    </head>
    <body>

  

<header class="navbar-container">
  <nav class="navbar">

    <a href="<?php echo site_url("/") ?>" class="logo-link-container">
      <h1>Yellow<span class=""> Page</span></h1>
    </a>

    <button class="btn hamburger-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
      <i class="bi bi-list"></i>
    </button>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
          <div>Yellow<span class=""> Page</span></div>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="offcanvas-items">
            <!-- <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/">Products</a>
            </li>
            <li>
                <a href="/">About</a>
            </li> -->
            <?php 
              wp_nav_menu(array(
                "theme_location" => "sidebarNavLocation"
              ));
            ?>


            <li><hr class="divider"></li>

            <li>
                <a href="/">Wishlist (0)</a>
            </li>
            <li>
                <a href="/">Cart ($0.00)</a>
            </li>
            <li>
              <div class="nav-item dropdown">
                <button class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profile
                </button>
                <ul class="dropdown-menu">
                  <!-- When user logged out -->
                  <li><a class="dropdown-item" href="#">Sign Up</a></li>
                  <li><a class="dropdown-item" href="#">Login</a></li>
                  <!-- When user logged in -->
                  <!-- <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="#">Stats</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li> -->
                </ul>
              </div>
            </li>
        </ul>
      </div>
    </div>
    


    <section class="navbar-search-container">
      <nav class="nav-item dropdown navbar__all-pages">
          <button class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          All Pages
          </button>
          <!-- <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Products</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url("/about") ?>">About</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url("/privacy-policy") ?>">Privacy Policy</a></li>
          </ul> -->
          <ul class="dropdown-menu">
              <?php 
              wp_nav_menu(array(
                "theme_location" => "headerMenuLocation"
              ));
              ?>
          </ul>
      </nav> 

      <form class="navbar-search-form">
        <input class="navbar-search-input" placeholder="Search..."/>
        <button class="navbar-search-btn">
          <i class="bi bi-search"></i>
        </button>
      </form>
    </section>

    <section class="navbar-info-section">
      <a href="/abc" class="heart-icon-link">
        <i class="bi bi-heart"></i>
        <div class="wishlist-amt">0</div>
      </a>

      <a href="/" class="bag-container">
        <div class="bag-icon-container">
          <i class="bi bi-bag"></i>
          <div class="wishlist-amt">0</div>
        </div>
        <span class="bag-price">$0.00</span>
      </a>
      <div class="nav-item dropdown">
        <button class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-circle"></i>
        </button>
        <ul class="dropdown-menu">
          <!-- When user logged out -->
          <li><a class="dropdown-item" href="#">Sign Up</a></li>
          <li><a class="dropdown-item" href="#">Login</a></li>
          <!-- When user logged in -->
          <!-- <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><a class="dropdown-item" href="#">Stats</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Logout</a></li> -->
        </ul>
      </div>
    </section>
  </nav>
</header>



<!-- <i class="bi-alarm" style="font-size: 2rem; color: cornflowerblue;"></i> -->

<!-- person: <i class="bi bi-person-circle"></i> -->
<!-- heart: <i class="bi bi-heart"></i> -->
<!-- cart: <i class="bi bi-bag"></i> -->

<!-- <i class="bi bi-search"></i> -->


<!-- <ul class="dropdown-menu">
  <li><a class="dropdown-item" href="#">Products</a></li>
  <li><a class="dropdown-item" href="#">About</a></li>
  <li><hr class="dropdown-divider"></li>
  <li><a class="dropdown-item" href="#">Something else here</a></li>
</ul> -->