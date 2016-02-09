<?php
if(isset($_POST["id_restaurant"]) && !empty($_POST["id_restaurant"])){
include('connect.php');
$query = "SELECT profile_pic,location,area,restaurant_name FROM Restaurants WHERE id_restaurant < ".$_POST['id_restaurant']." ORDER BY id_restaurant DESC";

$query_run = mysql_query($query);
$rowCount = mysql_num_rows($query_run);
$showLimit = 2;

$query = "SELECT id_restaurant,profile_pic,location,area,restaurant_name,rating FROM Restaurants WHERE id_restaurant < ".$_POST['id_restaurant']." ORDER BY id_restaurant DESC LIMIT ".$showLimit;
$query_run = mysql_query($query);
$rowCount = mysql_num_rows($query_run);
$root_path = 'images/';
if($rowCount > 0){ 
   //$i = -1;
	$i = $_POST['id_restaurant'];
  while ($query_row = mysql_fetch_assoc($query_run)) {
    $i++;
     $names = $profile_pic[$i]['profile_pic'] = $query_row['profile_pic'];
     $names = $name[$i]['restaurant_name'] = $query_row['restaurant_name'];
     $titles = $location[$i]['location'] = $query_row['location'];
     $descs = $area[$i]['area'] = $query_row['area'];
     $ratings = $rating[$i]['rating'] = $query_row['rating'];
     $id_restaurants = $id_restaurant[$i]['id_restaurant'] = $query_row['id_restaurant'];
     //echo '<li><img src='.$root_path.$names.' alt="aaa" title='.$titles.' id="wows1_0"/>'.$descs.'</li>';
?>

     
<div class="container" style="background-color:white;margin-bottom:50px;padding:10px">
                    <form action="cart.php" method="post">
                        <div class="thumbnail1" style="padding:10px">
                            <div class="res_img pull-left">
                                <img src=<?php echo $root_path.$profile_pic[$i]['profile_pic'] ?> alt="No image available!!" width="200" height="150">
                            </div>
                            <div <?php //echo "class='details_".$id_restaurant[$i][ 'id_restaurant']. "'" ?>>
                                <div style="padding-left:218px">
                                    <h3><?php echo ''.$name[$i]['restaurant_name'].''; ?></h3>
                                <h4><strong><?php echo $location[$i]['location'] ;?></strong></h4>
                                <h5><?php echo ''.$area[$i]['area'] ;?></h5>
                              <p><?php echo 'Rating: '.$rating[$i]['rating'] ;?></p></div>
                            </div>
                        </div>
                        </form>
                    </div>
<?php
  }?>

  <div class="show_more_main col-md-1 col-md-offset-5" <?php echo "id='show_more_main".$id_restaurants. "'" ?>>
        <span <?php echo "id='".$id_restaurants. "'" ?> class="show_more"><button class="btn">Load More</button></span>
        <span class="loding" style="display: none;"><span class="loding_txt">Loading....</span></span>
    </div>
<?php }


}
?>