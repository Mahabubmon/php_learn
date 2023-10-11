<?php include 'config/config.php'?>
<?php include 'lib/Database.php'?>
<?php include 'inc/header.php';?>
<?php include 'inc/slider.php';?>

<?php 

  $db = new Database();

?>

<div class="contentsection contemplete clear">
  <div class="maincontent clear">

  <?php 
    $query = "select * from tbl_post";
    $post =  $db->select($query);
    if($post){

    
  ?>
    <div class="samepost clear">
      <h2><a href="">Our post title here</a></h2>
      <h4>April 10, 2016, 12:30 PM, By <a href="#">Delowar</a></h4>
      <a href="#"><img src="images/post1.jpg" alt="post image" /></a>
      <p>
        Some text will be go here. Some text will be go here.Some text will be
        go here.Some text will be go here.Some text will be go here.Some text
        will be go here.Some text will be go here.Some text will be go here.Some
        text will be go here.Some text will be go here. Some text will be go
        here.Some text will be go here.Some text will be go here.Some text will
        be go here.Some text will be go here.Some text will be go here.Some text
        will be go here.Some text will be go here.
      </p>
      <div class="readmore clear">
        <a href="post.php">Read More</a>
      </div>
    </div>
    <?php 
    }else{
      header("Location:404.php");
    }?>
  </div>
  
</div>
<?php include 'inc/sidebar.php';?>

<?php include 'inc/footer.php';?>
