<!DOCTYPE html>
<html>

<head>
    <?php include 'connect.php' ?>
        <title>Restaurants</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/myjs.js"></script>

        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
        <script type="text/javascript" src="http://arrow.scrolltotop.com/arrow6.js"></script>
        
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <script type="text/javascript" src="engine1/jquery.js"></script>
        
</head>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Restaurant app</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#aboutus">ABOUT US</a></li>
                    <li><a href="#contactus">Find</a></li>
                    <li><a href="add_restaurant.php" target="_blank" data-toggle="tooltip" title="Add New Restaurant.">New <span class="glyphicon glyphicon-plus"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
if(isset($_POST['search']) && (!empty($_POST['search']))){
  $search = $_POST['search'];
}
 global $search;
 ?>
      
        <div class="design_carousel container-fluid space_top_btm" style="background-image:url(images/wood2.jpg);">
            <div id="wowslider-container1">
                <div class="ws_images">
                    <ul>
                        <?php
$root_path = 'images/';
//$query = "SELECT title,description FROM photos";
$query = "SELECT profile_pic,location,area,restaurant_name FROM Restaurants WHERE location LIKE '%".$search."%' ORDER BY rating DESC LIMIT 10";
$query_run = mysql_query($query);
$i = -1;
  while ($query_row = mysql_fetch_assoc($query_run)) {
    $i++;
     $names = $profile_pic[$i]['profile_pic'] = $query_row['profile_pic'];
     $titles = $location[$i]['location'] = $query_row['location'];
     $descs = $area[$i]['area'] = $query_row['area'];
     echo '<li><img src='.$root_path.$names.' alt="aaa" title='.$titles.' id="wows1_0"/>'.$descs.'</li>';
  }

?>
            </ul>
                </div>
                <div class="ws_bullets">
                    <div>
                        <?php
    //$query = "SELECT profile_pic FROM restaurants WHERE location LIKE '%".$search."%' ORDER BY rating DESC LIMIT 10";
  $query = "SELECT id_restaurant,restaurant_name,location,area,rating,profile_pic FROM restaurants WHERE location LIKE '%".$search."%' ORDER BY rating DESC LIMIT 10";
  $query_run = mysql_query($query);
    $i = -1;
    if(mysql_num_rows($query_run) >= 1){
    while ($query_row = mysql_fetch_assoc($query_run)) {
    $i++;
     $titles = $profile_pic[$i]['profile_pic'] = $query_row['profile_pic'];
     
     echo '<a href="#" title='.$titles.'><span>1</span></a>';
  }
}
    ?>
                    </div>
                </div>
                <div class="ws_shadow"></div>
            </div>
            <script type="text/javascript" src="engine1/wowslider.js"></script>
            <script type="text/javascript" src="engine1/script.js"></script>
        </div>
      <div class="container-fluid space_top_btm" id="aboutus" style="background-image:url(images/wood2.jpg);">
            <div class="container text-center" style="background-color:#ededed;line-height:40px;font-size:19px">
                <h1 class="desc">About Us</h1>
                <p>Our vision to find Restaurants based on users ratings area wise, using this site u can find best restaurants Currently we are operating in hyderabad, delhi, kolkata, mumbai. soon we are planing to expand our business to few more cities.</p>
            </div>
        </div>

        <div class="container-fluid" style="background-image:url(images/wood2.jpg);">
            <div class="design_grid container " id="contactus" style="padding-top:20px">
                <div class="srch">
                    <form action="index.php" method="post">
                        <div class="form-group col-md-3">
                            <label for="site_ori">Select City</label>
                            <select name="search" class="form-control" id="Location">
                                <option value="">---Select Your City---</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Kolkata">Kolkata</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Mumbai">Mumbai</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" style="inline-block;margin-top:30px">Submit</button>

                    </form>
                </div>
            </div>
        </div>
        <?php
//$search = 'Hyderabad';
$query = "SELECT id_restaurant,restaurant_name,location,area,rating,profile_pic FROM restaurants WHERE location LIKE '%".$search."%' ORDER BY rating DESC LIMIT 10";
$query_run = mysql_query($query);
$Color = array("#00FF00","#22FF00","#44FF00","#66FF00","#99FF00","#DDFF00","#FFEE00","#FFCC00","#FF9900","#FF7700","#FF5500","#FF3300","#FF0000");
$i = -1;
  if(mysql_num_rows($query_run) >= 1){
  while ($query_row = mysql_fetch_assoc($query_run)) {
    $i++;
     $names = $name[$i]['restaurant_name'] = $query_row['restaurant_name'];
     $locations = $location[$i]['location'] = $query_row['location'];
     $areas = $area[$i]['area'] = $query_row['area'];
     $ratings = $rating[$i]['rating'] = $query_row['rating'];
     $profile_pics = $profile_pic[$i]['profile_pic'] = $query_row['profile_pic'];
     $id_restaurants = $id_restaurant[$i]['id_restaurant'] = $query_row['id_restaurant'];
     //echo $name[$i]['restaurant_name'];exit;
?>
            <div class="container-fluid" style="background-image:url(images/wood2.jpg);">
                <div class="container">
                    <div class="col-sm-12">
                        <div class="thumbnail" style="padding:10px">
                            <div class="res_img">
                                <img src=<?php echo 'images/'.$profile_pic[$i][ 'profile_pic'] ?> alt="No image available!!" width="200" height="150">
                            </div>
                            <div <?php //echo "class='details_".$id_restaurant[$i][ 'id_restaurant']. "'" ?> style="margin-top:-160px;margin-left:220px">
                                <div class="pull-right thumbnail rank" <?php echo "style='background-color:".$Color[$i]. "'" ?>>
                                    <h1>Rank <?php echo $i+1; ?></h1></div>
                                <h3 <?php echo "style='color:".$Color[$i]. "'" ?>><strong><?php echo $name[$i]['restaurant_name'] ;?></strong></h3>
                                <h4><?php echo $location[$i]['location'] ;?></h4>
                                <p>
                                    <?php echo $area[$i]['area'] ;?>
                                </p>
                                <p>Rating:
                                    <?php echo $rating[$i]['rating'] ;?>/10</p>

                                <div <?php echo "class='details_".$id_restaurant[$i][ 'id_restaurant']. "'" ?> id="flip">Click to see the Reviews!!</div>
                                <div <?php echo "class='pull-right pics_".$id_restaurant[$i][ 'id_restaurant']. "'" ?> id="flip_pics">Click to View Photos!!</div>
                                <button type="submit" class="btn btn-default pull-right" href="#menu" data-toggle="modal" data-dismiss="modal" style="margin-top:-86px"> Menu
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div <?php echo "class=' thumbnail reviews_".$id_restaurant[$i][ 'id_restaurant']. "'" ?> style="padding:10px;margin-top:-16px;display:none;background-color:#f5b329;color:white">
                            <h3 style="margin-top:2px;text-decoration:underline">Reviews</h3>
                            <?php
$query1 = "SELECT r.comment from restaurants re join reviews r on r.id_restaurant = re.id_restaurant AND re.restaurant_name = '".$name[$i]['restaurant_name']."' ";
    $query_run1 = mysql_query($query1);
    if($query_run1){
    if(mysql_num_rows($query_run1) >= 1){
  while ($query_row = mysql_fetch_assoc($query_run1)) {
    $comments = $query_row['comment'].'<br>';
     echo '<li>'.$comments.'</li>';
  }
}else{
  echo "No Reviews yet...";
}
     
  }
  else{
      echo mysql_error();
    }
?>
         <!--add review goes here-->
         <hr style="width:650px;margin-left:-9px">
           <?php if(isset($_POST['add_review']) && (!empty($_POST['add_review']))) {echo '<li>'.$_POST['add_review'].'</li>';} ?>
             <h3>Add your Review</h3>
              <form action="index.php" method="POST">
                 <textarea type="text" name="add_review" rows="3" cols="60" placeholder="Write a Review" required style="color:black"></textarea>
                     <br> <br>
                         <button class="btn btn-info" type="submit" value="Submit" style="margin-left:525px;margin-top:-120px">Submit</button>
                </form>
                                    <?php 
if(isset($_POST['add_review']) && (!empty($_POST['add_review']))){
  $add_review = $_POST['add_review'];

global $add_review;
$query2 = "INSERT INTO reviews (id_restaurant,comment) VALUES('".$id_restaurant[$i]['id_restaurant']."','".$add_review."') ";
$query_run2 = mysql_query($query2);
}

?>
                        </div>

                    </div>

                    <div class="col-sm-12">
                        <div <?php echo "class=' thumbnail photos_".$id_restaurant[$i][ 'id_restaurant']. "'" ?> style="display:none;padding:10px;margin-top:-16px;background-color:#f5b329;color:white">
                            <h3 style="margin-top:2px;text-decoration:underline">Photos</h3>
                            <?php
$query1 = "SELECT p.title from restaurants re join photos p on p.id_restaurant = re.id_restaurant AND re.restaurant_name = '".$name[$i]['restaurant_name']."' ";
    $query_run1 = mysql_query($query1);
    if($query_run1){
    if(mysql_num_rows($query_run1) >= 1){
  while ($query_row = mysql_fetch_assoc($query_run1)) {
    $comments = $query_row['title'];
    echo '<li><img src=images/'.$comments.' alt="aaa" id="wows1_0" width="100" height="100"/></li>';
  }
}else{
  echo '<div style="font-size:21px">No Photos available For This Restaurant!!</div>';
}
     
  }
  else{
      echo mysql_error();
    }

?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
}
}
?>
<div class="modal fade" id="menu" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h4 style="letter-spacing:2px;margin-bottom:12px">Menu</h4>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <?php 
    $query1 = "SELECT i.item_name,i.price from restaurants re join items i on re.id_restaurant = re.id_restaurant AND re.restaurant_name = '".$names."' ";
    $query_run1 = mysql_query($query1);
    if($query_run1){
    if(mysql_num_rows($query_run1) >= 1){
  while ($query_row = mysql_fetch_assoc($query_run1)) {
    $items = $query_row['item_name'].'  ------------ Rs: '.$query_row['price'].'/-<br>';
     echo '<li>'.$items.'</li>';
  }
}else{
  echo "No Items Found...";
}
     
  }
  else{
      echo mysql_error();
    } ?>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default pull-right" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-remove"></span> Cancel
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
                  <?php for($i=0;$i<11;$i++){ ?>
                    <script type="text/javascript">
                        document.getElementById('Location').value = "<?php echo $_POST['search'];?>";
                    </script>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $(<?php echo '".details_'.$id_restaurant[$i]['id_restaurant'].'"' ?>).click(function () {
                                $(<?php echo '".reviews_'.$id_restaurant[$i]['id_restaurant'].'"' ?>).slideToggle("slow");
                            });
                            $(<?php echo '".pics_'.$id_restaurant[$i]['id_restaurant'].'"' ?>).click(function () {
                                $(<?php echo '".photos_'.$id_restaurant[$i]['id_restaurant'].'"' ?>).slideToggle("slow");
                            });
                        });
                    </script>
                    <?php } ?>


</body>

</html>