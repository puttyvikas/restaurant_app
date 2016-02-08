
<?php
require 'connect.php';

if(isset($_POST['res_name']) && isset($_POST['res_name'])){
	$res_name = $_POST['res_name'];
	$area = $_POST['area'];
	$city = $_POST['city'];
    $rating = $_POST['rating'];
	if((!empty($res_name)) && (!empty($res_name))){
		
				$query = "INSERT INTO restaurants (restaurant_name,location,area,rating,status) VALUES ('".$res_name."','".$city."','".$area."','".$rating."','1')";
				if($query_run = mysql_query($query)){
					$status = 1;
				}else{
					$status = 2;
					echo mysql_error();
					echo 'There is a problem in adding. Please try again later!!!';
				}
			}
}
?>


<!doctype html>
<html>
<head>
        <title>Add Restaurant</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
       
</head>
<body style="background-color:white">

    <?php global $status; ?>
    <div class="space_top_btm">
        <div class="add_restaurant container" style="background-color:#ededed;padding:20px 0px;border-radius:10px">
        <h2 style="margin-top:0px" class="text-center">Add New Restaurant!!</h2>
            <fieldset class="the-fieldset">
<form class="form-horizontal" role="form" action="add_restaurant.php" method="post">
			<?php if($status==1){?>
                <h3 style="text-align:center;color:green"><strong>Added Successfully!! </strong></h3>
                <h4 style="text-align:center;color:green"><strong><a href="index.php">Return To Home</a></strong></h4>
                <?php }else if($status==2){?><strong>Sorry!!Something went wrong.please try again.</strong></p>
                <?php }?>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="res_name">Restaurant name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="res_name" placeholder="Enter Restaurant Name" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="city">City</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="city" placeholder="Enter city" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="area">Area</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="area" placeholder="Enter Area" required>
                        </div>
                    </div>
                   <div class="form-group">
                        <label class="control-label col-sm-3" for="rating">Rating</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="rating" placeholder="Enter Rating" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button type="submit" class="btn btn-warning btn-lg reg_btn">Submit</button>
                        </div>
                    </div>
                    
                    </div>
                    
                </form>
                </fieldset>
                </div>
                </div>
                </body>
                </html>
