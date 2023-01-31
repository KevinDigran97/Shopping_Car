<header class="header">

   <div class="flex">

      <a href="admin.php" class="logo">Trabajo de Carrito de Compras</a>

      <nav class="navbar">
         <a href="admin.php">Agregar productos</a>
         <a href="productos.php">Ver productos</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="carrito.php" class="cart">Carro <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>