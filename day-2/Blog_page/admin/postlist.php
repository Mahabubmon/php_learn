<?php include 'inc/header.php'?>
<?php include 'inc/sidebar.php'?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Post List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="5%">Post Title</th>
							<th width="5%">Description</th>
							<th width="5%">Category</th>
							<th width="5%">Image</th>
							<th width="5%">Author</th>
							<th width="5%">Tags</th>
							<th width="5%">Action</th>
						</tr>
					</thead>
					<?php 
						$query = "SELECT  tbl_post.*, tbl_category.name FROM tbl_post
						INNER JOIN tbl_category
						ON tbl_post.cat = tbl_category.id 
						ORDER By tbl_post.title DESC";
						$post = $db->select($query);
						
					?>
					<tbody>
						<tr class="odd gradeX">
							<td>Trident</td>
							<td>Internet Explorer 4.0</td>
							<td>Win 95+</td>
							<td > 4</td>
							<td > 4</td>
							<td > 4</td>
							<td > 4</td>
							<td > 4</td>
							<td > 4</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						
					</tbody>
				</table>
	
               </div>
            </div>
        </div>
		<script type="text/javascript">
	$(document).ready(function () {
		setupLeftMenu();
		$('.datatable').dataTable();
		setSidebarHeight();
	});
</script>
        <?php include'inc/footer.php'?>

