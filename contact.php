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
                        <h3 class="panel-title">CONTACT US</h3>
                        </div>
                        <div class="panel-body">
                                

                        <!-- /.row -->
            <div class="row">
                <div class="col-sm-9 col-sm-offset-1 well-lg">
                    <img src="images/map.png" class="img-responsive">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <h3>Send us a Message</h3>
                    <?php
                    
                    ?>
                    <form method="POST" action="" name="contactForm" novalidate style="width:70%;">
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Full Name:</label>
                                <input type="text" class="form-control" name="name" id="name" maxlength="32" required data-validation-required-message="Please enter your name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Subject:</label>
                                <input type="text" class="form-control" name="subject" id="subject" maxlength="20" required data-validation-required-message="Please enter a Subject.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email Address:</label>
                                <input type="email" class="form-control" name="email" id="email" maxlength="50"  required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Message:</label>
                                <textarea rows="10" cols="100" class="form-control" name="message" id="message" maxlength="1000" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-info">Send Message</button>
                    </form>
                </div>
            
            <div class="col-sm-5">
                 <h3>Contact Details</h3>
                    <p>
                       Mazfallah Shopping Mall , Karu Site, Abuja, Nigeria</p>
                    <p><i class="fa fa-phone"></i> 
                        <abbr title="Phone">P</abbr>: (+234) 7060679578. <br/>
                        <i class="fa fa-phone"></i>  <abbr title="Phone">P</abbr>: (+237) 677108556</p>
                    <p><i class="fa fa-envelope-o"></i> 
                        <abbr title="Email">E</abbr>: <a href="rajabimam@yahoo.com">rajabimam@yahoo.com</a>
                    </p>
                    <p><i class="fa fa-envelope-o"></i> 
                        <abbr title="Email">E</abbr>: <a href="rajabimam@eduroamng.com">rajabimam@eduroamng.com</a>
                    </p>
                    <p><i class="fa fa-clock-o"></i> 
                        <abbr title="Hours">H</abbr>: Monday - Friday: 8:00 AM to 7:00 PM</p>
                    <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                        </li>
                    </ul>
            </div>
             </div>




                        </div>
                        </div>
<!--End first panel category-->


                    


                    </div>
        
                </div>
                    
            </div>

          
        </div>

<?php include 'includes/footer.php'; ?>