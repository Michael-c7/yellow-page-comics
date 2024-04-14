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
    

<header>
  <nav class="d-flex justify-content-between align-items-center p-4">
    <!-- left part -->
    <div class="d-flex">
      <a href="/">Logo here</a>
      <div>
        <a href="/products">Products</a>
        <a href="/about">About</a>
      </div>
    </div>

    <!-- Middle part -->
    <div>
      <input placeholder="Search..."/>
      <button>
        <i class="bi bi-search"></i>
      </button>
    </div>

    <!-- Right side -->
    <div class="d-flex align-items-center">
      <div>
        <!-- have dropdown menu here -->
        <button>
          <i class="bi bi-person-circle"></i>
        </button>
      </div>

      <div>
        <a href="/wishlist">
          <i class="bi bi-heart"></i>
        </a>
      </div>

      <div>
        <a href="/cart">
          <i class="bi bi-bag"></i>
        </a>
      </div>
      
    </div>
  </nav>

</header>

<!-- <i class="bi-alarm" style="font-size: 2rem; color: cornflowerblue;"></i> -->


<!-- person: <i class="bi bi-person-circle"></i> -->
<!-- heart: <i class="bi bi-heart"></i> -->
<!-- cart: <i class="bi bi-bag"></i> -->