


<?php
   

 $link=mysqli_connect('localhost','root','','superblac');
   if (isset($_POST['type'])) {
   
    $type=$_POST['type'];
    if ($type=="home") {
    	$query=mysqli_query($link,"SELECT * FROM listings");
    	$query11=mysqli_query($link,"SELECT * FROM listings order by id desc limit 5 ");
    	$query1=mysqli_query($link,"SELECT * FROM listings where type='rent'");
    	$query2=mysqli_query($link,"SELECT * FROM listings where type='sale'");
    	$query3=mysqli_query($link,"SELECT * FROM blog ");
    	$query33=mysqli_query($link,"SELECT * FROM blog order by id desc limit 5");
    	$c=mysqli_num_rows($query);
    	$c1=mysqli_num_rows($query1);
    	$c2=mysqli_num_rows($query2);
    	$c3=mysqli_num_rows($query3);
    ?>
   <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                          <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Total Listings</h4>
                          </div>
                          <div class="card-body">
                            <?php echo $c;  ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                          <i class="far fa-newspaper"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>For Sale</h4>
                          </div>
                          <div class="card-body">
                             <?php echo $c1;  ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                          <i class="far fa-file"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>For Rent</h4>
                          </div>
                          <div class="card-body">
                           <?php echo $c2;  ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                          <i class="fas fa-circle"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Blog Posts</h4>
                          </div>
                          <div class="card-body">
                           <?php echo $c3;  ?>
                          </div>
                        </div>
                      </div>
                    </div>                  
                  </div>
                  <div class="row mt-5">
                  	<div class="col-sm-6">
                  		<center><h4>New Listings</h4></center>
                  		<?php
                  		while ($res=mysqli_fetch_array($query11)) {
                  			

                  			?>
                  				<div class=" card p-4 mb-2" style="cursor: pointer;" onclick="qedit(<?php echo $res['id'];   ?>)">
                  					<p><b><?php echo $res['name'];  ?></b></p>
                  					<span><?php echo $res['date'];  ?></span>
                  				</div>

                  			<?php
                  		}


                  		?>
                  	</div>
                  	<div class="col-sm-6">
                  		<center><h4>New Blog Posts</h4></center>
                  		<?php
                  		while ($res=mysqli_fetch_array($query33)) {
                  			

                  			?>
                  				<div class=" card p-4 mb-2" style="cursor: pointer;" onclick="qedit1(<?php echo $res['id'];   ?>)">
                  					<p><b><?php echo $res['title'];  ?></b></p>
                  					<span><?php echo $res['date'];  ?></span>
                  				</div>

                  			<?php
                  		}


                  		?>
                  	</div>
                  </div>

    <?php
    }
    if ($type=='listings') {
    	
?>

<div class="container" style="padding-top: 50px">
	<div class="row">
		<div class="col-sm-6" style="cursor: pointer;"  onclick="add()">
			<div class=""  style="background: white; padding: 30px; border-radius: 5px;">
				<center>Add Listings <br>	<span class="iconify" data-icon="ant-design:folder-add-filled" data-inline="false" data-width="100"></span></center>
			</div>
		</div>
		<div class="col-sm-6" style="cursor: pointer;" onclick="manage()">
			<div class="" style="background: white; padding: 30px; border-radius: 5px;">
				<center>Manage Listings<br><span class="iconify" data-icon="ic:sharp-manage-accounts" data-inline="false" data-width="100"></span>

				</center>
			</div>
		</div>
	</div>
</div>
<?php



    }



    if ($type=="addlistings") {
    	?>
<center><h3 class="mb-5">Add Listings</h3></center>
<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
					<form method="post" action="" id="gcpr">
						<div class="container-fluid p-0">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
								<label>Title</label>
								<input type="¨text" name="title" class="form-control">
							</div>
							<div></div>
							<div class="container-fluid p-0 mb-1">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Price</label>
								<input type="¨text" name="price" class="form-control">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Location</label>
								<input type="¨text" name="location" class="form-control">
										</div>
									</div>
								</div>
								
							</div>
							<div class="container-fluid p-0 mb-4">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Category</label>
								<select class="form-control" name="category">
									<option value="fully detached duplex">Fully Detached duplex</option>
									<option value="terraced duplex">terraced duplex</option>
									<option value="semi detached duplex"> Semi Detached duplex</option>
									<option value="landed properties">land</option>
								</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Type</label>
								<select class="form-control" name="type1">
									<option value="rent">rent</option>
									<option value="sale">sale</option>
									
								</select>
										</div>
									</div>
								</div>
								
							</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group mb-3">
								<center>
									<div><label for="chooseFile" class="uploadbtn" id="uploadbtn"><span class="iconify" data-icon="bi:images" data-inline="false" data-width="80"></span></label></div>
										<div class="user-image mb-3 text-center">
									        <div class="imgGallery" id="imgGallery"> 
									          <!-- Image preview -->
									        </div>
									        
									      </div>
									       <center>
										   <button id="kki" type="button" class="btn btn-danger mb-3" style="display: none">clear</button>   	
										      </center>

								<input type="file" name="chooseFile" style="display: none;" id="chooseFile" multiple="">
								</center>
							
							</div>
								</div>
							</div>
						</div>
							
							
							<div class="form-group mb-3">
								<textarea class="summernote" id="summernote"></textarea>
							</div>
							<center><button class="btn btn-primary btn-lg" style="width: 70%" onclick="submitL()" type="button">Add Listing</button></center>
					</form>

					
                   
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>

    	<?php
    }




    if ($type=="addblogp") {
    	?>
<center><h3 class="mb-5">Add Blog Post</h3></center>
<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
					<form method="post" action="" id="gcpr">
						<div class="container-fluid p-0">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
								<label>Title</label>
								<input type="¨text" name="title" class="form-control">
							</div>
							<div></div>
							
								</div>
								<div class="col-sm-6">
									<div class="form-group mb-3">
								<center>
									<div><label for="chooseFile" class="uploadbtn" id="uploadbtn"><span class="iconify" data-icon="bi:images" data-inline="false" data-width="80"></span></label></div>
										<div class="user-image mb-3 text-center">
									        <div class="imgGallery" id="imgGallery"> 
									          <!-- Image preview -->
									        </div>
									        
									      </div>
									       <center>
										   <button id="kki" type="button" class="btn btn-danger mb-3" style="display: none">clear</button>   	
										      </center>

								<input type="file" name="chooseFile" style="display: none;" id="chooseFile" multiple="">
								</center>
							
							</div>
								</div>
							</div>
						</div>
							
							
							<div class="form-group mb-3">
								<textarea class="summernote" id="summernote"></textarea>
							</div>
							<center><button class="btn btn-primary btn-lg" style="width: 70%" onclick="submitB()" type="button">Add Listing</button></center>
					</form>

					
                   
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>

    	<?php
    }


    if ($type=="manage") {
    	?>

<center>
	<h3 class="mb-5">Manage Listings</h3>
	<div class="container mb-5" style="width: 60%">
		<div class="row">
			<div class="col-sm-10 p-0">
				<input type="text" name="" id="searchinp" class="form-control" placeholder="search by unique id number e.g 12314325356">
			</div>
			<div class="col-sm-2 p-0">
				<button class="btn btn-danger" onclick="search(document.getElementById('searchinp').value)">
					<span id="ui"></span>
					<span class="iconify" data-icon="ant-design:file-search-outlined" data-inline="false" data-width="30"></span>
				</button>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="result" id="result">
			
		</div>
	</div>
</center>
    	<?php



    }


    if ($type=="manageblogp") {
    	?>

<center>
	<h3 class="mb-5">Manage Blog Posts</h3>
	<div class="container mb-5" style="width: 60%">
		<div class="row">
			<div class="col-sm-10 p-0">
				<input type="text" name="" id="searchinp" class="form-control" placeholder="search by unique id number e.g 12314325356">
			</div>
			<div class="col-sm-2 p-0">
				<button class="btn btn-danger" onclick="searchB(document.getElementById('searchinp').value)">
					<span id="ui"></span>
					<span class="iconify" data-icon="ant-design:file-search-outlined" data-inline="false" data-width="30"></span>
				</button>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="result" id="result">
			
		</div>
	</div>
</center>
    	<?php



    }
if ($type=="insertL") {
$title=$_POST["title"];
$price=$_POST["price"];
$location=$_POST["location"];
$category=$_POST["category"];
$type=$_POST["type1"];
$details=$_POST["details"];






	$uploadsDir = "../images/";
        $allowedFileType = array('jpg','png','jpeg');
        
        // Velidate if files exist
        if (!empty(array_filter($_FILES['chooseFile']['name']))) {
            
            // Loop through file items
            foreach($_FILES['chooseFile']['name'] as $id=>$val){
                // Get files upload path
                $fileName        = rand(1,100).$_FILES['chooseFile']['name'][$id];
                $tempLocation    = $_FILES['chooseFile']['tmp_name'][$id];
                $targetFilePath  = $uploadsDir . $fileName;
                $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $uploadDate      = date('Y-m-d H:i:s');
                $uploadOk = 1;

                if(in_array($fileType, $allowedFileType)){
                        if(move_uploaded_file($tempLocation, $targetFilePath)){
                            $sqlVal = "('".$fileName."', '".$uploadDate."')";
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "File coud not be uploaded."
                            );
                        }
                    
                } else {
                    $response = array(
                        "status" => "alert-danger",
                        "message" => "Only .jpg, .jpeg and .png file formats allowed."
                    );
                }
                // Add into MySQL database
                if(!empty($sqlVal)) {
                	if ($id==0) {
                		
                		 $insert = mysqli_query($link,"INSERT INTO listings  VALUES('','$title','$type','$category','$price','$location','$details','$uploadDate','$fileName','','','','','','')");
                          
                	
                    if($insert) {
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Files successfully uploaded."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Files coudn't be uploaded due to database error."
                        );
                    }
                	}
                	else{
                		$squery=mysqli_query($link,"SELECT * FROM listings order by id desc limit 1");
                		while ($anss=mysqli_fetch_array($squery)) {
                			$did=$anss['id'];
                		}
                		$nid=$id + 1;

                		 $insert = mysqli_query($link,"UPDATE  listings set image".$nid." = '$fileName' where id='$did'");
                    if($insert) {
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Files successfully uploaded."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Files coudn't be uploaded due to database error."
                        );
                    }
                	}

                   
                }
            }

        } else {
            // Error
            $response = array(
                "status" => "alert-danger",
                "message" => "Please select a file to upload."
            );

        }
        echo $response["status"];
}




if ($type=="insertB") {
$title=$_POST["title"];


$details=$_POST["details"];






	$uploadsDir = "../images/";
        $allowedFileType = array('jpg','png','jpeg');
        
        // Velidate if files exist
        if (!empty(array_filter($_FILES['chooseFile']['name']))) {
            
            // Loop through file items
            foreach($_FILES['chooseFile']['name'] as $id=>$val){
                // Get files upload path
                $fileName        = rand(1,100).$_FILES['chooseFile']['name'][$id];
                $tempLocation    = $_FILES['chooseFile']['tmp_name'][$id];
                $targetFilePath  = $uploadsDir . $fileName;
                $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $uploadDate      = date('Y-m-d H:i:s');
                $uploadOk = 1;

                if(in_array($fileType, $allowedFileType)){
                        if(move_uploaded_file($tempLocation, $targetFilePath)){
                            $sqlVal = "('".$fileName."', '".$uploadDate."')";
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "File coud not be uploaded."
                            );
                        }
                    
                } else {
                    $response = array(
                        "status" => "alert-danger",
                        "message" => "Only .jpg, .jpeg and .png file formats allowed."
                    );
                }
                // Add into MySQL database
                if(!empty($sqlVal)) {
                	if ($id==0) {
                		
                		 $insert = mysqli_query($link,"INSERT INTO blog VALUES('','$title','$uploadDate','$fileName','$details')");
                          
                	
                    if($insert) {
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Files successfully uploaded."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Files coudn't be uploaded due to database error."
                        );
                    }
                	}
                	else{
                	
                	}

                   
                }
            }

        } else {
            // Error
            $response = array(
                "status" => "alert-danger",
                "message" => "Please select a file to upload."
            );

        }
        echo $response["status"];
}


if ($type=="updateL") {
$title=$_POST["title"];
$price=$_POST["price"];
$location=$_POST["location"];
$category=$_POST["category"];
$type=$_POST["type1"];
$details=$_POST["details"];

$fid=$_POST["id"];




	$uploadsDir = "../images/";
        $allowedFileType = array('jpg','png','jpeg');
        
      
        	
        	if (!empty($_FILES['chooseFile']['name'])) {
            
            // Loop through file items
            foreach($_FILES['chooseFile']['name'] as $id=>$val){
                // Get files upload path
                $fileName        = rand(1,100).$_FILES['chooseFile']['name'][$id];
                $tempLocation    = $_FILES['chooseFile']['tmp_name'][$id];
                $targetFilePath  = $uploadsDir . $fileName;
                $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $uploadDate      = date('Y-m-d H:i:s');
                $uploadOk = 1;

                if(in_array($fileType, $allowedFileType)){
                        if(move_uploaded_file($tempLocation, $targetFilePath)){
                            $sqlVal = "('".$fileName."', '".$uploadDate."')";
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "File coud not be uploaded."
                            );
                        }
                    
                } else {
                    $response = array(
                        "status" => "alert-danger",
                        "message" => "Only .jpg, .jpeg and .png file formats allowed."
                    );
                }
                // Add into MySQL database
                if(!empty($sqlVal)) {
                	if ($id==0) {
                		
                		 $insert = mysqli_query($link,"UPDATE listings set name='$title',price='$price',location='$location',category='$category',type='$type',details='$details',image1='$fileName' where id='$fid'");
                          
                	
                    if($insert) {
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Files successfully uploaded."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Files coudn't be uploaded due to database error."
                        );
                    }
                	}
                	else{
                		$squery=mysqli_query($link,"SELECT * FROM listings order by id desc limit 1");
                		while ($anss=mysqli_fetch_array($squery)) {
                			$did=$anss['id'];
                		}
                		$nid=$id + 1;

                		 $insert = mysqli_query($link,"UPDATE  listings set image".$nid." = '$fileName' where id='$fid'");
                    if($insert) {
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Files successfully uploaded."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Files coudn't be uploaded due to database error."
                        );
                    }
                	}

                   
                }
            }

        }
        
         else {
           

            $insert = mysqli_query($link,"UPDATE listings set name='$title',price='$price',location='$location',category='$category',type='$type',details='$details' where id='$fid'");
                          
                	
                    if($insert) {
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Files successfully uploaded."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Files coudn't be uploaded due to database error."
                        );
                    }
           

        }
        echo $response["status"];
        
}






if ($type=="updateB") {
$title=$_POST["title"];

$details=$_POST["details"];

$fid=$_POST["id"];




	$uploadsDir = "../images/";
        $allowedFileType = array('jpg','png','jpeg');
        
      
        	
        	if (!empty($_FILES['chooseFile']['name'])) {
            
            // Loop through file items
            foreach($_FILES['chooseFile']['name'] as $id=>$val){
                // Get files upload path
                $fileName        = rand(1,100).$_FILES['chooseFile']['name'][$id];
                $tempLocation    = $_FILES['chooseFile']['tmp_name'][$id];
                $targetFilePath  = $uploadsDir . $fileName;
                $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $uploadDate      = date('Y-m-d H:i:s');
                $uploadOk = 1;

                if(in_array($fileType, $allowedFileType)){
                        if(move_uploaded_file($tempLocation, $targetFilePath)){
                            $sqlVal = "('".$fileName."', '".$uploadDate."')";
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "File coud not be uploaded."
                            );
                        }
                    
                } else {
                    $response = array(
                        "status" => "alert-danger",
                        "message" => "Only .jpg, .jpeg and .png file formats allowed."
                    );
                }
                // Add into MySQL database
                if(!empty($sqlVal)) {
                	if ($id==0) {
                		
                		 $insert = mysqli_query($link,"UPDATE blog set title='$title',content='$details',image='$fileName' where id='$fid'");
                          
                	
                    if($insert) {
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Files successfully uploaded."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Files coudn't be uploaded due to database error."
                        );
                    }
                	}
                	else{
                	
                	}

                   
                }
            }

        }
        
         else {
           

            $insert = mysqli_query($link,"UPDATE blog set title='$title',content='$details' where id='$fid'");
                          
                	
                    if($insert) {
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Files successfully uploaded."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Files coudn't be uploaded due to database error."
                        );
                    }
           

        }
        echo $response["status"];
        
}







if ($type=="searchL") {
	
$id=$_POST["id"];

$query=mysqli_query($link,"SELECT * from listings where id='$id'");
while ($res=mysqli_fetch_array($query)) {
	

$title=$res["name"];
$price=$res["price"];
$location=$res["location"];
$category=$res["category"];
$type=$res["type"];
$details=$res["details"];

?>
<div id="summ" style="display: none;">
	<?php echo $details  ?>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
					<form method="post" action="" id="gcpr">
						<div class="container-fluid p-0">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
								<label>Title</label>
								<input type="¨text" name="title" class="form-control" value="<?php echo $title  ?>">
							</div>
							<div></div>
							<div class="container-fluid p-0 mb-1">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Price</label>
								<input type="¨text" name="price" class="form-control" value="<?php echo $price  ?>">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Location</label>
								<input type="¨text" name="location" class="form-control" value="<?php echo $location  ?>">
										</div>
									</div>
								</div>
								
							</div>
							<div class="container-fluid p-0 mb-4">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Category</label>
								<select class="form-control" name="category">
									<option value="<?php echo $category  ?>"><?php echo $category  ?></option>
									<option value="fully detached duplex">Fully Detached duplex</option>
									<option value="terraced duplex">terraced duplex</option>
									<option value="semi detached duplex"> Semi Detached duplex</option>
									<option value="landed properties">land</option>
								</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Type</label>
								<select class="form-control" name="type1">
									<option value="<?php echo $type  ?>"><?php echo $type  ?></option>
									<option value="rent">rent</option>
									<option value="sale">sale</option>
									
								</select>
										</div>
									</div>
								</div>
								
							</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group mb-3">
								<center>
									<div><label for="chooseFile" class="uploadbtn" id="uploadbtn"><span class="iconify" data-icon="bi:images" data-inline="false" data-width="80"></span></label></div>
										<div class="user-image mb-3 text-center">
									        <div class="imgGallery" id="imgGallery"> 
									          <!-- Image preview -->
									        </div>
									        
									      </div>
									       <center>
										   <button id="kki" type="button" class="btn btn-danger mb-3" style="display: none">clear</button>   	
										      </center>

								<input type="file" name="chooseFile" style="display: none;" id="chooseFile" multiple="">
								</center>
							
							</div>
								</div>
							</div>
						</div>
							
							
							<div class="form-group mb-3">
								<textarea class="summernote" id="summernote"></textarea>
							</div>
							<center><button class="btn btn-primary btn-lg" style="width: 40%" onclick="updateL(<?php echo $id; ?>)" type="button">Update Listing</button> <button class="btn btn-danger btn-lg" style="width: 40%" onclick="

								var data='type=delete&id=<?php echo $id;  ?>';

     var th=this;
     
     var xhr = new XMLHttpRequest();
     xhr.open('POST', '../php/master.php', true);
     xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
     xhr.onload = function () {
     
                           iziToast.success({
    title: 'Listing Deleted!',
    message: 'Great Job',
    position: 'topRight'
  });
                           th.disabled=true;
     }
  xhr.send(data);

							" type="button">Delete Listing</button></center>
					</form>

					
                   
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>


<?php

}






}






if ($type=="searchB") {
	
$id=$_POST["id"];

$query=mysqli_query($link,"SELECT * from blog where id='$id'");
while ($res=mysqli_fetch_array($query)) {
	

$title=$res["title"];

$details=$res["content"];

?>
<div id="summ" style="display: none;">
	<?php echo $details  ?>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
					<form method="post" action="" id="gcpr">
						
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
								<label>Title</label>
								<input type="text" name="title" class="form-control" value="<?php echo $title  ?>">
							</div>
									</div>
								<div class="col-sm-6">
									
								<center>
									<div><label for="chooseFile" class="uploadbtn" id="uploadbtn"><span class="iconify" data-icon="bi:images" data-inline="false" data-width="80"></span></label></div>
										<div class="user-image mb-3 text-center">
									        <div class="imgGallery" id="imgGallery"> 
									          <!-- Image preview -->
									        </div>
									        
									      </div>
									       <center>
										   <button id="kki" type="button" class="btn btn-danger mb-3" style="display: none">clear</button>   	
										      </center>

								<input type="file" name="chooseFile" style="display: none;" id="chooseFile" multiple="">
								</center>
							
							</div>
								</div>
							</div>
						</div>
							
							
							<div class="form-group mb-3">
								<textarea class="summernote" id="summernote"></textarea>
							</div>
							<center><button class="btn btn-primary btn-lg" style="width: 40%" id="updbtn" onclick="updateB(<?php echo $id; ?>)" type="button">Update Post</button> <button class="btn btn-danger btn-lg" style="width: 40%" onclick="

								var data='type=deletep&id=<?php echo $id;  ?>';

     var th=this;
     
     var xhr = new XMLHttpRequest();
     xhr.open('POST', '../php/master.php', true);
     xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
     xhr.onload = function () {
     
                           iziToast.success({
    title: 'Post Deleted!',
    message: 'Great Job',
    position: 'topRight'
  });
                           th.disabled=true;
                           document.getElementById('updbtn').disabled=true;
     }
  xhr.send(data);

							" type="button">Delete Post</button></center>
					</form>

					
                   
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>


<?php

}






}
if ($type=="delete") {
	$id=$_POST['id'];
	mysqli_query($link,"DELETE from listings where id='$id'");
}
if ($type=="deletep") {
	$id=$_POST['id'];
	mysqli_query($link,"DELETE from blog where id='$id'");
}







    if ($type=='blog') {
    	
?>

<div class="container" style="padding-top: 50px">
	<div class="row">
		<div class="col-sm-6" style="cursor: pointer;"  onclick="addb()">
			<div class=""  style="background: white; padding: 30px; border-radius: 5px;">
				<center>Add Blog Posts <br>	<span class="iconify mt-1" data-icon="ic:baseline-post-add" data-inline="false" data-width="100"></span></center>
			</div>
		</div>
		<div class="col-sm-6" style="cursor: pointer;" onclick="manageb()">
			<div class="" style="background: white; padding: 30px; border-radius: 5px;">
				<center>Manage Blog Posts<br><span class="iconify" data-icon="akar-icons:edit" data-inline="false" data-width="100"></span>

				</center>
			</div>
		</div>
	</div>
</div>
<?php



    }



if ($type=="locations") {
	

	$query=mysqli_query($link,"SELECT * FROM listings GROUP BY location HAVING COUNT(location) = 1");
	while ($res=mysqli_fetch_array($query)) {
		?>
<option value="<?php  echo $res['location'];  ?>"> <?php  echo $res['location'];  ?></option>
                  

		<?php
	}
}
if ($type=="house") {
		$query=mysqli_query($link,"SELECT * FROM listings order by id desc");


	?>
<div class="container">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<form action="" method="post" id="frmp">
				<div class="form-group mb-2">
					<label>House Of the week</label>
					<select class="form-control" name="hw" id="hw">
						<?php 

while ($res=mysqli_fetch_array($query)) {
		?>
<option value="<?php  echo $res['id'];  ?>"> <?php  echo $res['id'];  ?></option>
                  

		<?php
	}


						 ?>
					</select>
				</div>
				<div class="form-group container mb-2">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>f1</label>
								<input type="text" name="f1" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
									<label>f2</label>
								<input type="text" name="f2" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
									<label>f3</label>
								<input type="text" name="f3" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
									<label>f4</label>
								<input type="text" name="f4" class="form-control">
							</div>
						</div>
					</div>
				</div>
<center><button class="btn btn-primary" type="button" style="width: 50%" onclick="addf()">Submit</button></center>
			</form>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>
	<?php
}


if ($type=="addf") {
	$id=$_POST["hw"];
	$f1=$_POST["f1"];
	$f2=$_POST["f2"];
	$f3=$_POST["f3"];
	$f4=$_POST["f4"];

mysqli_query($link,"UPDATE hw set lid='$id',f1='$f1',f2='$f2',f3='$f3',f4='$f4'");



}
if ($type=="homes") {
	
$op=$_POST["op"];
$xat=$_POST["xat"];


$query=mysqli_query($link,"SELECT * FROM listings where location='$op'or  category='$xat'");

while ($res=mysqli_fetch_array($query)) {
	

?>

   <div class="col-sm-3">
                  <div class="listings" onclick="window.location='details.php?id=<?php echo $res['id']  ?>';">
                    <div class="po">
                      <img src="images/<?php echo $res['image1']  ?>" class="imb-3 img-fluid"  style="width: 242px; height: 254px">
                      <span class="style" style="color:	<?php  

                      		if ($res['type']=='rent') {
                      		echo "black";
                      		}
                      		if ($res['type']=='sale') {
                      		echo "white";
                      		}

                      	 ?>; top: -33px; left: -70px;">
                      	<?php  

                      		if ($res['type']=='rent') {
                      		echo "FOR RENT";
                      		}
                      		if ($res['type']=='sale') {
                      		echo "FOR SALE";
                      		}

                      	 ?>
                       
                      </span>
                    </div>
                    
                                                                                <p style="font-family: boldd; font-weight: bolder; font-size: 2.0em" class="mb-2">
                                                                  <?php echo $res['name']  ?></p>
                                                                  <p style="color: grey"><?php echo $res['location']  ?></p>
                                                                  <p style="color: #82CDE5; font-size: 2em; font-weight: bolder;"><?php echo $res['price']  ?></p>
                  </div>
                </div>

<?php




}



	}




if ($type=="hw") {
	



$query=mysqli_query($link,"SELECT * FROM hw ");

while ($res=mysqli_fetch_array($query)) {
	
$id=$res['lid'];
$query1=mysqli_query($link,"SELECT * FROM listings where id='$id' ");
while ($res1=mysqli_fetch_array($query1)) {

?>

    <div class="col-sm-6 fix100 mb-5">
                                            <img src="images/<?php echo $res1['image1']  ?>" class="img-fluid mb-3" onclick="window.location='details.php?id=<?php echo $res1['id']  ?>';" style="cursor: pointer;">
                                          <p style="font-family: boldd; font-weight: bolder; font-size: 2.0em" class="mb-2">
                            <?php echo $res1['name']  ?></p>
                            <p style="color: grey"><?php echo $res1['location']  ?></p>
                            <p style="color: #82CDE5; font-size: 2em; font-weight: bolder;"><?php echo $res1['price']  ?></p>
                                          </div>
                                           <div class="col-sm-6 fix10 mb-5" style="padding-left: 60px">
                                              <p style="font-weight: bolder;" class="mb-5" data-aos="flip-up" >WEEKLY HOUSE</p>
                                <p style="font-family: boldd; font-weight: bolder; font-size: 2.4em" class="mb-5 fix18" data-aos="flip-up" > GET THE HOUSE OF <br> THE WEEK</p>
                            <div class="weekf mb-3" data-aos="flip-left"><img src="images/weekchk.png" style="margin-right: 40px"> <span><?php echo $res['f1']  ?></span></div>
                            <div class="weekf mb-3" data-aos="flip-left"><img src="images/weekchk.png" style="margin-right: 40px"> <span><?php echo $res['f2']  ?></span></div>
                            <div class="weekf mb-3" data-aos="flip-left"><img src="images/weekchk.png" style="margin-right: 40px"> <span><?php echo $res['f3']  ?></span></div>
                            <div class="weekf mb-3" data-aos="flip-left"><img src="images/weekchk.png" style="margin-right: 40px"> <span><?php echo $res['f4']  ?></span></div>
                              <a href="details.php?id=<?php echo $res1['id']  ?>" class="dd" style="position: relative;top: 20px; font-size: 1.2em; bottom: 0px; color: #dfa550">View House  	<span class="iconify" data-icon="bx:bxs-right-arrow" data-inline="false" data-width="20"></span></a>
                               </div>

<?php


}

}



	}
if ($type=="list") {
	





$query=mysqli_query($link,"SELECT * FROM listings order by id desc limit 12 ");

while ($res=mysqli_fetch_array($query)) {
	


?>
 <li class="splide__slide" onclick="window.location='details.php?id=<?php echo $res['id']  ?>';" style="cursor: pointer;"> 
                                    <img src="images/<?php echo $res['image1']  ?>" class="img-fluid mb-3">
                                                                      <p style="font-family: boldd; font-weight: bolder; font-size: 2.0em" class="mb-2">
                                                        <?php echo $res['name']  ?></p>
                                                        <p style="color: grey"><?php echo $res['location']  ?></p>
                                                        <p style="color: #82CDE5; font-size: 2em; font-weight: bolder;"><?php echo $res['price']  ?></p>


                                  </li>

<?php


}





}



if ($type=="list1") {
	





$query=mysqli_query($link,"SELECT * FROM listings order by id desc limit 12 ");

while ($res=mysqli_fetch_array($query)) {
	


?>



   <div class="col-sm-3">
                  <div class="listings" onclick="window.location='details.php?id=<?php echo $res['id']  ?>';">
                    <div class="po">
                      <img src="images/<?php echo $res['image1']  ?>" class="imb-3 img-fluid"  style="width: 242px; height: 254px">
                      <span class="style" style="color:	<?php  

                      		if ($res['type']=='rent') {
                      		echo "black";
                      		}
                      		if ($res['type']=='sale') {
                      		echo "white";
                      		}

                      	 ?> ;">
                      	<?php  

                      		if ($res['type']=='rent') {
                      		echo "FOR RENT";
                      		}
                      		if ($res['type']=='sale') {
                      		echo "FOR SALE";
                      		}

                      	 ?>
                       
                      </span>
                    </div>
                    
                                                                                <p style="font-family: boldd; font-weight: bolder; font-size: 2.0em" class="mb-2">
                                                                  <?php echo $res['name']  ?></p>
                                                                  <p style="color: grey"><?php echo $res['location']  ?></p>
                                                                  <p style="color: #82CDE5; font-size: 2em; font-weight: bolder;"><?php echo $res['price']  ?></p>
                  </div>
                </div>


 

<?php


}

?>


<?php



}
if ($type=="hblog") {



$query=mysqli_query($link,"SELECT * FROM blog order by id desc limit 1");
$query1=mysqli_query($link,"SELECT * FROM blog order by id desc limit 3");

while ($res=mysqli_fetch_array($query)) {
	


?>
<div class="col-sm-6 fix100" style="padding-top: 100px;">
          <img src="images/<?php echo $res['image']  ?>" class="img-fluid mb-3">
          <p style="font-family: boldd; font-weight: bolder; font-size: 2em" class="mb-5"><?php echo $res['title']  ?></p>
        </div>
      <div class="col-sm-6 fix10  mb-5" style="padding: 30px">
        <p style="font-weight: bolder; padding-left: 50px" class="mb-2" data-aos="flip-left">BLOG & ARTICLES</p>
                                                <p style="font-family: boldd; font-weight: bolder; font-size: 2.4em;  padding-left: 50px" class="mb-5 fix18" data-aos="flip-left">Always Check Our <br> Latest Blog</p>


                                                <?php

												while ($res1=mysqli_fetch_array($query1)) {	
													?>

  <div class="blog-side mb-3">
                                                  <div class="container-fluid">
                                                    <div class="row">
                                                      <div class="col-sm-6"><center><img src="images/<?php echo $res1['image']  ?>" class="img-fluid" style="height: 150px;"></center></div>
                                                      <div class="col-sm-6" style="padding: 2">
                                                        <p style="font-family: boldd; font-weight: bolder; font-size: 1.5em" class="mb-2"><?php echo $res1['title']  ?></p>
                                                        <span style="color: grey"><?php echo $res1['date']  ?></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
													<?php

												}

                                                ?>
                                              
                                                
      </div>

<?php


}

}
   }


?>