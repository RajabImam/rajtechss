<?php ob_start(); ?>
<?php session_start(); ?>
<?php

/*if(!isset($_SESSION['email'])) {
 
     header("Location: index.php");

}*/

?>
<header>
    <div id="my-top-Bar" style="border-bottom-style: solid;border-bottom-width: 1px; border-bottom-color: #9491c4; background: #000000 none repeat scroll 0% 0%; padding: 10px 0px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-xs-12 col-xs-offset-1 col-xs-offset-0">
                    <div class="top-number" style="padding-left: 10%">

                        <span><a href="index.php"><img class="img-responsive img-rounded" style="height: 100px" src="images/rajtech.png"></a>
                            </span>   
   
                    </div>
                </div>

                <div class="col-sm-3 col-sm-offset-5">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <?php
                        if (isset($_SESSION['email'])) {

                            echo '<li><a class=\'text-danger\'><span class=\'glyphicon glyphicon-user\'></span>'  . $_SESSION['name'] .  '</a></li>';
                            echo "<li><a style='color: #ffffff;' href='includes/logout.php'><span class='glyphicon glyphicon-log-in'></span> Log Out </a></li>";
                        }else{

                            echo "<li><a style='color: #ffffff;' href='signup.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>";
                            echo "<li><a style='color: #ffffff;' href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";

                        }
                        ?>
                    </ul>

                </div>
                
            </div>
        </div>
    </div>

<nav class="navbar navbar-default" >
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
     </button>
      <a class="navbar-brand" href="index.php" style="color:#9491c4;">RAJTECH SPORTS SHOP </a>
    </div>
    <div class="collapse navbar-collapse" id="collapse"> 
     <?php include 'includes/main_navigation.php'; ?>

     
    </div>
  </div>
</nav>

</header>
   
   