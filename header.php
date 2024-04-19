<!-- 
bootstrap icons
https://icons.getbootstrap.com/
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yellow Page Comics</title>

        <!-- Load in the CSS -->
        <?php wp_head(); ?>
    </head>
    <body>

  

<header class="navbar-container">
  <nav class="navbar">

    <a href="/" class="logo-link-container">
      <h1>Yellow<span class=""> Page</span></h1>
    </a>

    <section class="navbar-search-container">
      <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          All Pages
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Products</a></li>
            <li><a class="dropdown-item" href="#">About</a></li>
          </ul>
      </div> 

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