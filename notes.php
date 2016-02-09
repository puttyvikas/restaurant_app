
<?php
Dear all.

Please find below a list of projects which you can do. Please select two out of these projects.

Regards
Shyam

1. Scrap and get specifications of a mobile phone from gsmarena/devicespecs and save into a CSV file. 
Then Load this data into tables on a mysql database. Create reports/webpage to show similar phones by display, 
camera, processor or Battery.

2. Simple restaurant application (surfacing information about ratings, reviews, menus, photos, location etc of a 
restaurant). Divide the city into 4-5 areas and for each area, show 10 restaurants with ratings - color coded 
from green to red for top-ranked to lowest ranked restaurants.
Take a list of phones 10 phones of your choice. For each phone, you need to download details of 50 Video Reviews. 
Please use the Youtube Data API - for searching for a list of videos given a certain phone name. 
You need to download the following data points for 50 videos per phone.

Video ID
Review Title
Review Description
Video Publisher (ChannelTitle)
Date of publishing


4. Assume the above data/schema. All this data needs to be written into a csv file - 

The CSV file needs to be updated on a database (please create a table that accommodates the given data) using a mysql script command.

The entire process should be automated.

There should be a UI (user interface) that allows users to view reviews (the details should be coming from db - they should be the details that were scraped - i.e. video id, review title etc. for a given phone), and allows them to delete some records from the db.

5. To do: Refer the task mentioned in this url 
http://ocw.mit.edu/courses/electrical-engineering-and-computer-science/6-170-software-studio-spring-2013/projects/project-2-shopping-cart/

All features are not required. You need to implement the MVP, so focus only the shopper's part (not shopkeeper's part) for now.


As per our discussion, show a list of products in the home page
Allow the users to add products to the cart on the home page
Users can view products in their cart any time, so create a cart page
Create a checkout page



//sample grid
<div class="design_grid container-fluid " style="padding-top:20px">
  <div class="row container">
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="images/flowers.jpg" alt="Flowers" width="200" height="150">
      </div>
    </div>
   
     <div class="col-sm-8" style="margin-left:-20px">
      <div class="thumbnail">
        <h3 style="color:Green"><strong><?php echo $name[0]['restaurant_name'] ;?></strong></h3>
        <h4><?php echo $location[0]['location'] ;?></h4>
        <p><?php echo $area[0]['area'] ;?></p>
      </div>
    </div>
    
  </div>
  <div class="row container">
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="images/flowers.jpg" alt="Flowers" width="200" height="150">
      </div>
    </div>
    <div class="col-sm-8" style="margin-left:-20px">
      <div class="thumbnail">
        <h3 style="color:red"><strong><?php echo $name[1]['restaurant_name'] ;?></strong></h3>
        <h4><?php echo $location[1]['location'] ;?></h4>
        <p><?php echo $area[1]['area'] ;?></p>
      </div>
    </div>
  </div>
  </div>
<!--for dynamic reviews-->
<div <?php echo "class='details_".$name[$i]['restaurant_name']."'" ?> style="margin-top:-160px;margin-left:220px">
  <script type="text/javascript">
$(document).ready(function(){
    $(<?php echo '".details_'.$name[0]['restaurant_name'].'"' ?>).click(function(){
        $(".reviews").slideToggle("slow");
    });
});
</script>

<?php echo '".reviews_'.$name[1]['restaurant_name'].'"' ?>

<!--for single new style row -->
<div class="container">
    <div class="col-sm-12">
      <div class="thumbnail" style="padding:10px">
      <div  class="res_img">
        <img src=<?php echo 'images/'.$profile_pic[0]['profile_pic'] ?> alt="Flowers" width="200" height="150">
      </div>
      <div <?php echo "class='details_".$name[0]['restaurant_name']."'" ?> style="margin-top:-160px;margin-left:220px">
      <div class="pull-right thumbnail rank" <?php echo "style='background-color:".$Color[$i]."'" ?>><h1>Rank 1</h1></div>
        <h3 style="color:green"><strong><?php echo $name[0]['restaurant_name'] ;?></strong></h3>
        <h4><?php echo $location[0]['location'] ;?></h4>
        <p><?php echo $area[0]['area'] ;?></p>
        <p>Rating: <?php echo $rating[0]['rating'] ;?></p>
        <button type="submit" class="btn btn-default pull-right" href="#details" data-toggle="modal" data-dismiss="modal" style="margin-top:-50px"> Details
          </button>
      </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="thumbnail reviews" style="padding:10px;margin-top:-18px">
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
      </div>
    </div>
  </div>



  <?php
//for each styel
  <div class="design_grid container-fluid " style="padding-top:20px">
  <div class="row container">
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="images/flowers.jpg" alt="Flowers" width="200" height="150">
      </div>
    </div>
   
     <div class="col-sm-8" style="margin-left:-20px">
      <div class="thumbnail">
        <h3 style="color:#00CC00"><strong><?php echo $name[0]['restaurant_name'] ;?></strong></h3>
        <h4><?php echo $location[0]['location'] ;?></h4>
        <p><?php echo $area[0]['area'] ;?></p>
      </div>
    </div>
    
  </div>
  <div class="row container">
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="images/flowers.jpg" alt="Flowers" width="200" height="150">
      </div>
    </div>
    <div class="col-sm-8" style="margin-left:-20px">
      <div class="thumbnail">
        <h3 style="color:#1AB800"><strong><?php echo $name[1]['restaurant_name'] ;?></strong></h3>
        <h4><?php echo $location[1]['location'] ;?></h4>
        <p><?php echo $area[1]['area'] ;?></p>
      </div>
    </div>
  </div>
  <div class="row container">
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="images/flowers.jpg" alt="Flowers" width="200" height="150">
      </div>
    </div>
    <div class="col-sm-8" style="margin-left:-20px">
      <div class="thumbnail">
        <h3 style="color:#33A300"><strong><?php echo $name[2]['restaurant_name'] ;?></strong></h3>
        <h4><?php echo $location[2]['location'] ;?></h4>
        <p><?php echo $area[2]['area'] ;?></p>
      </div>
    </div>
  </div>
  <div class="row container">
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="images/flowers.jpg" alt="Flowers" width="200" height="150">
      </div>
    </div>
    <div class="col-sm-8" style="margin-left:-20px">
      <div class="thumbnail">
        <h3 style="color:#4C8F00"><strong><?php echo $name[3]['restaurant_name'] ;?></strong></h3>
        <h4><?php echo $location[3]['location'] ;?></h4>
        <p><?php echo $area[3]['area'] ;?></p>
      </div>
    </div>
  </div>
  <div class="row container">
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="images/flowers.jpg" alt="Flowers" width="200" height="150">
      </div>
    </div>
    <div class="col-sm-8" style="margin-left:-20px">
      <div class="thumbnail">
        <h3 style="color:#667A00"><strong><?php echo $name[4]['restaurant_name'] ;?></strong></h3>
        <h4><?php echo $location[4]['location'] ;?></h4>
        <p><?php echo $area[4]['area'] ;?></p>
      </div>
    </div>
  </div>
  <div class="row container">
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="images/flowers.jpg" alt="Flowers" width="200" height="150">
      </div>
    </div>
    <div class="col-sm-8" style="margin-left:-20px">
      <div class="thumbnail">
        <h3 style="color:#8C5C00"><strong><?php echo $name[5]['restaurant_name'] ;?></strong></h3>
        <h4><?php echo $location[5]['location'] ;?></h4>
        <p><?php echo $area[5]['area'] ;?></p>
      </div>
    </div>
  </div>
  <div class="row container">
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="images/flowers.jpg" alt="Flowers" width="200" height="150">
      </div>
    </div>
    <div class="col-sm-8" style="margin-left:-20px">
      <div class="thumbnail">
        <h3 style="color:#A64700"><strong><?php echo $name[6]['restaurant_name'] ;?></strong></h3>
        <h4><?php echo $location[6]['location'] ;?></h4>
        <p><?php echo $area[6]['area'] ;?></p>
      </div>
    </div>
  </div>
  <div class="row container">
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="images/flowers.jpg" alt="Flowers" width="200" height="150">
      </div>
    </div>
    <div class="col-sm-8" style="margin-left:-20px">
      <div class="thumbnail">
        <h3 style="color:#BF3300"><strong><?php echo $name[7]['restaurant_name'] ;?></strong></h3>
        <h4><?php echo $location[7]['location'] ;?></h4>
        <p><?php echo $area[7]['area'] ;?></p>
      </div>
    </div>
  </div>
  <div class="row container">
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="images/flowers.jpg" alt="Flowers" width="200" height="150">
      </div>
    </div>
    <div class="col-sm-8" style="margin-left:-20px">
      <div class="thumbnail">
        <h3 style="color:#E61400"><strong><?php echo $name[8]['restaurant_name'] ;?></strong></h3>
        <h4><?php echo $location[8]['location'] ;?></h4>
        <p><?php echo $area[8]['area'] ;?></p>
      </div>
    </div>
  </div>
  <div class="row container">
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="images/flowers.jpg" alt="Flowers" width="200" height="150">
      </div>
    </div>
    <div class="col-sm-8" style="margin-left:-20px">
      <div class="thumbnail">
        <h3 style="color:#FF0000"><strong><?php echo $name[9]['restaurant_name'] ;?></strong></h3>
        <h4><?php echo $location[9]['location'] ;?></h4>
        <p><?php echo $area[9]['area'] ;?></p>
      </div>
    </div>
  </div>
  </div>




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
}
global $add_review;
$query2 = "INSERT INTO reviews (id_restaurant,comment) VALUES('".$id_restaurant[$i]['id_restaurant']."','".$add_review."') ";
$query_run2 = mysql_query($query2);

//model

                <!--                <div class="modal fade" id="details" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h4 style="letter-spacing:2px;margin-bottom:12px"> Details</h4>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <?php 
    $query1 = "SELECT r.comment from restaurants re join reviews r on re.id_restaurant = re.id_restaurant AND re.restaurant_name = '".$names."' ";
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
                </div>-->
?>
?>