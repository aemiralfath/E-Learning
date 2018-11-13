<?php include("../config.php") ?>
<!DOCTYPE html>
<html lang="en">
<?php include("partials/head.php") ?>


<body id="page-top">

	<?php include("partials/navbar.php") ?>
	<div id="wrapper">

		<?php include("partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				 <!-- Breadcrumbs-->
                 <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="index.php">Blog</a>
                    </li>
                    <li class="breadcrumb-item active">New Blog</li>
                </ol>

                <?php if ($_GET['status']=="sukses"){ ?>
				<div class="alert alert-success" role="alert">
                    <?php echo "input sukses";?>
                </div>
                <?php }else if($_GET['status']=="gagal"){ ?>
                <div class="alert alert-failed" role="alert">
                    <?php echo "input gagal";?>
                </div>
                        
                    <?php } ?>

                <div class="card mb-3">
                <div class="card-header">

                <a href="index.php"><i class="fas fa-arrow-left"></i> Back</a>
                </div>

					<div class="card-body">
						<form action="proses_add.php" method="post" enctype="multipart/form-data" >
                        <div class="form-group">
								<label for="title">Title*</label>
								<input class="form-control "
								 type="text" name="title" placeholder="Materi Title" />
								
                            </div>
							<div class="form-group">
								<label for="name">Description*</label>
								<textarea class="form-control"
								 name="description" placeholder="isi materi..."></textarea>
								
							</div>
                            <div class="form-group">
								<label for="name">Isi*</label>
								<textarea class="form-control"
								 name="isi" placeholder="isi materi..."></textarea>
								
							</div>
							<div class="form-group">
								<label for="title">Author*</label>
								<input class="form-control "
								 type="text" name="author" placeholder="Materi Title" />
								
                            </div>
                            <div class="form-group">
								<label for="updated_at">Created Date*</label>
								<select class="form-control "
								 name="tgl">
									 <?php
									 	for ($i=1; $i <= 31 ; $i++) { 
											 echo "<option value='$i'>$i</option>";
										 }
									 ?>
								</select>
								<select class="form-control "
								 name="bln">
									 <?php
									 	for ($i=1; $i <= 12 ; $i++) { 
											 echo "<option value='$i'>$i</option>";
										 }
									 ?>
								</select>
								<select class="form-control <"
								 name="thn">
									 <?php
									 	for ($i=2020; $i >= 2000 ; $i--) { 
											 echo "<option value='$i'>$i</option>";
										 }
									 ?>
								</select>
								
							</div>
                            <div class="form-group">
								<label for="photo">Photo</label>
								<input class="form-control-file "
								 type="file" name="photo" />
								
							</div>
                            
                            
                            
                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

                        </div>

<div class="card-footer small text-muted">
    * required fields
</div>


</div>
<!-- /.container-fluid -->

<!-- Sticky Footer -->
<?php include("../partials/footer.php") ?>

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


	<!-- Scroll to Top Button-->
    <?php include("../partials/scrolltop.php") ?>

    <!-- Logout Modal-->
    <?php include("../partials/modal.php") ?>

    <?php include("partials/js.php") ?>

</body>

</html>




							
									
								
   

