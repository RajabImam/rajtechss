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
   						<h3 class="panel-title">Product Detail</h3>
  						</div>
  						<div class="panel-body">

                    <div class="row">
                <div class="col-sm-7">
                    
          <img src="images/boots/boot7.jpg" width="300" height="300" alt="">
        </div>
            
            <div class="col-sm-5">
                 <p><strong>adidas Ace 17+ Soccer Boot</strong></p>
                    <hr>
                    $319.99
                    <hr>

                     <form method="POST" action="" name="order" novalidate style="width:70%;">
                        <div class="form-group">
                        <label for="sel1">Select Size:</label>
                        <select class="form-control" id="size">
                        <option>Small</option>
                        <option>Medium</option>
                        <option>Large</option>
                        <option>Extra Large</option>
                        <option>Slim Fit</option>
                         <option>39</option>
                        <option>40</option>
                        <option>41</option>
                        <option>42</option>
                         <option>43</option>
                        <option>44</option>
                        <option>45</option>
                        </select>
                        </div>

                        <div class="form-group">
                        <label for="sel1">Select Quantity:</label>
                        <select class="form-control" id="qty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        </select>
                        </div>
                        
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" name="addCart" class="btn btn-primary">ADD TO CART</button>
                        <a class="btn btn-success" href="checkout.php">CHECKOUT</a>   
                        
                    </form>
            </div>
             </div>




						</div>
						</div>
<!--End first panel category-->


            <div class="panel panel-info">
              <div class="panel-heading">
              <h3 class="panel-title">PRODUCT DETAILS</h3>
              </div>
              <div class="panel-body">
              <p>NOTE: This is a minimum Advertised Price product and as a result of brand pricing restrictions
               is not applicable for promotions and discounts.</p> 

              <ul class="list-group">
              <li class="list-group-item"><strong>BALL CONTROL TYPE:</strong> <span class="pull-right">Non</span></li>
              <li class="list-group-item"><strong>FAMILY: </strong> <span class="pull-right">Ace</span></li>
              <li class="list-group-item"><strong>STUD SHAPE:</strong> <span class="pull-right">Conical</span></li>
               <li class="list-group-item"><strong>LACING:</strong> <span class="pull-right">N/A</span></li>
              <li class="list-group-item"><strong>INSOLE REMOVABLE: </strong> <span class="pull-right">Yes</span></li>
              <li class="list-group-item"><strong>WEIGHT:</strong> <span class="pull-right">8.6</span></li>
              <li class="list-group-item"><strong>BALL CONTROL ELEMENTS: </strong> <span class="pull-right">Yes</span></li>
              <li class="list-group-item"><strong>PRIMARY UPPER MATERIAL:</strong> <span class="pull-right">Synthetic</span></li>
              </ul>


              </div>
              </div>              


					</div>
		
                </div>
					
            </div>

          
        </div>


<?php include 'includes/footer.php'; ?>