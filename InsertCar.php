<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Insert Car</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
	</head>

	<body>
    <div class="container">

	<?php

	if (isset($_POST['submit'])) {
    
//connection
//validation
$errors=[];
$title= '';
if (isset($_POST['title']) && empty($_POST['title'])){
	$errors['titleerror']= "You Should Enter Title";
} else {
    $title = $_POST['title'];
}
$content = $_POST['content'];
$price = $_POST['price'];
$model = $_POST['model'];
$type = $_POST['type'];
$pro = $_POST['pro'];
$image = $_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];
$folder='./images/'.$image;

if (count($errors)<=0) {
$pdo = new pdo("mysql:host=localhost;dbname=carsweb", "root", "");

if (move_uploaded_file($temp, $folder)) {
	echo "uploaded";
}
//query
$pdo->query("insert into cars(title,content,price,model,type,pro,image)
values('$title','$content','$price','$model','$type','$pro','$image')");

//close
// $close=null;
}}

?>
			<form method="POST" action="<?php echo $_SERVER ['PHP_SELF']; ?>" class="m-auto" style="max-width:600px" enctype="multipart/form-data">
				<h3 class="my-4">Insert Car</h3>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="title2" class="col-md-5 col-form-label">Car Title</label>
					<div class="col-md-7">
                        <input type="text" class="form-control form-control-lg" id="title2" name="title">
                        <span style="color: red;"> <?php if(isset($error['titleerror'])){echo $error['titleerror'];} ?></span>
					   </div>
				</div>
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="content4" class="col-md-5 col-form-label">Content</label>
					<div class="col-md-7"><textarea class="form-control form-control-lg" id="content4" name="content" ></textarea></div>
				</div>
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="price6" class="col-md-5 col-form-label">Price</label>
					<div class="col-md-7"><input type="text" class="form-control form-control-lg" id="price6" name="price"></div>
				</div>
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="model6" class="col-md-5 col-form-label">Model</label>
					<div class="col-md-7"><input type="text" class="form-control form-control-lg" id="model6" name="model"></div>
				</div>
				<div class="form-group mb-3 row"><label for="model6" class="col-md-5 col-form-label">Type</label>
					<div class="col-md-7"><input type="text" class="form-control form-control-lg" id="model6" name="type"></div>
				</div>
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row">
                    <label for="select-option1" class="col-md-5 col-form-label">Auto / Manual</label>
					<div class="col-md-7">
                        <select class="form-select custom-select custom-select-lg" id="select-option1" name="type">
							<option value="auto">Auto</option>
							<option value="manuel">Manual</option>
							<option value="hypered">Hypered</option>
						</select></div>
				</div>
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="properties6" class="col-md-5 col-form-label">Propereties</label>
					<div class="col-md-7"><input type="text" class="form-control form-control-lg" id="properties6" name="pro"></div>
				</div>
				<hr class="my-4" />
				<div>
					<label for="image" class="col-md-5 col-form-label">Select Image</label>
				<input type="file" id="image" name="image" accept="image/*">
				</div>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="insert10" class="col-md-5 col-form-label"></label>
				<div class="col-md-7"><button class="btn btn-primary btn-lg" type="submit" name="submit">Insert</button></div>
			</div>
			</form>
		</div>
 	</body>

 </html>