 <ul class="nav navbar-nav">
        <li><a style="color:#0066ff;" href="index.php">HOME</a></li>
        <li><a style="color:#0066ff;" href="about.php">ABOUT</a></li>
        <li class="dropdown">
        <a style="color:#0066ff;" href="product.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> PRODUCTS <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a style="color:#0066ff;" href="bags.php">BAGS</a></li>
            <li role="separator" class="divider"></li>
            <li><a style="color:#0066ff;" href="balls.php">BALLS</a></li>
            <li role="separator" class="divider"></li>
            <li><a style="color:#0066ff;" href="boots.php">BOOTS</a></li>
            <li role="separator" class="divider"></li>
            <li><a style="color:#0066ff;" href="gloves.php">GK GLOVES</a></li>
            <li role="separator" class="divider"></li>
            <li><a style="color:#0066ff;" href="jersey.php">JERSEY</a></li>
            <li role="separator" class="divider"></li>
            <li><a style="color:#0066ff;" href="shinguard.php">SHIN GUARD</a></li>
            <li role="separator" class="divider"></li>
            <li><a style="color:#0066ff;" href="shorts.php">SHORTS</a></li>
            <li role="separator" class="divider"></li>
            <li><a style="color:#0066ff;" href="socks.php">SOCKS</a></li>
            <li role="separator" class="divider"></li>
            <li><a style="color:#0066ff;" href="tracksuit.php">TRACK SUIT</a></li>
        </ul>
    	</li>
        <li><a style="color:#0066ff;" href="order.php">ORDER</a></li> 
        <li><a style="color:#0066ff;" href="customer.php">CUSTOMER SERVICE</a></li>
        <li><a style="color:#0066ff;" href="contact.php">CONTACT</a></li>  

        <li><a style="color:#DC143C;" href="order.php"><img src="images/shop-cart.jpg" width="20" height="20" alt=""> ITEMS: 0 $0.00 </a></li>

        <?php
            
            if (!isset($_SESSION['email'])) {
                    # code...
                    echo "<li><a style='color:#D3D3D3;' href='login.php'>To Order? You must be logged in!</a></li>";

                } else{
                    echo '<li><a style=\'color:#00FF00;\' href=\'#\'> Welcome,' . $_SESSION['name'] . '</a></li>';

                }    
           
        ?>
</ul>