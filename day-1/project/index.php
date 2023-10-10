<?php include 'inc/header.php';
include 'lib/config.php'; 
include 'lib/Database.php';
$db  = new Database();
?>



           <div class="myform">
            <?php 
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $permited = array('jpg','jpeg','png','gif');
                     $file_name = $_FILES['image']['name'];
                     $file_size = $_FILES['image']['size'];
                     $file_temp = $_FILES['image']['tmp_name'];
                     $folder = "uploads/";
                     move_uploaded_file($file_temp,$folder.$file_name);
                     $query = "INSERT INTO tbl_image(image) VALUES('$file_name')";
                     $inserted_rows = $db->insert($query);
                     if($inserted_rows){
                        echo "<span class='success'>Image Inserted Successfully.</span>";
                     }else{
                        echo "<span class='Error'>Image Not Inserted .</span>";

                     }
                }
            ?>
           <form action="" method ="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Select Image</td>
                    <td><input type="file" name="image"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Upload"></td>
                </tr>
            </table>
           </form>
           </div> 
           <?php include 'inc/footer.php'?>
        