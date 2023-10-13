<?php
include_once("includes/logged.php");
include_once("includes/conn.php");
if(isset($_GET["id"])){
	$id=$_GET["id"];

}else {
$id=$_POST["id"];
$title=$_POST["title"];
$price=$_POST["price"];
$model=$_POST["model"];
$auto=$_POST["auto"];
$content=$_POST["content"];
$properties=$_POST["properties"];
if(isset($_POST["published"])){
	$published=1;
}else{
	$published=0;
}
$oldImage=$_POST["oldImage"];
include_once("includes/updateImage.php");
 $sql="UPDATE `cars` SET `title`=?,`content`=?,`price`=?,`model`=?,`auto`=?,`properties`=?,`image`=?,`published`=? WHERE id=?";
 $stmt=$conn->prepare($sql);
 $stmt->execute([$title,$content,$price,$model,$auto,$properties,$image_name,$published, $id]);
	 }

	 // show car data on the form
	 try{
		$sql="SELECT * FROM `cars` WHERE id = ? ";    
		$stmt=$conn->prepare($sql);
		$stmt->execute([$id]);
		$result=$stmt->fetch();
		$title=$result["title"];
		$price=$result["price"];
		$model=$result["model"];
		$auto=$result["auto"];
        $cat_id=$result["category_id"];
		$published=$result["published"];
		if($published){
		$str_published="checked";
		}else{
			$str_published="";
		}
		$image=$result["image"];
		$content=$result["content"];
		$properties=$result["properties"];
	   if($auto){
		$automatic ="selected";
		$manual="";
	   }else{
		$automatic ="";
		$manual="selected";
	   }
     }
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}

    $sql="SELECT * FROM `categories`" ;
    $stmtCat=$conn->prepare($sql);
    $stmtCat->execute();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit / Update Car</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="m-auto" style="max-width:600px" enctype="multipart/form-data">
            <h3 class="my-4">Edit / Update Car</h3>
            <hr class="my-4" />
            <div class="form-group mb-3 result"><label for="title2" class="col-md-5 col-form-label">Car Title</label>
                <div class="col-md-7"><input type="text" class="form-control form-control-lg" id="title2" name="title"
                        required value="<?php echo $title?>"></div>
            </div>
            <hr class="bg-transparent border-0 py-1" />
            <div class="form-group mb-3 result"><label for="content4" class="col-md-5 col-form-label">Content</label>
                <div class="col-md-7"><textarea class="form-control form-control-lg" id="content4" name="content"
                        required><?php echo $content?></textarea></div>
            </div>
            <hr class="bg-transparent border-0 py-1" />
            <div class="form-group mb-3 result"><label for="price6" class="col-md-5 col-form-label">Price</label>
                <div class="col-md-7"><input type="text" class="form-control form-control-lg" id="price6" name="price"
                        value="<?php echo $price?>"></div>
            </div>
            <hr class="bg-transparent border-0 py-1" />
            <div class="form-group mb-3 result"><label for="model6" class="col-md-5 col-form-label">Model</label>
                <div class="col-md-7"><input type="text" class="form-control form-control-lg" id="model6" name="model"
                        value="<?php echo $model?>"></div>
            </div>
            <hr class="bg-transparent border-0 py-1" />
            <div class="form-group mb-3 result"><label for="select-option1" class="col-md-5 col-form-label">Auto /
                    Manual</label>
                <div class="col-md-7">
					<select class="form-select custom-select custom-select-lg" id="select-option1" name="auto">
                        <option value="1" <?php echo $automatic ?>>Auto</option>
                        <option value="0" <?php echo $manual ?>>Manual</option>

                    </select></div>
            </div>
            <hr class="bg-transparent border-0 py-1" />
            <div class="form-group mb-3 result"><label for="properties6"
                    class="col-md-5 col-form-label">Properties</label>
                <div class="col-md-7"><input type="text" class="form-control form-control-lg" id="properties6"
                        name="properties" value="<?php echo $properties?>"></div>
            </div>
            <hr class="my-4" />
            <div>
                <label for="image" class="col-md-5 col-form-label">Select Image</label>
                <input type="file" id="image" name="image" accept="image/*">
                <img src="../img/<?php echo $image ?>" alt="<?php echo $title ?>" style="width:300px;">
            </div>
            <hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="select-option1" class="col-md-5 col-form-label">Category</label>
					<div class="col-md-7">
						<select class="form-select custom-select custom-select-lg" name="category"  id="select-option1">
							<option value="">Select Category</option>
							<?php
							            foreach($stmtCat->fetchAll() as $row){
											$currcategory=$row["category"];
											$crrcatId=$row["id"];
                                            if($crrcatId==$cat_id){
                                                $selected="selected";
                                            }else{
                                                $selected="";
                                            }
											
							?>
							<option value="<?php echo $crrcatId?>" <?php echo $selected?>><?php echo $currcategory?></option>
							<?php }?>
						</select></div>
				</div>
            <hr class="bg-transparent border-0 py-1" />
            <div class="form-group mb-3 result"><label for="model7" class="col-md-5 col-form-label">Published</label>
                <div class="col-md-7"><input type="checkbox" id="model7" name="published" <?php  echo $str_published ?>>
                </div>
            </div>
            <hr class="my-4" />
            <div class="form-group mb-3 result"><label for="insert10" class="col-md-5 col-form-label"></label>
                <input type="hidden" name="id" value=<?php echo $id ?>>
                <input type="hidden" name="oldImage" value=<?php echo $image ?>>
                <div class="col-md-7"><button class="btn btn-primary btn-lg" type="submit">Update</button></div>
            </div>
        </form>
    </div>
</body>

</html>