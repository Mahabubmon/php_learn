<?php include 'config/config.php'?>
<?php include 'lib/Database.php'?>
<?php include 'inc/header.php';?>
<?php include 'inc/slider.php';?>
<?php include 'helpers/format.php';?>


<?php 

  $db = new Database();
  $fm = new format();

?>

<div class="contentsection contemplete clear">
  <div class="maincontent clear">

  <!-- pagination -->
  <?php 

    $per_page = 3;
    if(isset($_GET['page'])){
      $page = $_GET['page'];
    }else{
      $page =1;
    }

  
  ?>


  <!-- pagination -->

  <?php 
    $query = "select * from tbl_post";
    $post =  $db->select($query);
    if($post){
      while($result = $post->fetch_assoc()){
        ?>
    <div class="samepost clear">
      <h2><a href="post.php?id=<?php echo $result['id'];?>"><?php echo $result['title'];?></a></h2>
      <h4><?php echo $fm->formatDate($result['date']);?> By <a href="#"><?php echo $result['author'];?></a></h4>
      <a href="#"><img src="admin/upload/<?php echo $result['image'];?>" alt="post image" /></a>
      <?php echo $fm->textShorten($result['body']);?>
      <div class="readmore clear">
        <a href="post.php">Read More</a>
      </div>
    </div>
     <?php }?><!-- end while -->

     <!-- pagination -->
     <?php 
     $query = "select * from tbl_post";
     $result = $db->select($query);
     $total_rows =mysqli_num_rows($result);
     echo "<span class='pagination'><a href='index.php?page=1'>".'First Page'."</a>"?>
     1, 2, 3
     <?php  echo "<a href='index.php?page=10'>".'Last Page'."</a></span>"?>
     <!-- pagination -->
    <?php 
    }else{
      header("Location:404.php");
    }?>
  </div>
  
</div>
<?php include 'inc/sidebar.php';?>

<?php include 'inc/footer.php';?>
