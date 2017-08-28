<?php include "includes/connection.php"; ?>
<?php include 'includes/navigation.php'; ?>
<?php
if(!isset($_SESSION['email'])) {
 
     header("Location: index.php");

}
?>
<?php include 'includes/header.php'; ?>
<?php

/*if(!isset($_SESSION['email'])) {
 
     header("Location: index.php");

}*/

?>



<div class="container">
           
            <hr>

            <!-- Call to Action Section -->
            <div class="well" style="display: block; overflow: hidden; margin: 20px auto 0 auto; padding: 10px 5px 5px 10px; width: 96%; max-width:940px; min-width: 240px; border: 1px solid #ccc; background-color: #fff; box-shadow: 2px 2px 10px 2px #dddddd; -webkit-box-shadow: 0px 0px 5px 0px #dddddd; line-height: 1.5em;">
                <div class="row">
                    <div class="col-md-12">
        
     <!--Start first panel category-->      
	<div class="panel panel-info">
  						<div class="panel-heading">
   						<h3 class="panel-title">ORDER ITEMS AND CHECK OUT</h3>
              
  						</div>
  						<div class="panel-body">

  						<h3 class="text-danger">CART SUMMARY</h3>	
 						<hr>
 						<P>You have no products in your Shopping Cart.</P><br/><br/>
            <a class="btn btn-primary" href="checkout.php">CHECKOUT</a>   

            <P>Have a question? <a href="mailto:rajabimam@yahoo.com">Email us</a> or call us at 07060679578.</P>
						</div>
						</div>
<!--End first panel category-->


                    


					</div>
		
                </div>
					
            </div>

          
        </div>


<?php include 'includes/footer.php'; ?>