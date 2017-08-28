<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>


<div class="container">
           
            <hr>

            <!-- Call to Action Section -->
            <div class="well" style="display: block; overflow: hidden; margin: 20px auto 0 auto; padding: 10px 5px 5px 10px; width: 96%; max-width:940px; min-width: 240px; border: 1px solid #ccc; background-color: #fff; box-shadow: 2px 2px 10px 2px #dddddd; -webkit-box-shadow: 0px 0px 5px 0px #dddddd; line-height: 1.5em;">
                <div class="row">
                    <div class="col-md-12">
        
     <!--Start first panel category-->      
	<div class="panel panel-info">
  						<div class="panel-heading">
   						<h3 class="panel-title">Login</h3>
  						</div>
  						<div class="panel-body">
              <center>
              
                <form class="form-horizontal" role="form" method="post" action="includes/login.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Enter password" required>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-6">
      <div class="checkbox">
        <label><input name="remember" type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-6">
      <button type="submit" name="login" class="btn btn-info">Login</button>
      <p>I don't have an account? <a href="signup.php">Sign Up</a></p>
    </div>
  </div>
</form>


              </center>

						</div>
						</div>
<!--End first panel category-->


                    


					</div>
		
                </div>
					
            </div>

          
        </div>


<?php include 'includes/footer.php'; ?>