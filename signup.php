<?php include 'includes/connection.php'; ?>

<?php
if (isset($_POST['submit'])) {
  
  $name   = $_POST['name'];
  $email    = $_POST['email'];
  $password   = $_POST['pwd'];
  $address   = $_POST['address'];

  if (!empty($name) && !empty($email) && !empty($password) && !empty($address)) {
    
  $name   = mysqli_real_escape_string($connection,$name);
  $email    = mysqli_real_escape_string($connection,$email);
  $password   = mysqli_real_escape_string($connection,$password);
  $address   = mysqli_real_escape_string($connection,$address);

  $query = "SELECT randSalt FROM users";
  $select_randsalt_query = mysqli_query($connection, $query);

  if (!$select_randsalt_query) {
    die("Query Failed: " .mysqli_error($connection));
  }

    $row = mysqli_fetch_array($select_randsalt_query);
    
    $salt = $row['randSalt'];

    $password = crypt($password, $salt);

    $query = "INSERT INTO users (name, email, password, address, role) ";
    $query .= "VALUES('{$name}', '{$email}', '{$password}', '{$address}', 'customer' ) ";
    $register_user_query = mysqli_query($connection, $query);
    if (!$register_user_query) {
      
      die("Query Failed : " .mysqli_error($connection));
    }

    $message = "Your Registration is completed succesfully";


  } else {

    $message = "Fields cannot be empty";
  


  }

} else {
  $message = "";
}

?>



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
   						<h3 class="panel-title">Sign Up</h3>
  						</div>
  						<div class="panel-body">

  						<center>
     <h6 class="text-center text-info"><?php echo $message; ?></h6>         
<form class="form-horizontal" role="form" method="post" action="signup.php">
<div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-6">
      <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
    </div>
  </div>
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
  <label class="control-label col-sm-2" for="address">Address:</label>
  <div class="col-sm-6"> 
  <textarea class="form-control" name="address" rows="5" id="address"></textarea>
  </div>
</div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-6">
      <button type="submit" name="submit" class="btn btn-info">Create Account</button>
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