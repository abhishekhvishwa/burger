<header class="header2" id="header2">

   <div class="flex">

      <img src="assets/img/logo-burger.svg" alt="image">
      <a href="#" class="logo">
         Burger
      </a>

      <nav class="navbar">
         <!-- <a href="admin.php">add products</a> -->
         <a href="products.php">view products</a>
      </nav>

      <?php

      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>