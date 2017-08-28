<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>
<?php
if(!isset($_SESSION['email'])) {
 
     header("Location: index.php");

}
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
   						<h3 class="panel-title">SHIPPING INFORMATION</h3>
  						</div>
  						<div class="panel-body">

              <form class="form-horizontal" role="form" method="post" action="">
<div class="form-group">
    <label class="control-label col-sm-2" for="name">Full Name:</label>
    <div class="col-sm-6">
      <input type="text" value="<?php if (isset($_SESSION['name'])) {
        # code...
        echo $_SESSION['name']; } ?>" name="name" class="form-control" id="name" required>
       
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Email:</label>
    <div class="col-sm-6">
      <input type="email" value="<?php if (isset($_SESSION['email'])) {
        # code...
        echo $_SESSION['email']; } ?>" name="email" class="form-control" id="email" required>
       
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="add">Shipping Address1:</label>
    <div class="col-sm-6">
      <input type="text" value="<?php if (isset($_SESSION['address'])) {
        # code...
        echo $_SESSION['address']; } ?>" name="add" class="form-control" id="add" required>
       
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="add">Shipping Address2:</label>
    <div class="col-sm-6">
      <input type="text" name="add" class="form-control" id="add" placeholder="Second Address" required>
    </div>
  </div>
  <div class="form-group">
                        <label class="control-label col-sm-2" for="sel1">Shipping Country:</label>
            <div class="col-sm-6">
                        <select class="form-control" id="size">
                        <option>Nigeria</option>
                        <option>Cameroon</option>
                        <option>Ghana</option>
                        <option>England</option>
                        <option>Togo</option>
                        </select>
          </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="add">Shipping City:</label>
    <div class="col-sm-6">
      <input type="text" name="add" class="form-control" id="add" placeholder="Enter Shipping City" required>
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="add">Poster Code:</label>
    <div class="col-sm-6">
      <input type="text" name="add" class="form-control" id="add" placeholder="Enter Poster Code" required>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-6">
      <button type="submit" name="submit" class="btn btn-info">Proceed To Checkout</button>
    </div>
  </div>
</form>


                     
            </div>
             </div>




						</div>
						</div>
<!--End first panel category-->


            <div class="panel panel-info">
              <div class="panel-heading">
              <h3 class="panel-title">PAYMENT DETAILS</h3>
              </div>
              <div class="panel-body">
              <h4 class="text-danger">Master Card - Verve Card - Visa Card</h4>
              <hr/>
              <form name="" action="">
                <div class="form-row">
                  <div class="col-xs-12 form-group">
                  <label class="control-label">Name On Card</label>
                  <input type="text" class="form-control" size="4">
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-xs-12 form-group">
                  <label class="control-label">Card Number</label>
                  <input type="number" class="form-control" size="20">
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-xs-4 form-group">
                  <label class="control-label">CVC</label>
                  <input type="number" class="form-control" placeholder="ex. 566" size="4">
                  </div>
                  <div class="col-xs-4 form-group">
                  <label class="control-label">Expiration</label>
                  <input type="number" class="form-control" placeholder="MM" size="2">
                  </div>
                   <div class="col-xs-4 form-group">
                  <label class="control-label">.</label>
                  <input type="number" class="form-control" placeholder="YYYY" size="4">
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-12">
                  <div class="form-control btn btn-primary">
                    Total: <span>$800</span>
                  </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-12 form-group">
                  <button class="form-control btn btn-success" type="submit">Pay >></button>
                  </div>
                </div>

              </form>

              </div>
              </div>              


					</div>
		
                </div>
		

<?php include 'includes/footer.php'; ?>