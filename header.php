<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<div class="header">



<body>
    <header>
        <div class="container">
        <div class="logo">
        <?php
    echo get_custom_logo();
    ?>
    <div class="site title">
        <h1><?php
    echo bloginfo('name');
    ?></h1>
     </div>
    
</div>

<?php

wp_nav_menu(array(
  'theme_location' => 'primary',
  'menu_class' => 'navbar-2',//got the registration of class for styling navbar in style.css
 
))
?>
</div>
           
</div>



<!-- fot tagline -->


<div class="tagline">
<p><?php
    echo bloginfo('description');
    ?></p>

</div>
</div>
        </div>
    



</div>


<div class="cart-button">
    <a href="#" id="cart-button" class="cart-link">
        <i class="fa-solid fa-cart-shopping"></i> Cart
    </a>
</div>

<div id="cart-sidebar" class="cart-sidebar">
    <button id="close-sidebar" class="close-sidebar">X</button>
    <div id="cart-content">
    <div class="cart-button">
            <a href="<?php echo wc_get_cart_url(); ?>" class="cart-link">
                <i class="fa-solid fa-cart-shopping"></i> Cart
            </a>
        </div>

    </div>
</div>




<?php
 wp_head();
  ?>


